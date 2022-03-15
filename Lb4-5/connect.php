<?php
$host = 'localhost';
$database = 'a0644112_os';
$user = 'a0644112_os';
$password = 'root';
$link = mysqli_connect($host, $user, $password, $database) or die("ошибка в конекте" . mysqli_error($link));
?>
