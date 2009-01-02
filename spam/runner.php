<?php
// $Id: runner.php,v 1.4 2009/01/02 10:48:21 henoheno Exp $
//
// Design test runner (web)

error_reporting(E_ALL); // Debug purpose

require_once('SpamTest.php');
require_once('SpamPickupTest.php');
require_once('SpamUtilTest.php');

require_once('PHPUnit/PHPUnit.php');
require_once('PHPUnit/HTML.php');

$suite = array(
	new PHPUnit_TestSuite('SpamTest'),
	new PHPUnit_TestSuite('SpamPickupTest'),
	new PHPUnit_TestSuite('SpamUtilTest'),
);
$gui = new PHPUnit_GUI_HTML($suite);
$gui->show();

?>
