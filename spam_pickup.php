<?php
// $Id: spam_pickup.php,v 1.38 2007/01/21 14:54:57 henoheno Exp $
// Concept-work of spam-uri metrics
// Copyright (C) 2006-2007 PukiWiki Developers Team
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

function show_form($string, $asap = FALSE, $progress = TRUE, $pickup = TRUE)
{
	$string   = htmlspecialchars($string);
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

echo show_form($msg, $asap, $prog, $pickup);
echo '<br/>';

echo '<pre>';

$method = check_uri_spam_method();
if ($asap) $method['asap'] = TRUE;

$progress = check_uri_spam(array('a', $msg, 'b'), $method);

if (! empty($progress)) {


	if (empty($progress['is_spam'])) {
		var_dump('ACTION: Seems not a spam');
	} else {
		var_dump('ACTION: Blocked by ' . summarize_spam_progress($progress, TRUE));

		if (! $asap) var_dump('METRICS: ' . summarize_spam_progress($progress));

		$action = 'Blocked by: ' . summarize_spam_progress($progress, TRUE);
		if (isset($progress['is_spam']['badhost'])) {
			$badhost = array();
			foreach($progress['is_spam']['badhost'] as $glob=>$number) {
				$badhost[] = $glob . '(' . $number . ')';
			}
			var_dump('DETAIL_BADHOST: ' . implode(', ', $badhost));
			//var_dump($progress['is_spam']['badhost']);
		}
	}

	if (isset($progress['remains']['badhost'])) {
		$count = count($progress['remains']['badhost']);
		var_dump('DETAIL_NEUTRAL_HOST: ' . $count .
			' (' .
				preg_replace(
					'/[^, a-z0-9.-]/i', '',
					implode(', ', array_keys($progress['remains']['badhost']))
				) .
			')'
		);
	}
	
	if ($prog) var_dump($progress);
}

if ($pickup) {
	$results = spam_uri_pickup($msg);
	$results = uri_array_normalize($results, TRUE);
	var_dump('$results', $results);
}

echo '</pre>';

?>
