<?php

$date = date('Y-m-d H:i:s');

$mysql = new mysqli('localhost', 'root', '', 'users_score');
$mysql->query("INSERT INTO `total_clicks_statistics` (`date`) VALUES('$date')");
$mysql->close();

?>