<?php
// $Id: spam_pickup.php,v 1.6 2006/10/28 13:54:25 henoheno Exp $
// Concept-work of spam-uri metrics
// Copyright (C) 2006 PukiWiki Developers Team
// License: GPL v2 or (at your option) any later version

error_reporting(E_ALL); // Debug purpose

// Return an array of normalized/parsed URIs in the $string
// [OK] http://nasty.example.org#nasty_string
function spam_pickup($string = '')
{
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
		'(?::([a-z0-9]*))?' .			// 3: Port
		'((?:/+[^\s<>"\'\[\]/]+)*/)?' .	// 4: Directory path or path-info
		'([^\s<>"\'\[\]]+)?' .			// 5: File and query string
		'#i',
		 $string, $array, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
		 // Tests: ftp://dfshodfs:80/dfsdfs
	//var_dump(recursive_map('htmlspecialchars', $array));
	// Shrink $array
	$_port = 3;
	$_path = 4;
	foreach(array_keys($array) as $uri) {
		unset($array[$uri][0]); // Matched string itself
		$offset = $array[$uri][1][1]; // [1][1] = scheme's offset
		foreach(array_keys($array[$uri]) as $part) {
			// Remove offsets (with normalization)
			$array[$uri][$part] =
					strtolower(urldecode($array[$uri][$part][0]));
		}
		
		if (! isset($array[$uri][$_port])) $array[$uri][$_port] = '';
		if (! isset($array[$uri][$_path])) $array[$uri][$_path] = '';
		$array[$uri][$_path] = path_normalize($array[$uri][$_path]);
		$array[$uri]['offset'] = $offset;
		$array[$uri]['area']  = 0;
	}

	// Area elevation for '(especially external)link' intension
	if (! empty($array)) {
		// Anchor tags by preg_match_all()
		// [OK] <a href="http://nasty.example.com">visit http://nasty.example.com/</a>
		// [NG] <a href="http://ng.example.com">visit http://ng.example.com _not_ended_
		// [??] <a href=  >Good site!</a> <a href= "#" >test</a>
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

// Path normalization
// example.org => example.org/
// example.org#hoge -> example.org/#hoge
// example.org/path/a/b/./c////./d -> example.org/path/a/b/c/d
// example.org/path/../../a/../back
function path_normalize($path = '')
{
	if (! is_string($path) || $path == '') {
		$path = '/';
	} else {
		$path = trim($path);
		$last = ($path[strlen($path) - 1] == '/') ? '/' : '';
		$array = explode('/', $path);

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

		if (empty($array)) {
			$path = '/';
		} else {
			$path = '/' . implode('/', $array) . $last;
		} 
	}
	return $path;
}

// If in doubt, it's a little doubtful
function area_measure($areas, &$array, $belief = -1, $a_key = 'area', $o_key = 'offset')
{
	if (! is_array($areas) || ! is_array($array)) return;

	$areas_keys = array_keys($areas);
	foreach(array_keys($array) as $u_index) {
		$offset = isset($array[$u_index][$o_key]) ? intval($array[$u_index][$o_key]) : 0;
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

function show_form($string)
{
	$base = basename(__FILE__);
	$string = htmlspecialchars($string);
	print <<< EOF
<form action="$base" method="post">
	<textarea name="msg" rows="8" cols="80">$string</textarea><br />
	<input type="submit" name="write" value="Submit" />
</form>
<br/>
EOF;
}


// Recursive array_map()
// e.g. Sanitilze ALL values (Debug purpose): var_dump(recursive_map('htmlspecialchars', $array));
function recursive_map($func, $array)
{
	if (is_array($array)) {
		if (! empty($array)) {
			$array = array_map('recursive_map',
				 array_fill(0, count($array), $func), $array);
		}
	} else {
		$array = $func($array);
	}
	return $array;
}


// ---- Show form and result
echo basename(__FILE__) . '<br />';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';
show_form($msg);
echo '<pre>';

$results = spam_pickup($msg);

// Measure
$count = count($results);
$area = 0;
foreach($results as $result)
	if (isset($result['area']))
		$area += $result['area'];
$average = $count ? ($area / $count) : 'NULL';

echo "TOTAL = $count URIs, AREA_TOTAL = $area, AREA_AVERAGE = " . $average . "</br >" . "</br >";
var_dump($results);
echo '</pre>';

?>
