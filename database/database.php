<?php

$host_name = "localhost";
$db_name = "Foodpanda";
$username = "root";
$pass = "";

$dsn = "mysql:host=$host_name;dbname=$db_name;charset=utf8mb4";
$connection = new PDO($dsn, $username, $pass);