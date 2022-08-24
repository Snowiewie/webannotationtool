<?php
$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);
$database = ltrim($dbparts['path'],'/');

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection Failed!";
	exit();
}