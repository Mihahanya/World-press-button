<?php

$name = $_POST["nick"];

require "connect.php";

$nick_clicks = $mysql->query("SELECT `score` FROM `users` WHERE `name` = '$name'")->fetch_assoc()["score"];
$total_clicks = $mysql->query("SELECT `count` FROM `total_clicks_statistics` ORDER BY `count` DESC LIMIT 1")->fetch_assoc()["count"];

$mysql->close();

$arr = array('total' => $total_clicks, 'nick' => $nick_clicks);
echo json_encode($arr);

?>