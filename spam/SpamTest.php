<?php
// $Id: SpamTest.php,v 1.2 2007/04/12 14:39:39 henoheno Exp $
// Copyright (C) 2007 heno
//
// Design test case for spam.php (called from runner.php)

if (! defined('SPAM_INI_FILE')) define('SPAM_INI_FILE', 'spam.ini.php');

require_once('spam.php');
require_once('PHPUnit/PHPUnit.php');

class SpamTest extends PHPUnit_TestCase
{
	function testFunc_uri_pickup()
	{
		// 1st argument: Null
		$this->assertEquals(0, count(uri_pickup(NULL)));
		$this->assertEquals(0, count(uri_pickup(TRUE)));
		$this->assertEquals(0, count(uri_pickup(FALSE)));
		$this->assertEquals(0, count(uri_pickup(array('foobar'))));
		$this->assertEquals(0, count(uri_pickup('')));
		$this->assertEquals(0, count(uri_pickup(0)));

		// 1st argument: Some
		$test_string = <<<EOF
			TTP://wwW.Example.Org#TTP_and_www
			https://nasty.example.org:443/foo/xxx#port443/slash
			sftp://foobar.example.org:80/dfsdfs#ftp_bat_port80
			ftp://cnn.example.com&story=breaking_news@10.0.0.1/top_story.htm
			http://192.168.1.4:443#IPv4
EOF;
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals(5, count($results));

		// ttp://wwW.Example.Org:80#TTP_and_www
		$this->assertEquals('http',           $results[0]['scheme']);
		$this->assertEquals('',               $results[0]['userinfo']);
		$this->assertEquals('example.org',    $results[0]['host']);
		$this->assertEquals('',               $results[0]['port']);
		$this->assertEquals('/',              $results[0]['path']);
		$this->assertEquals('',               $results[0]['file']);
		$this->assertEquals('',               $results[0]['query']);
		$this->assertEquals('ttp_and_www',    $results[0]['fragment']);

		// https://nasty.example.org:443/foo/xxx#port443/slash
		$this->assertEquals('https',          $results[1]['scheme']);
		$this->assertEquals('',               $results[1]['userinfo']);
		$this->assertEquals('nasty.example.org', $results[1]['host']);
		$this->assertEquals('',               $results[1]['port']);
		$this->assertEquals('/foo/',          $results[1]['path']);
		$this->assertEquals('xxx',            $results[1]['file']);
		$this->assertEquals('',               $results[1]['query']);
		$this->assertEquals('port443',        $results[1]['fragment']);

		// sftp://foobar.example.org:80/dfsdfs#sftp_bat_port80
		$this->assertEquals('sftp',           $results[2]['scheme']);
		$this->assertEquals('',               $results[2]['userinfo']);
		$this->assertEquals('foobar.example.org', $results[2]['host']);
		$this->assertEquals('80',             $results[2]['port']);
		$this->assertEquals('/',              $results[2]['path']);
		$this->assertEquals('dfsdfs',         $results[2]['file']);
		$this->assertEquals('',               $results[2]['query']);
		$this->assertEquals('ftp_bat_port80', $results[2]['fragment']);

		// ftp://cnn.example.com&story=breaking_news@10.0.0.1/top_story.htm
		$this->assertEquals('ftp',            $results[3]['scheme']);
		$this->assertEquals('cnn.example.com&story=breaking_news', $results[3]['userinfo']);
		$this->assertEquals('10.0.0.1',       $results[3]['host']);
		$this->assertEquals('',               $results[3]['port']);
		$this->assertEquals('/',              $results[3]['path']);
		$this->assertEquals('top_story.htm',  $results[3]['file']);
		$this->assertEquals('',               $results[3]['query']);
		$this->assertEquals('',               $results[3]['fragment']);
	}

	function testFunc_scheme_normalize()
	{
		// Null
		$this->assertEquals('', scheme_normalize(NULL));
		$this->assertEquals('', scheme_normalize(TRUE));
		$this->assertEquals('', scheme_normalize(FALSE));
		$this->assertEquals('', scheme_normalize(array('foobar')));
		$this->assertEquals('', scheme_normalize(''));
		$this->assertEquals('', scheme_normalize(0));
		$this->assertEquals('', scheme_normalize(1));

		// CASE
		$this->assertEquals('http', scheme_normalize('HTTP'));

		// Aliases
		$this->assertEquals('pop3',  scheme_normalize('pop'));
		$this->assertEquals('nntp',  scheme_normalize('news'));
		$this->assertEquals('imap',  scheme_normalize('imap4'));
		$this->assertEquals('nntps', scheme_normalize('snntp'));
		$this->assertEquals('nntps', scheme_normalize('snews'));
		$this->assertEquals('pop3s', scheme_normalize('spop3'));
		$this->assertEquals('pop3s', scheme_normalize('pops'));
		
		// Abbrevs
		$this->assertEquals('http',  scheme_normalize('ttp'));
		$this->assertEquals('https', scheme_normalize('ttps'));

		// Abbrevs considererd harmless
		$this->assertEquals('', scheme_normalize('ttp',  FALSE));
		$this->assertEquals('', scheme_normalize('ttps', FALSE));
	}

