<?php

$name = $_POST["nick"];
$date = date('Y-m-d H:i:s');

require "connect.php";

if ($name != '') {
	$mysql->query("INSERT INTO `total_clicks_statistics` (`name`, `date`) VALUES ('$name', '$date')");
	$mysql->query("INSERT INTO `users` (`name`, `score`, `creation_date`) VALUES ('$name', '1', '$date') ON DUPLICATE KEY UPDATE `score` = `score`+1");
}

$mysql->close();

?>