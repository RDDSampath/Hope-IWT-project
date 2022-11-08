<?php
$serverName="localhost";
$dBUserName="root";
$dBPasswordName="";
$dBName="db1234";

$con= mysqli_connect($serverName,$dBUserName,$dBPasswordName,$dBName);

if(!$con){
	die("Connection faild: " . mysqli_connect_error());
}
?>