	function testFunc_host_normalize()
	{
		// Null
		$this->assertEquals('', host_normalize(NULL));
		$this->assertEquals('', host_normalize(TRUE));
		$this->assertEquals('', host_normalize(FALSE));
		$this->assertEquals('', host_normalize(array('foobar')));
		$this->assertEquals('', host_normalize(''));
		$this->assertEquals('', host_normalize(0));
		$this->assertEquals('', host_normalize(1));

		// Hostname is case-insensitive
		$this->assertEquals('example.org', host_normalize('ExAMPle.ORG'));

		// Cut 'www' (destructive)
		$this->assertEquals('example.org', host_normalize('WWW.example.org'));
	}

	function testFunc_port_normalize()
	{
		$scheme = 'dont_care';

		// 1st argument: Null
		$this->assertEquals('', port_normalize(NULL, $scheme));
		$this->assertEquals('', port_normalize(TRUE, $scheme));
		$this->assertEquals('', port_normalize(FALSE, $scheme));
		$this->assertEquals('', port_normalize(array('foobar'), $scheme));
		$this->assertEquals('', port_normalize('',   $scheme));

		// 1st argument: Known port
		$this->assertEquals('',    port_normalize(-1,   $scheme));
		$this->assertEquals(0,     port_normalize(0,    $scheme));
		$this->assertEquals(1,     port_normalize(1,    $scheme));
		$this->assertEquals('',    port_normalize(  21, 'ftp'));
		$this->assertEquals('',    port_normalize(  22, 'ssh'));
		$this->assertEquals('',    port_normalize(  23, 'telnet'));
		$this->assertEquals('',    port_normalize(  25, 'smtp'));
		$this->assertEquals('',    port_normalize(  69, 'tftp'));
		$this->assertEquals('',    port_normalize(  70, 'gopher'));
		$this->assertEquals('',    port_normalize(  79, 'finger'));
		$this->assertEquals('',    port_normalize(  80, 'http'));
		$this->assertEquals('',    port_normalize( 110, 'pop3'));
		$this->assertEquals('',    port_normalize( 115, 'sftp'));
		$this->assertEquals('',    port_normalize( 119, 'nntp'));
		$this->assertEquals('',    port_normalize( 143, 'imap'));
		$this->assertEquals('',    port_normalize( 194, 'irc'));
		$this->assertEquals('',    port_normalize( 210, 'wais'));
		$this->assertEquals('',    port_normalize( 443, 'https'));
		$this->assertEquals('',    port_normalize( 563, 'nntps'));
		$this->assertEquals('',    port_normalize( 873, 'rsync'));
		$this->assertEquals('',    port_normalize( 990, 'ftps'));
		$this->assertEquals('',    port_normalize( 992, 'telnets'));
		$this->assertEquals('',    port_normalize( 993, 'imaps'));
		$this->assertEquals('',    port_normalize( 994, 'ircs'));
		$this->assertEquals('',    port_normalize( 995, 'pop3s'));
		$this->assertEquals('',    port_normalize(3306, 'mysql'));
		$this->assertEquals(8080,  port_normalize( 8080, $scheme));
		$this->assertEquals(65535, port_normalize(65535, $scheme));
		$this->assertEquals(65536, port_normalize(65536, $scheme)); // Seems not invalid in RFC

		// 1st argument: Invalid type
		$this->assertEquals('1x',  port_normalize('001', $scheme) . 'x');
		$this->assertEquals('',    port_normalize('+0',  $scheme));
		$this->assertEquals('',    port_normalize('0-1', $scheme)); // intval() says '0'
		$this->assertEquals('',    port_normalize('str', $scheme));

		// 2nd and 3rd argument: Null
		$this->assertEquals(80,    port_normalize(80, NULL,  TRUE));
		$this->assertEquals(80,    port_normalize(80, TRUE,  TRUE));
		$this->assertEquals(80,    port_normalize(80, FALSE, TRUE));
		$this->assertEquals(80,    port_normalize(80, array('foobar'), TRUE));
		$this->assertEquals(80,    port_normalize(80, '', TRUE));

		// 2nd and 3rd argument: Do $scheme_normalize
		$this->assertEquals('',    port_normalize(80,  'TTP',  TRUE));
		$this->assertEquals('',    port_normalize(110, 'POP',  TRUE));
		$this->assertEquals(80,    port_normalize(80,  'HTTP', FALSE));
	}

