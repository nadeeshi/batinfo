<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "project";
$con = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database );
if (!$con) {
	die("Couldn't connect" .mysqli_connect_error());
}
?>