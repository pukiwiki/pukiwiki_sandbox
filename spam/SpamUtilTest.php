<?php
// $Id: SpamUtilTest.php,v 1.1 2009/01/02 10:44:53 henoheno Exp $
// Copyright (C) 2007 heno
//
// Design test case for spam.php (called from runner.php)

if (! defined('SPAM_INI_FILE')) define('SPAM_INI_FILE', 'spam.ini.php');

require_once('spam_util.php');
require_once('PHPUnit/PHPUnit.php');

class SpamUtilTest extends PHPUnit_TestCase
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

	function testFunc_delimiter_reverse()
	{
		// Simple
		$this->assertEquals('com.example.bar.foo',
			 delimiter_reverse('foo.bar.example.com'));

		// A vector (an simple array)
		$array =            array('foo.ba2r', 'foo.bar2');
		$this->assertEquals(array('ba2r|foo', 'bar2|foo'),
			delimiter_reverse($array, '.', '|'));

		// Note: array_map() vanishes all keys
		$array =            array('FB' => 'foo.ba2r', 'FB2' => 'foo.bar2');
		$this->assertEquals(array('ba2r|foo', 'bar2|foo'),
			delimiter_reverse($array, '.', '|'));

		// A tree (recurse)
		$array =            array('foo.ba2r', 'foo.bar2', array('john.doe', 'bob.dude'));
		$this->assertEquals(array('ba2r|foo', 'bar2|foo', array('doe|john', 'dude|bob')),
			delimiter_reverse($array, '.', '|'));

		// Nothing changes
		$this->assertEquals('100', delimiter_reverse('100'));
		$this->assertEquals(array(), delimiter_reverse(array()));

		// Invalid cases
		$this->assertEquals(FALSE, delimiter_reverse(TRUE));
		$this->assertEquals(FALSE, delimiter_reverse(FALSE));
		$this->assertEquals(FALSE, delimiter_reverse(NULL));
		$this->assertEquals(FALSE, delimiter_reverse(100));
		$this->assertEquals(FALSE, delimiter_reverse('100', FALSE));
		$this->assertEquals(FALSE, delimiter_reverse('100', 0));
		$this->assertEquals(FALSE, delimiter_reverse('100', '0', 0));
	}

	function testFunc_strings()
	{
		// 1st argument: Null
		$this->assertEquals('',  strings(NULL,  0));
		$this->assertEquals('',  strings(TRUE,  0));
		$this->assertEquals('',  strings(FALSE, 0));
		$this->assertEquals('',  strings('',    0));
		$this->assertEquals('0', strings(0,     0));
		$this->assertEquals('1', strings(1,     0));

		// Setup
		$t1 = '1'    . "\n";
		$t2 = '12'   . "\n";
		$t3 = '123'  . "\n";
		$t4 = '1234' . "\n";
		$t5 = '12345';
		$test = $t1 . $t2 . $t3 . $t4 . $t5;

		// Minimum length
		$this->assertEquals($t1 . $t2 . $t3 . $t4 . $t5, strings($test, -1));
		$this->assertEquals($t1 . $t2 . $t3 . $t4 . $t5, strings($test,  0));
		$this->assertEquals($t1 . $t2 . $t3 . $t4 . $t5, strings($test,  1));
		$this->assertEquals(      $t2 . $t3 . $t4 . $t5, strings($test,  2));
		$this->assertEquals(            $t3 . $t4 . $t5, strings($test,  3));
		$this->assertEquals(                  $t4 . $t5, strings($test,  4));
		$this->assertEquals(                  $t4 . $t5, strings($test)); // Default
		$this->assertEquals(                        $t5, strings($test,  5));

		// Preserve the last newline
		$this->assertEquals($t4 . $t5,        strings($test       , 4));
		$this->assertEquals($t4 . $t5 . "\n", strings($test . "\n", 4));

		// Ignore sequential spaces, and spaces at the beginning/end of lines
		$test = '   A' . '	' . '   ' . 'B	';
		$this->assertEquals($test, strings($test, 0, FALSE));
		$this->assertEquals('A B', strings($test, 0, TRUE ));
	}

	function testFunc_array_count_leaves()
	{
		// Empty array = 0, if option is not set
		$array = array();
		$this->assertEquals(0, array_count_leaves($array, FALSE));
		$this->assertEquals(1, array_count_leaves($array, TRUE));
		$array = array(
			array(
				array()
			)
		);
		$this->assertEquals(0, array_count_leaves($array, FALSE));
		$this->assertEquals(1, array_count_leaves($array, TRUE));

		// One leaf = 1
		foreach(array(NULL, TRUE, FALSE, -1, 0, 1, '', 'foobar') as $value) {
			$this->assertEquals(1, array_count_leaves($value, FALSE));
			$this->assertEquals(1, array_count_leaves($value, TRUE));
		}

		// Compisite
		$array = array(
			1,
			'v1',
			array(),	// Empty array
			array(
				2,
				'v2',
				'k1' => TRUE,
				'k2' => FALSE,
				'k3' => array(),	// Empty array
				'k4' => array(
					3,
					'v3',
					'k5' => NULL,
					'k6' => array(),	// Empty array
				),
			),
			'k7'  => 4,
			'k8'  => 'v4',
			'k9'  => array(),	// Empty array
			'k10' => array(
				5,
				'v5',
				'k11' => NULL,
				'k12' => array(),	// Empty array
			),
		);
		$this->assertEquals(14, array_count_leaves($array, FALSE));
		$this->assertEquals(19, array_count_leaves($array, TRUE));
	}

	function testPhpFunc_array_unique()
	{
		$this->assertEquals(array(1), array_unique(array(1, 1)));

		// Keys are preserved, array()s inside are preserved
		$this->assertEquals(
			array(0, 2 => array(1, 1), 3 => 2),
			array_unique(
				array(0, 0, array(1, 1), 2, 2)
			)
		);

		// Keys are preserved
		$this->assertEquals(
			array(0, 2 => array(1, 1), 3 => 2),
			array_unique(array(0, 0, array(1, 1), 2, 2))
		);

		// ONLY the first array() is preserved
		$this->assertEquals(
			array(0 => array(1, 1)),
			array_unique(array_unique(array(0 => array(1, 1), 'a' => array(2,2), 'b' => array(3, 3))))
		);
	}

	function testFunc_array_merge_leaves()
	{
		// PHP array_unique_recursive(), PHP array_merge_leaves(), and array_merge_leaves()
		$array1 = array(1);
		$array2 = array(1);
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array(1, 1), $result);
		$result = array_unique_recursive($result);
		$this->assertEquals(array(1),    $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array(1),    $result);

		$array1 = array(2);
		$array2 = array(1);
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array(2, 1), $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array(1),    $result);

		// All NUMERIC keys are always renumbered from 0?
		$array1 = array('10' => 'f3');
		$array2 = array('10' => 'f4');
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array(0 => 'f3', 1 => 'f4'), $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array(10 => 'f4'), $result);

		// One more thing ...
		$array1 = array('20' => 'f5');
		$array2 = array();
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array(0 => 'f5'), $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array(20 => 'f5'), $result);

		// Non-numeric keys and values will be marged as you think?
		$array1 = array('a' => 'f1');
		$array2 = array('a' => 'f2');
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array('a' => array('f1', 'f2')), $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('a' => 'f2'), $result);

		// Non-numeric keys: An array and a value will be marged?
		$array1 = array('b' => array('k1'));
		$array2 = array('b' => 'k2');
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array('b' => array(0 => 'k1', 1 => 'k2')), $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('b' => array(0 => 'k1')), $result);

		// Combination?
		$array1 = array(
			2,
			'a'  => 'f1',
			'10' => 'f3',
			'20' => 'f5',
			'b'  => array('k1'),
		);
		$array2 = array(
			1,
			'a'  => 'f2',
			'10' => 'f4',
			'b'  => 'k2',
		);
		$result = array (
			2,
			'a' => array (
				'f1',
				'f2',
			),
			'f3',
			'f5',
			'b' => array (
				'k1',
				'k2',
			),
			1,
			'f4',
		);
		$result2 = array (
			 0  => 1,
			10  => 'f4',
			20  => 'f5',
			'a' => 'f2',
			'b' => array ('k1'),
		);
		$this->assertEquals($result,  array_merge_recursive($array1, $array2));
		$this->assertEquals($result2, array_merge_leaves($array1, $array2));

		// Values will not be unique?
		$array1 = array(5, 4);
		$array2 = array(4, 5);
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array(5, 4, 4, 5), $result);
		$this->assertEquals(array(5, 4),       array_unique_recursive($result));
		$this->assertEquals(array(0=>4, 1=>5), array_merge_leaves($array1, $array2));

		// One more thing ...?
		$array1 = array('b' => array('k3'));
		$array2 = array('b' => 'k3');
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array('b' => array('k3', 'k3')), $result);
		$result = array_unique_recursive($result);
		$this->assertEquals(array('b' => array('k3')),       $result);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('b' => array('k3')), $result);

		// Preserve numeric keys?
		$array1 = array('a' => array('' => NULL));
		$array2 = array('a' => array(5  => NULL));
		$array3 = array('a' => array(8  => NULL));
		//
		// BAD: PHP array_merge_recursive() don't preserve numeric keys
		$result = array_merge_recursive($array1, $array2);
		$this->assertEquals(array('a' => array('' => NULL, 0 => NULL)), $result);	// 0?
		$result = array_merge_recursive($array2, $array3);
		$this->assertEquals(array('a' => array(5 => NULL,  6 => NULL)), $result);	// 6?
		//
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('a' => array('' => NULL, 5 => NULL)), $result);	// 0?
		$result = array_merge_leaves($array2, $array3);
		$this->assertEquals(array('a' => array(5 => NULL,  8 => NULL)), $result);	// 6?

		// Merging array leaves
		$array1 = array('a' => TRUE);
		$array2 = array('b' => FALSE);
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('a' => TRUE, 'b' => FALSE), $result);

		$array1 = array('a' => TRUE);
		$array2 = array('a' => array('aa' => TRUE));
		$this->assertEquals($array2, array_merge_leaves($array1, $array2));
		$this->assertEquals($array2, array_merge_leaves($array2, $array1));

		$array1 = array('a' => array('a1' => TRUE));
		$array2 = array('a' => array('a2' => FALSE));
		$result = array_merge_leaves($array1, $array2);
		$this->assertEquals(array('a' => array('a1' => TRUE, 'a2' => FALSE)), $result);
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
