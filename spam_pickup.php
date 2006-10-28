<?php
// $Id: spam_pickup.php,v 1.8 2006/10/28 14:08:58 henoheno Exp $
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
$average = $count ? ($area / $count) : 'NULL';

echo "TOTAL = $count URIs, AREA_TOTAL = $area, AREA_AVERAGE = " . $average . "</br >" . "</br >";
var_dump($results);
echo '</pre>';

?>
