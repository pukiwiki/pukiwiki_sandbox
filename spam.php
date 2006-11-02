<?php
// $Id: spam.php,v 1.6 2006/11/02 15:17:41 henoheno Exp $
// Copyright (C) 2006 PukiWiki Developers Team
// License: GPL v2 or (at your option) any later version

// Functions for Concept-work of spam-uri metrics

// Return an array of normalized/parsed URIs in the $string
// [OK] http://nasty.example.org#nasty_string
// [OK] http://nasty.example.org/foo/xxx#nasty_string/bar
// [OK] ftp://dfshodfs:80/dfsdfs
// [OK] http://victim.example.org/go?http%3A%2F%2Fnasty.example.org
// [OK] http://victim.example.org/gphttp://nasty.example.org
function spam_pickup($string = '')
{
	// Preprocess: urldecode() and adding spaces
	$string = preg_replace('#([a-z][a-z0-9.+-]{1,8}://)#i',
		' $1', urldecode($string));

	// Not available for user@password, IDN
	$array = array();
	preg_match_all(
		// Refer RFC3986
		'#(\b[a-z][a-z0-9.+-]{1,8})://' .	// 1: Scheme
		'(' .
			// 2: Host
			'\[[0-9a-f:.]+\]' . '|' .				// IPv6([colon-hex and dot]): RFC2732
			'(?:[0-9]{1-3}\.){3}[0-9]{1-3}' . '|' .	// IPv4(dot-decimal): 001.22.3.44
			'[^\s<>"\'\[\]:/\#?]+' . 				// FQDN: foo.example.org
		')' .
		'(?::([a-z0-9]{2,}))?' .			// 3: Port
		'((?:/+[^\s<>"\'\[\]/\#]+)*/+)?' .	// 4: Directory path or path-info
		'([^\s<>"\'\[\]\#]+)?' .			// 5: File and query string
											// #: Flagment
		'#i',
		 $string, $array, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
	//var_dump(recursive_map('htmlspecialchars', $array));
	// Shrink $array
	$parts = array(1 => 'scheme', 2 => 'host', 3 => 'port',
		4 => 'path', 5 => 'file');
	$default = array('');
	foreach(array_keys($array) as $uri) {
		unset($array[$uri][0]); // Matched string itself
		array_rename_keys($array[$uri], $parts, TRUE, $default);
		$offset = $array[$uri]['scheme'][1]; // Scheme's offset

		// Remove offsets (with normalization)
		foreach(array_keys($array[$uri]) as $part) {
			$array[$uri][$part] =
					strtolower($array[$uri][$part][0]);
		}
		$array[$uri]['path']   = path_normalize($array[$uri]['path']);
		$array[$uri]['offset'] = $offset;
		$array[$uri]['area']   = 0;
	}

	// Area elevation for '(especially external)link' intension
	if (! empty($array)) {
		// Anchor tags by preg_match_all()
		// [OK] <a href="http://nasty.example.com">visit http://nasty.example.com/</a>
		// [NG] <a href="http://ng.example.com">visit http://ng.example.com _not_ended_
		// [NG] <a href=  >Good site!</a> <a href= "#" >test</a>
		$areas = array();
		preg_match_all('#<a\b[^>]*href[^>]*>.*?</a\b[^>]*(>)#i',
			 $string, $areas, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
		//var_dump(recursive_map('htmlspecialchars', $areas));
		foreach(array_keys($areas) as $area) {
			$areas[$area] =  array(
				$areas[$area][0][1], // [0][1] = Area start (<a href>)
				$areas[$area][1][1], // [1][1] = Area end   (</a>)
			);
		}
		area_measure($areas, $array);

		// Various Wiki syntax
		// [text_or_uri>text_or_uri]
		// [text_or_uri:text_or_uri]
		// [text_or_uri|text_or_uri]
		// [text_or_uri->text_or_uri]
		// [text_or_uri text_or_uri] // MediaWiki
		// MediaWiki: [http://nasty.example.com/ visit http://nasty.example.com/]

		// phpBB's "BBCode" by preg_match_all()
		// [url]http://nasty.example.com/[/url]
		// [link]http://nasty.example.com/[/link]
		// [url=http://nasty.example.com]visit http://nasty.example.com/[/url]
		// [link http://nasty.example.com/]buy something[/link]
		// ?? [url=][/url]
		$areas = array();
		preg_match_all('#\[(url|link)\b[^\]]*\].*?\[/\1\b[^\]]*(\])#i',
			 $string, $areas, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
		//var_dump(recursive_map('htmlspecialchars', $areas));
		foreach(array_keys($areas) as $area) {
			$areas[$area] = array(
				$areas[$area][0][1], // [0][1] = Area start ([url])
				$areas[$area][2][1], // [4][1] = Area end   ([/url])
			);
		}
		area_measure($areas, $array);

		// Remove 'offset's for area_measure()
		foreach(array_keys($array) as $key)
			unset($array[$key]['offset']);
	}

	return $array;
}

// $array[0] => $array['name']
function array_rename_keys(& $array, $rename = array(), $force = FALSE, $default = '')
{
    if ($force) {
		foreach($rename as $from => $to) {
			if (isset($array[$from])) {
				$array[$to] = & $array[$from];
				unset($array[$from]);
			} else  {
				$array[$to] = $default;
			}
		}
	} else {
		foreach(array_keys($rename) as $from) {
			if (! isset($array[$from])) {
				return FALSE;
			}
		}
		foreach($rename as $from => $to) {
			$array[$to] = & $array[$from];
			unset($array[$from]);
		}
	}
	return TRUE;
}


// Path normalization
// example.org => example.org/
// example.org#hoge -> example.org/#hoge
// example.org/path/a/b/./c////./d -> example.org/path/a/b/c/d
// example.org/path/../../a/../back
function path_normalize($path = '', $divider = '/', $addroot = TRUE)
{
	if (! is_string($path) || $path == '') {
		$path = $addroot ? $divider : '';
	} else {
		$path = trim($path);
		$last = ($path[strlen($path) - 1] == $divider) ? $divider : '';
		$array = explode($divider, $path);

		// Remove paddings
		foreach(array_keys($array) as $key) {
			if ($array[$key] == '' || $array[$key] == '.')
				 unset($array[$key]);
		}
		// Back-track
		$tmp = array();
		foreach($array as $value) {
			if ($value == '..') {
				array_pop($tmp);
			} else {
				array_push($tmp, $value);
			}
		}
		$array = & $tmp;

		$path = $addroot ? $divider : '';
		if (! empty($array)) $path .= implode($divider, $array) . $last;
	}

	return $path;
}

// If in doubt, it's a little doubtful
function area_measure($areas, &$array, $belief = -1, $a_key = 'area', $o_key = 'offset')
{
	if (! is_array($areas) || ! is_array($array)) return;

	$areas_keys = array_keys($areas);
	foreach(array_keys($array) as $u_index) {
		$offset = isset($array[$u_index][$o_key]) ?
			intval($array[$u_index][$o_key]) : 0;
		foreach($areas_keys as $a_index) {
			if (isset($array[$u_index][$a_key])) {
				$offset_s = intval($areas[$a_index][0]);
				$offset_e = intval($areas[$a_index][1]);
				if ($offset_s < $offset && $offset < $offset_e) {
					$array[$u_index][$a_key] += $belief;
				}
			}
		}
	}
}

// Simple spam filter (for one text field)
function pkwk_spamfilter($action, $page, $target = '')
{
	$is_spam = false;
	$pickups = spam_pickup($target);
	if (! empty($pickups)) {
		foreach($pickups as $pickup) {
			if ($pickup['area'] < 0) {
				$is_spam = TRUE;
				break;
			}
		}
	}
	if ($is_spam) {
		global $notify, $notify_subject;
		if ($notify) {
			$footer['ACTION'] = $action;
			$footer['PAGE']   = & $page;
			$footer['URI']    = get_script_uri() . '?' . rawurlencode($page);
			$footer['USER_AGENT']  = TRUE;
			$footer['REMOTE_ADDR'] = TRUE;
			pkwk_mail_notify($notify_subject . ' [blocked]', $target, $footer);
		}
		die("\n");
	}
}

?>
