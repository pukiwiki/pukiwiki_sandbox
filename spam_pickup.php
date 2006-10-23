<?php
// $Id: spam_pickup.php,v 1.1 2006/10/23 12:57:06 henoheno Exp $
// Concept-work of spam-uri metrics
// Copyright (C) 2006 PukiWiki Developer Team

error_reporting(E_ALL); // Debug purpose

// TODO: Use 'm' multi-line regex option

// Return an array of normalized/parsed URIs in the $string
// [OK] http://nasty.example.org#nasty_string
function spam_pickup($string = '')
{
	// Picup external URIs: scheme:+//+fqdn(/path)
	// Not available for IPv6 host, user@password, port
	$array = array();
	preg_match_all(
		'#(https?|\b[a-z0-9]{3,6})' .	// 1:Scheme
		':?//' .						// "//" or "://"
		'([^\s<>"\'\[\]\#/]+)' .		// 2:Host (FQDN or IPv4 address)
		'(?::[a-z0-9]*)?' .				// Port
		'([^\s<>"\'\[\]]+)?' .			// 3:Path and Query string
		'#i', $string, $array, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
	// Shrink $array
	$_path = 3;
	foreach(array_keys($array) as $uri) {
		unset($array[$uri][0]); // Matched string itself
		$offset = $array[$uri][1][1]; // [1][1] = scheme's offset
		foreach(array_keys($array[$uri]) as $part) {
			// Remove offsets (with normalization)
			$array[$uri][$part] =
				strtolower(urldecode($array[$uri][$part][0]));
		}
		// example.org => example.org/
		if (! isset($array[$uri][$_path])) $array[$uri][$_path] = '/';
		$array[$uri]['offset'] = $offset;
		$array[$uri]['area']  = 0;
	}

	// Area elevation for '(especially external)link' intension
	if (! empty($array)) {
		// Anchor tags by preg_match_all()
		// [OK] <a href="http://nasty.example.com">visit http://nasty.example.com/</a>
		// [NG] <a href="http://ng.example.com">visit http://ng.example.com _not_ended_
		$areas = array();
		preg_match_all('#<a\b[^>]*href[^>]*>.*?</a\b[^>]*(>)#i',
			 $string, $areas, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
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
		$areas = array();
		preg_match_all('#\[(url|link)\b[^\]]*\].*?\[/\1\b[^\]]*(\])#i',
			 $string, $areas, PREG_SET_ORDER | PREG_OFFSET_CAPTURE);
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

echo "TOTAL = $count URIs, AREA_TOTAL = $area, AREA_AVERAGE = " . ($area / $count) . "</br >" . "</br >";
var_dump($results);
echo '</pre>';


?>
