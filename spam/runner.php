<?php
// $Id: runner.php,v 1.2 2007/04/12 14:39:39 henoheno Exp $
//
// Design test runner (web)

error_reporting(E_ALL); // Debug purpose

require_once('SpamTest.php');
require_once('PHPUnit/PHPUnit.php');
require_once('PHPUnit/HTML.php');

$suite = new PHPUnit_TestSuite('SpamTest');
$gui = new PHPUnit_GUI_HTML($suite);
$gui->show();

?>