	function testFunc_path_normalize()
	{
		// 1st argument: Null
		$this->assertEquals('/', path_normalize(NULL));
		$this->assertEquals('/', path_normalize(TRUE));
		$this->assertEquals('/', path_normalize(FALSE));
		$this->assertEquals('/', path_normalize(array('foobar')));
		$this->assertEquals('/', path_normalize(''));
		$this->assertEquals('/', path_normalize(0));
		$this->assertEquals('/', path_normalize(1));

		// 1st argument: CASE sensitive
		$this->assertEquals('/ExAMPle', path_normalize('ExAMPle'));
		$this->assertEquals('/#hoge',   path_normalize('#hoge'));
		$this->assertEquals('/a/b/c/d', path_normalize('/a/b/./c////./d'));
		$this->assertEquals('/b/',      path_normalize('/a/../../../b/'));

		// 2nd argument
		$this->assertEquals('\\b\\c\\d\\', path_normalize('\\a\\..\\b\\.\\c\\\\.\\d\\', '\\'));
		$this->assertEquals('str1str3str', path_normalize('str1strstr2str..str3str', 'str'));
		$this->assertEquals('/do/../nothing/', path_normalize('/do/../nothing/', TRUE));
		$this->assertEquals('/do/../nothing/', path_normalize('/do/../nothing/', array('a')));
		$this->assertEquals('',            path_normalize(array('a'), array('b')));
	}

	function testFunc_file_normalize()
	{
		// 1st argument: Null
		$this->assertEquals('', file_normalize(NULL));
		$this->assertEquals('', file_normalize(TRUE));
		$this->assertEquals('', file_normalize(FALSE));
		$this->assertEquals('', file_normalize(array('foobar')));
		$this->assertEquals('', file_normalize(''));
		$this->assertEquals('', file_normalize(0));
		$this->assertEquals('', file_normalize(1));

		// 1st argument: Cut DirectoryIndexes (Destructive)
		$this->assertEquals('', file_normalize('default.htm'));
		$this->assertEquals('', file_normalize('default.html'));
		$this->assertEquals('', file_normalize('default.asp'));
		$this->assertEquals('', file_normalize('default.aspx'));
		$this->assertEquals('', file_normalize('index'));
		$this->assertEquals('', file_normalize('index.htm'));
		$this->assertEquals('', file_normalize('index.html'));
		$this->assertEquals('', file_normalize('index.shtml'));
		$this->assertEquals('', file_normalize('index.jsp'));
		$this->assertEquals('', file_normalize('index.php'));
		$this->assertEquals('', file_normalize('index.php'));
		$this->assertEquals('', file_normalize('index.php3'));
		$this->assertEquals('', file_normalize('index.php4'));
		$this->assertEquals('', file_normalize('index.pl'));
		$this->assertEquals('', file_normalize('index.py'));
		$this->assertEquals('', file_normalize('index.rb'));
		$this->assertEquals('', file_normalize('index.cgi'));

		// Apache 2.0.59 default 'index.html' variants
		$this->assertEquals('', file_normalize('index.html.ca'));
		$this->assertEquals('', file_normalize('index.html.cz.iso8859-2'));
		$this->assertEquals('', file_normalize('index.html.de'));
		$this->assertEquals('', file_normalize('index.html.dk'));
		$this->assertEquals('', file_normalize('index.html.ee'));
		$this->assertEquals('', file_normalize('index.html.el'));
		$this->assertEquals('', file_normalize('index.html.en'));
		$this->assertEquals('', file_normalize('index.html.es'));
		$this->assertEquals('', file_normalize('index.html.et'));
		$this->assertEquals('', file_normalize('index.html.fr'));
		$this->assertEquals('', file_normalize('index.html.he.iso8859-8'));
		$this->assertEquals('', file_normalize('index.html.hr.iso8859-2'));
		$this->assertEquals('', file_normalize('index.html.it'));
		$this->assertEquals('', file_normalize('index.html.ja.iso2022-jp'));
		$this->assertEquals('', file_normalize('index.html.ko.euc-kr'));
		$this->assertEquals('', file_normalize('index.html.lb.utf8'));
		$this->assertEquals('', file_normalize('index.html.nl'));
		$this->assertEquals('', file_normalize('index.html.nn'));
		$this->assertEquals('', file_normalize('index.html.no'));
		$this->assertEquals('', file_normalize('index.html.po.iso8859-2'));
		$this->assertEquals('', file_normalize('index.html.pt'));
		$this->assertEquals('', file_normalize('index.html.pt-br'));
		$this->assertEquals('', file_normalize('index.html.ru.cp866'));
		$this->assertEquals('', file_normalize('index.html.ru.cp-1251'));
		$this->assertEquals('', file_normalize('index.html.ru.iso-ru'));
		$this->assertEquals('', file_normalize('index.html.ru.koi8-r'));
		$this->assertEquals('', file_normalize('index.html.ru.utf8'));
		$this->assertEquals('', file_normalize('index.html.sv'));
		$this->assertEquals('', file_normalize('index.html.var'));	// default
		$this->assertEquals('', file_normalize('index.html.zh-cn.gb2312'));
		$this->assertEquals('', file_normalize('index.html.zh-tw.big5'));

		$this->assertEquals('', file_normalize('index.html.po.iso8859-2'));
		$this->assertEquals('', file_normalize('index.html.zh-tw.big5'));

		$this->assertEquals('', file_normalize('index.ja.en.de.html'));
		
		// .gz
		$this->assertEquals('', file_normalize('index.html.ca.gz'));
		$this->assertEquals('', file_normalize('index.html.en.ja.ca.z'));

	//	$this->assertEquals('foo/', file_normalize('foo/index.html'));

	//	$this->assertEquals('ExAMPle', file_normalize('ExAMPle'));
	//	$this->assertEquals('exe.exe', file_normalize('exe.exe'));
	//	$this->assertEquals('sample.html', file_normalize('sample.html.en'));
	//	$this->assertEquals('sample.html', file_normalize('sample.html.pt-br'));
	//	$this->assertEquals('sample.html', file_normalize('sample.html.po.iso8859-2'));
	//	$this->assertEquals('sample.html', file_normalize('sample.html.zh-tw.big5'));
	}

