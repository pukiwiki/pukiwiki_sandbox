<?php
// $Id: spam_pickup.php,v 1.11 2006/11/12 10:59:56 henoheno Exp $
// Concept-work of spam-uri metrics
// Copyright (C) 2006 PukiWiki Developers Team
// License: GPL v2 or (at your option) any later version

error_reporting(E_ALL); // Debug purpose

require('spam.php');

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

// $array[0] => $array['name']
function array_rename_key(& $array, $from, $to, $force = FALSE, $default = '')
{
	if (isset($array[$from])) {
		$array[$to] = & $array[$from];
		unset($array[$from]);
	} else if ($force) {
		$array[$to] = $default;
	} else {
		return FALSE;
	}
	return TRUE;
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

$pickup = TRUE;
if ($pickup) {
	$results = spam_uri_pickup($msg);

	// Measure
	$count = count($results);
	$area = 0;
	foreach($results as $result)
		if (isset($result['area']))
			$area += $result['area'];
	$average = $count ? ($area / $count) : 'NULL';

	echo "TOTAL = $count URIs, AREA_TOTAL = $area, AREA_AVERAGE = " . $average . "</br >" . "</br >";

	$a = array();
	var_dump(array_tree('/a/b/c/d/e', '/', false));
	var_dump($a);
	echo "<br/>";
}

var_dump('is_uri_spam($msg)', is_uri_spam($msg));

//$notify = TRUE;
//var_dump('pkwk_spamfilter($msg)', pkwk_spamfilter('A', 'PAGE', array('msg' => $msg)));
//echo "\n";

if ($pickup) {
	var_dump('$results', $results);
}
echo '</pre>';

?>
