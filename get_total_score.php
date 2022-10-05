<?php

require "connect.php";

$total = $mysql->query("SELECT `count` FROM `total_clicks` WHERE `id` = '1'")->fetch_assoc()["count"];

$mysql->close();

echo $total;

?>