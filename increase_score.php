<?php

$name = $_POST["nick"];
$date = date('Y-m-d H:i:s');

if (!empty($_SERVER['HTTP_CLIENT_IP'])) 			
	$ip = $_SERVER['HTTP_CLIENT_IP'];
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 	
	$ip = $_SERVER['HTTP_X_FORWARDED_FOR']; 
else
	$ip = $_SERVER['REMOTE_ADDR'];

require "connect.php";

if ($name != '') {
	$mysql->query("INSERT INTO `total_clicks_statistics` (`name`, `date`, `ip`) VALUES ('$name', '$date', '$ip')");
	$mysql->query("INSERT INTO `users` (`name`, `score`, `creation_date`) VALUES ('$name', '1', '$date') ON DUPLICATE KEY UPDATE `score` = `score`+1");
}

$mysql->close();

?>