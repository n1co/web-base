<?php
$version='0.0.1';

$mysql_server='localhost';
$mysql_user='web-base';
$mysql_password='PRu9UtnQtT9Jnyyr';
$mysql_database='web-base';

try
{
	$dns = 'mysql:host='.$mysql_server.';dbname='.$mysql_database;
	$sql = new PDO( $dns, $mysql_user, $mysql_password );
}
catch(Exception $e)
{
	echo "Unable to connect to MySQL : ", $e->getMessage();
	die();
}
?>