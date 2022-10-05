<?php

$name = $_POST["nick"];
$date = date('Y-m-d H:i:s');

require "connect.php";

if (strlen($name) > 0 && strlen($name) <= 32 && mb_detect_encoding($name, 'ASCII', true)) {
	$mysql->query("UPDATE `total_clicks` SET `count`=`count`+1 WHERE `id`= 1");
	$mysql->query("INSERT INTO `users` (`name`, `score`, `creation_date`) VALUES ('$name', '1', '$date') ON DUPLICATE KEY UPDATE `score` = `score`+1");
}

$mysql->close();

?>