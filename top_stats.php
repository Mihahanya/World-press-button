<?php

$mysql = new mysqli('localhost', 'root', '', 'users_score');

$top = $mysql->query("SELECT `name`, `score` FROM `users` ORDER BY `score` DESC LIMIT 7");

$mysql->close();

$res_top = array();
foreach ($top as $row) {
	$res_top[] = json_encode($row);
}

echo json_encode($res_top);

?>