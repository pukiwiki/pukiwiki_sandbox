<?php
// $Id: spam_pickup.php,v 1.19 2006/11/26 14:41:51 henoheno Exp $
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

list($is_spam, $progress) = check_uri_spam($msg, array(), FALSE);
//list($is_spam, $progress) = check_uri_spam(array('a', $msg, $msg, 'b'), array(), FALSE);
if ($is_spam) {
	$action = 'Blocked by: ' . summarize_check_uri_spam_progress($progress);
	var_dump($action);
}

var_dump('check_uri_spam($msg)', $progress);

if ($pickup) {
	$results = spam_uri_pickup($msg);
	var_dump('$results', $results);
}
echo '</pre>';

?>
