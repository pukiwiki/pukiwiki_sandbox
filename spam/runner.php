<?php
// $Id: runner.php,v 1.1 2007/04/12 14:37:57 henoheno Exp $
//
// Test runner (web)

error_reporting(E_ALL); // Debug purpose

require_once('SpamTest.php');
require_once('PHPUnit/PHPUnit.php');
require_once('PHPUnit/HTML.php');

$suite = new PHPUnit_TestSuite('SpamTest');

$gui = new PHPUnit_GUI_HTML($suite);
$gui->show();

?>