	function testFunc_query_normalize()
	{
		// 1st argument: Null
		$this->assertEquals('', query_normalize(NULL));
		$this->assertEquals('', query_normalize(TRUE));
		$this->assertEquals('', query_normalize(FALSE));
		$this->assertEquals('', query_normalize(array('foobar')));
		$this->assertEquals('', query_normalize(''));
		$this->assertEquals('', query_normalize(0));
		$this->assertEquals('', query_normalize(1));

		$this->assertEquals('a=0dd&b&c&d&f=d', query_normalize('&&&&f=d&b&d&c&a=0dd'));
		$this->assertEquals('eg=foobar',       query_normalize('nothing==&eg=dummy&eg=padding&eg=foobar'));
	}

	function testFunc_generate_glob_regex()
	{
		// 1st argument: Null
		$this->assertEquals('', generate_glob_regex(NULL));
		$this->assertEquals('', generate_glob_regex(TRUE));
		$this->assertEquals('', generate_glob_regex(FALSE));
		$this->assertEquals('', generate_glob_regex(array('foobar')));
		$this->assertEquals('', generate_glob_regex(''));
		$this->assertEquals('', generate_glob_regex(0));
		$this->assertEquals('', generate_glob_regex(1));

		$this->assertEquals('.*\.txt', generate_glob_regex('*.txt'));
		$this->assertEquals('A.A',     generate_glob_regex('A?A'));
	}

	function testFunc_generate_host_regex()
	{
		// 1st argument: Null
		$this->assertEquals('', generate_host_regex(NULL));
		$this->assertEquals('', generate_host_regex(TRUE));
		$this->assertEquals('', generate_host_regex(FALSE));
		$this->assertEquals('', generate_host_regex(array('foobar')));
		$this->assertEquals('', generate_host_regex(''));
		$this->assertEquals('', generate_host_regex(0));
		$this->assertEquals('', generate_host_regex(1));

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

		get_blocklist_add($array,   'foo', 'bar');
		$this->assertEquals(1,      count($array));
		$this->assertEquals('bar',  $array['foo']);

		get_blocklist_add($array,   'hoge', 'fuga');
		$this->assertEquals(2,      count($array));
		$this->assertEquals('bar',  $array['foo']);
		$this->assertEquals('fuga', $array['hoge']);

		get_blocklist_add($array,   -1, '*.txt');
		$this->assertEquals(3,      count($array));
		$this->assertEquals('bar',  $array['foo']);
		$this->assertEquals('fuga', $array['hoge']);
		$this->assertEquals('/^.*\.txt$/i', $array['*.txt']);

		// get_blocklist()
		// ALL
		$array = get_blocklist();
		$this->assertTrue(isset($array['badhost']));
		$this->assertTrue(isset($array['goodhost']));
		// badhost
		$array = get_blocklist('badhost');
		$this->assertTrue(isset($array['*.blogspot.com']));
		// goodhost
		$array = get_blocklist('goodhost');
		$this->assertTrue(isset($array['IANA-examples']));
	}

	function testFunc_is_badhost()
	{
		// is_badhost_avail()

		// is_badhost()
		$remains = array();
		$this->assertTrue(is_badhost('something...blogspot.com', TRUE, $remains));
	}
}

?>
