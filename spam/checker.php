<?php
// $Id: checker.php,v 1.9 2011/01/25 13:16:35 henoheno Exp $
// Concept-work of spam-uri metrics
// Copyright (C) 2006-2007 PukiWiki Developers Team
// License: GPL v2 or (at your option) any later version

error_reporting(E_ALL); // Debug purpose

if (! defined('CONTENT_CHARSET')) define('CONTENT_CHARSET', 'ISO-8859-1');
require('spam.php');

// Recursive array_map()
// e.g. Sanitilze ALL values (Debug purpose): var_dump(recursive_map('htmlsc', $array));
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

function show_form($string, $asap = FALSE, $progress = TRUE, $pickup = TRUE)
{
	$string   = htmlsc($string);
	$asap     = $asap     ? ' checked' : '';
	$progress = $progress ? ' checked' : '';
	$pickup   = $pickup   ? ' checked' : '';
	$base     = basename(__FILE__);

	return <<< EOF
<form action="$base" method="post">

	<textarea name="msg" rows="8" cols="80">$string</textarea><br />

	<input type="checkbox" name="asap"   id="asap"   value="on"$asap>
	<label for="asap">asap</label><br />

	<input type="checkbox" name="progress" id="progress" value="on"$progress>
	<label for="progress">Show \$progress</label><br />

	<input type="checkbox" name="pickup" id="pickup" value="on"$pickup>
	<label for="pickup">Show pickuped URIs</label><br />

	<input type="submit" name="write" value="Submit" />

</form>
EOF;

}


// ---- Show form and result
echo basename(__FILE__) . '<br />';

$msg    = isset($_POST['msg'])      ? $_POST['msg'] : '';
$asap   = isset($_POST['asap'])     ? TRUE : FALSE;
$prog   = isset($_POST['progress']) ? TRUE : FALSE;
$pickup = isset($_POST['pickup'])   ? TRUE : FALSE;

echo show_form(stripslashes($msg), $asap, $prog, $pickup);
echo '<br/>';


// -----------------------------------------------------
	$spam = array();

	// Threshold and rules for insertion (default)
	$spam['method']['_default'] = array(
		'_comment'     => '_default',
		'quantity'     =>  8,
		//'non_uniquri'  =>  3,
		'non_uniqhost' =>  3,
		'area_anchor'  =>  0,
		'area_bbcode'  =>  0,
		'uniqhost'     => TRUE,
		'badhost'      => TRUE,
		//'asap'         => TRUE, // Stop as soon as possible (quick but less-info)
	);
	
	// For editing
	// NOTE:
	// Any thresholds may LOCK your contents by
	// "posting one URL" many times.
	// Any rules will lock contents that have NG things already.
	$spam['method']['edit'] = array(
		// Supposed_by_you(n) * Edit_form_spec(2) * Margin(1.5)
		'_comment'       => 'edit',
		'quantity'       => 150 * 1.5,
		'non_uniq'       =>   5 * 1.5,
		//'non_uniquri'  =>   5 * 1.5,
		//'non_uniqhost' =>  50 * 1.5,
		'area_anchor'    =>   3 * 1.5,
		'area_bbcode'    =>   1 * 1.5,
		'uniqhost'       => TRUE,
		'badhost'        => TRUE,
		//'asap'         => TRUE,
	);
	
	
$method = & $spam['method']['_default'];
//$method = & $spam['method']['edit'];
//$method = check_uri_spam_method();
//var_dump($method);
// -----------------------------------------------------

if ($asap) $method['asap'] = TRUE;

$progress = check_uri_spam(
	array(
		'a http://foobaA.example.com',
		$msg,
		'b http://foobarB.example.com'
	), $method);

if (! empty($progress)) {


	if (empty($progress['is_spam'])) {
		echo 'ACTION: Seems not a spam';
		echo '<br />';
	} else {
		echo 'ACTION: Blocked by ' . summarize_spam_progress($progress, TRUE);
		echo '<br />';

		if (! $asap) {
			echo 'METRICS: ' . summarize_spam_progress($progress) . '<br />' . "\n";
		}

		$action = 'Blocked by: ' . summarize_spam_progress($progress, TRUE);

		$tmp = summarize_detail_badhost($progress);
		if ($tmp != '') {
			echo 'DETAIL_BADHOST: ' . 
				str_replace('  ', '&nbsp; ', nl2br(htmlsc($tmp). "\n"));
		}
	}

	$tmp = summarize_detail_newtral($progress);
	if (! $asap && $tmp != '') {
		echo 'DETAIL_NEUTRAL_HOST: ' . 
				str_replace('  ', '&nbsp; ', nl2br(htmlsc($tmp). "\n"));
	}
	
	if ($prog) {
		echo '<pre>';
		echo '$progress:' . "\n";
		echo htmlsc(var_export($progress, TRUE));
		echo '</pre>';
	}
}

if ($pickup) {
	echo '<pre>';
 	$results = spam_uri_pickup($msg);
 	$results = uri_pickup_normalize($results);
 	$results = uri_pickup_normalize_pathfile($results);
	echo '$results:' . "\n";
	echo htmlsc(var_export($results, TRUE));
	echo '</pre>';
}
?>
