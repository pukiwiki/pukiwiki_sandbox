<?php
// $Id: spam.ini.php,v 1.1 2006/12/02 09:03:45 henoheno Exp $
// Spam-related setting

$blocklist['badhost'] = array(
	//'*',	// Deny all uri

	// IP address or ...
	//'10.20.*.*',	// 10.20.example.com also matches
	//'\[1\]',

	// Blog services subdomains
	'*.blogspot.com',
);

?>
