<?php  

$host = "localhost";
$user = "root";
$password = "";
$dbname = "andrespdo";
$dsn = "mysql:host={$host};dbname={$dbname}";
$pdo = new PDO($dsn, $user, $password);

?>