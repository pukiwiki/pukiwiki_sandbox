<?php
// $Id: SpamPickupTest.php,v 1.7 2008/12/31 15:44:14 henoheno Exp $
// Copyright (C) 2007 heno
//
// Design test case for spam.php (called from runner.php)

if (! defined('SPAM_INI_FILE')) define('SPAM_INI_FILE', 'spam.ini.php');

require_once('spam_pickup.php');
require_once('PHPUnit/PHPUnit.php');

class SpamPickupTest extends PHPUnit_TestCase
{
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

	function testFunc_scheme_normalize()
	{
		// Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', scheme_normalize($value), $key);
		}

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
		// Invalid: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', host_normalize($value), $key);
		}

		// Hostname is case-insensitive
		$this->assertEquals('example.org', host_normalize('ExAMPle.ORG'));

		// Cut 'www' with traditional ASCII-based FQDN (destructive)
		$this->assertEquals('example.org', host_normalize('WWW.example.org'));

		// Don't cut 'www' with Non-ASCII-based string such as IDN
		$this->assertEquals("www.example.org\0foobar",
			 host_normalize("WWW.example.org\0foobar"));
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
		$this->assertEquals('',    port_normalize(   -1, $scheme));
		$this->assertEquals(0,     port_normalize(    0, $scheme));
		$this->assertEquals(1,     port_normalize(    1, $scheme));
		$this->assertEquals('',    port_normalize(   21, 'ftp'));
		$this->assertEquals('',    port_normalize(   22, 'ssh'));
		$this->assertEquals('',    port_normalize(   23, 'telnet'));
		$this->assertEquals('',    port_normalize(   25, 'smtp'));
		$this->assertEquals('',    port_normalize(   69, 'tftp'));
		$this->assertEquals('',    port_normalize(   70, 'gopher'));
		$this->assertEquals('',    port_normalize(   79, 'finger'));
		$this->assertEquals('',    port_normalize(   80, 'http'));
		$this->assertEquals('',    port_normalize(  110, 'pop3'));
		$this->assertEquals('',    port_normalize(  115, 'sftp'));
		$this->assertEquals('',    port_normalize(  119, 'nntp'));
		$this->assertEquals('',    port_normalize(  143, 'imap'));
		$this->assertEquals('',    port_normalize(  194, 'irc'));
		$this->assertEquals('',    port_normalize(  210, 'wais'));
		$this->assertEquals('',    port_normalize(  443, 'https'));
		$this->assertEquals('',    port_normalize(  563, 'nntps'));
		$this->assertEquals('',    port_normalize(  873, 'rsync'));
		$this->assertEquals('',    port_normalize(  990, 'ftps'));
		$this->assertEquals('',    port_normalize(  992, 'telnets'));
		$this->assertEquals('',    port_normalize(  993, 'imaps'));
		$this->assertEquals('',    port_normalize(  994, 'ircs'));
		$this->assertEquals('',    port_normalize(  995, 'pop3s'));
		$this->assertEquals('',    port_normalize( 3306, 'mysql'));
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
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('/', path_normalize($value), $key);
		}

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

	function testFunc_query_normalize()
	{
		// 1st argument: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', query_normalize($value), $key);
		}

		$this->assertEquals('a=0dd&b&c&d&f=d', query_normalize('&&&&f=d&b&d&c&a=0dd'));
		$this->assertEquals('eg=foobar',       query_normalize('nothing==&eg=dummy&eg=padding&eg=foobar'));
	}

	function testFunc_file_normalize()
	{
		// 1st argument: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals('', file_normalize($value), $key);
		}

		// 1st argument: Cut DirectoryIndexes (Destructive)
		foreach(array(
			'default.htm',
			'default.html',
			'default.asp',
			'default.aspx',
			'index',
			'index.htm',
			'index.html',
			'index.shtml',
			'index.jsp',
			'index.php',
			'index.php',
			'index.php3',
			'index.php4',
			'index.pl',
			'index.py',
			'index.rb',
			'index.cgi',

			// Apache 2.0.59 default 'index.html' variants
			'index.html.ca',
			'index.html.cz.iso8859-2',
			'index.html.de',
			'index.html.dk',
			'index.html.ee',
			'index.html.el',
			'index.html.en',
			'index.html.es',
			'index.html.et',
			'index.html.fr',
			'index.html.he.iso8859-8',
			'index.html.hr.iso8859-2',
			'index.html.it',
			'index.html.ja.iso2022-jp',
			'index.html.ko.euc-kr',
			'index.html.lb.utf8',
			'index.html.nl',
			'index.html.nn',
			'index.html.no',
			'index.html.po.iso8859-2',
			'index.html.pt',
			'index.html.pt-br',
			'index.html.ru.cp866',
			'index.html.ru.cp-1251',
			'index.html.ru.iso-ru',
			'index.html.ru.koi8-r',
			'index.html.ru.utf8',
			'index.html.sv',
			'index.html.var',	// default
			'index.html.zh-cn.gb2312',
			'index.html.zh-tw.big5',

			'index.html.po.iso8859-2',
			'index.html.zh-tw.big5',

			'index.ja.en.de.html',
		
			// .gz
			'index.html.ca.gz',
			'index.html.en.ja.ca.z',
		) as $arg){
			$this->assertEquals('', file_normalize($arg));
		}

		//$this->assertEquals('foo/', file_normalize('foo/index.html'));

		//$this->assertEquals('ExAMPle', file_normalize('ExAMPle'));
		//$this->assertEquals('exe.exe', file_normalize('exe.exe'));
		//$this->assertEquals('sample.html', file_normalize('sample.html.en'));
		//$this->assertEquals('sample.html', file_normalize('sample.html.pt-br'));
		//$this->assertEquals('sample.html', file_normalize('sample.html.po.iso8859-2'));
		//$this->assertEquals('sample.html', file_normalize('sample.html.zh-tw.big5'));
	}

	function testFunc_uri_pickup()
	{
		// 1st argument: Null
		foreach($this->setup_string_null() as $key => $value){
			$this->assertEquals(0, count(uri_pickup($value)), $key);
		}

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


		// Specific tests ----

		// Divider: Back-slash
		$test_string = ' http:\\backslash.org\fobar.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('backslash.org',  $results[0]['host']);

		// Divider: percent-encoded
		//$test_string = ' http%3A%2F%5Cpercent-encoded.org%5Cfobar.html ';
		//$results = uri_pickup_normalize(uri_pickup($test_string));
		//$this->assertEquals('percent-encoded.org',  $results[0]['host']);

		// Host: Without path
		$test_string = ' http://nopathstring.com ';
		$results = uri_pickup($test_string);
		$this->assertEquals('', $results[0]['path']);
		$this->assertEquals('', $results[0]['file']);
		$results[0]['path'] = '/';
		$this->assertEquals('', $results[0]['file'], '[Seems referense trouble]');
		//
		$results = uri_pickup($test_string);
		$results = uri_pickup_normalize($results);
		$this->assertEquals('/',$results[0]['path']);
		$this->assertEquals('', $results[0]['file']);

		// Host: Underscore
		$test_string = ' http://under_score.org/fobar.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('under_score.org',$results[0]['host']);	// Not 'under'

		// Host: IPv4
		$test_string = ' http://192.168.0.1/fobar.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('192.168.0.1',    $results[0]['host']);

		// Host: Starts
		$test_string = ' http://_sss/foo.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('_sss',           $results[0]['host']);
		$this->assertEquals('foo.html',       $results[0]['file']);

		// Host: Ends
		$test_string = ' http://sss_/foo.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('sss_',           $results[0]['host']);
		$this->assertEquals('foo.html',       $results[0]['file']);


		// Specific tests ---- Fails

		// Divider: Colon only (Too sensitive to capture)
		$test_string = ' http:colon.org ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals(0, count($results));

		// Host: Too short
		$test_string = ' http://s/foo.html http://ss/foo.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals(0, count($results));

		$test_string = ' http://sss/foo.html ';
		$results = uri_pickup_normalize(uri_pickup($test_string));
		$this->assertEquals('sss',            $results[0]['host']);
		$this->assertEquals('foo.html',       $results[0]['file']);

		// uri_pickup_normalize_pathtofile()
		$test_string = ' http://example.com/path/to/directory-accidentally-not-ended-with-slash ';
		$results = uri_pickup_normalize_pathtofile(uri_pickup($test_string));
		$this->assertEquals('/path/to/directory-accidentally-not-ended-with-slash',
			$results[0]['pathtofile']);
		$this->assertEquals(FALSE, isset($results[0]['path']));
		$this->assertEquals(FALSE, isset($results[0]['file']));
	}

	function testFunc_spam_uri_pickup()
	{
		// Divider: percent-encoded
		$test_string = ' http://victim.example.org/http%3A%2F%5Cnasty.example.org ';
		$results = spam_uri_pickup($test_string);
		$this->assertEquals('victim.example.org', $results[0]['host']);
		$this->assertEquals('nasty.example.org',  $results[1]['host']);

		// Domain exposure (site:)
		$test_string = ' http://search.example.org/?q=%20site:nasty.example.org ';
		$results = spam_uri_pickup($test_string);
		$this->assertEquals('nasty.example.org', $results[0]['host']);
		$this->assertEquals('search.example.org',  $results[1]['host']);
		
		// Domain exposure (%20site:)
		$test_string = ' http://search2.example.org/?q=%20site:nasty2.example.org ';
		$results = spam_uri_pickup($test_string);
		$this->assertEquals('nasty2.example.org', $results[0]['host']);
		$this->assertEquals('search2.example.org',  $results[1]['host']);
	}
}

?>