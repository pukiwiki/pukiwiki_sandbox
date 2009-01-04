<?php
// $Id: SpamTest.php,v 1.27 2009/01/04 08:56:07 henoheno Exp $
// Copyright (C) 2007-2009 heno
//
// Design test case for spam.php (called from runner.php)

if (! defined('SPAM_INI_FILE')) define('SPAM_INI_FILE', 'spam.ini.php');

require_once('spam.php');
require_once('PHPUnit/PHPUnit.php');

class SpamTest extends PHPUnit_TestCase
{
	// Utility
	function setup_string_null()
	{
		return array(
			'[NULL]'	=> NULL,
			'[TRUE]'	=> TRUE,
			'[FALSE]'	=> FALSE,
			'[array(foobar)]' => array('foobar'),
			'[]'		=> '',
			'[0]'		=> 0,
			'[1]'		=> 1
		);
	}

	function testFunc_generate_glob_regex()
	{
		// 1st argument: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', generate_glob_regex($value), $key);
		}

		$this->assertEquals('.*\.txt', generate_glob_regex('*.txt'));
		$this->assertEquals('A.A',     generate_glob_regex('A?A'));
	}

	function testFunc_generate_host_regex()
	{
		// 1st argument: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', generate_host_regex($value), $key);
		}

		$this->assertEquals('localhost',             generate_host_regex('localhost'));
		$this->assertEquals('example\.org',          generate_host_regex('example.org'));
		$this->assertEquals('(?:.*\.)?example\.org', generate_host_regex('.example.org'));
		$this->assertEquals('.*\.example\.org',      generate_host_regex('*.example.org'));
		$this->assertEquals('.*\..*\.example\.org',  generate_host_regex('*.*.example.org'));
		$this->assertEquals('10\.20\.30\.40',        generate_host_regex('10.20.30.40'));

		// Should match with 192.168.0.0/16
		//$this->assertEquals('192\.168\.',       generate_host_regex('192.168.'));
	}

	function testFunc_get_blocklist()
	{
		if (! defined('SPAM_INI_FILE') || ! file_exists(SPAM_INI_FILE)) {
			$this->fail('SPAM_INI_FILE not defined or not found');
			return;
		}

		// get_blocklist_add()
		$array = array();
		//
		get_blocklist_add($array,   'foo', 'bar');
		$this->assertEquals(1,      count($array));
		$this->assertEquals('bar',  $array['foo']);
		//
		get_blocklist_add($array,   'hoge', 'fuga');
		$this->assertEquals(2,      count($array));
		$this->assertEquals('bar',  $array['foo']);
		$this->assertEquals('fuga', $array['hoge']);
		//
		get_blocklist_add($array,   -1, '*.txt');
		$this->assertEquals(3,      count($array));
		$this->assertEquals('bar',  $array['foo']);
		$this->assertEquals('fuga', $array['hoge']);
		$this->assertEquals('#^.*\.txt$#i', $array['*.txt']);

		// get_blocklist()
		// ALL
		$array = get_blocklist();
		$this->assertTrue(isset($array['C']));
		$this->assertTrue(isset($array['goodhost']));
		// badhost
		$array = get_blocklist('B-1');
		$this->assertTrue(isset($array['Google.com']));
		// goodhost
		$array = get_blocklist('goodhost');
		$this->assertTrue(isset($array['IANA-examples']));
	}

}

?>
