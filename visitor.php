<?php

$date = date('Y-m-d H:i:s');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) 			
	$ip = $_SERVER['HTTP_CLIENT_IP'];
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 	
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
else
	$ip = $_SERVER['REMOTE_ADDR'];

require "connect.php";
$mysql->query("INSERT INTO `visitors` VALUES ('$date', '$ip')");
$mysql->close();

?>