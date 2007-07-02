<?php
// $Id: runner.php,v 1.3 2007/07/02 14:51:40 henoheno Exp $
//
// Design test runner (web)

error_reporting(E_ALL); // Debug purpose

require_once('SpamTest.php');
require_once('SpamPickupTest.php');

require_once('PHPUnit/PHPUnit.php');
require_once('PHPUnit/HTML.php');

$suite = array(
	new PHPUnit_TestSuite('SpamTest'),
	new PHPUnit_TestSuite('SpamPickupTest'),
);
$gui = new PHPUnit_GUI_HTML($suite);
$gui->show();

?>
