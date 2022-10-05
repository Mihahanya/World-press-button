<?php

$name = $_POST["nick"];

require "connect.php";

$nick_clicks = $mysql->query("SELECT `score` FROM `users` WHERE `name` = '$name'")->fetch_assoc()["score"];

$mysql->close();

echo $nick_clicks;

?>