<?php	
	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);	
	$SqlHost='localhost';
	$SqlUser='root';
	$SqlPass='suprit12';
	$SqlDBname='smartlogin';
	$con=mysql_connect($SqlHost,$SqlUser,$SqlPass);
	if(!$con)
	{
		die("Connection Error");
	}
	$db=mysql_select_db($SqlDBname,$con);
	if(!$db)
		die("Error in db delection..");
	$ico_loc='<link rel="shortcut icon"  href="/smartloginlibrary/favicon.ico">';
	$randomdb='randomdb';
	$randomdb_random='random';
	$randomdb_user='username';
	$mobiledb='mobiledb';
	$mobiledb_device='device';
	$mobiledb_user='username';
	$logindb='logindb';
	$logindb_user='username';
	$logindb_pass='password';
?>
