<?php

require "connect.php";

$top = $mysql->query("SELECT `name`, `score` FROM `users` ORDER BY `score` DESC LIMIT 15");

$mysql->close();

$res_top = array();
foreach ($top as $row) {
	$res_top[] = json_encode($row);
}

echo json_encode($res_top);

?>