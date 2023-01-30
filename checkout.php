<?php

$host = 'localhost';
$db_name = 'burrito_me';
$pdo = new PDO("mysql:host=$host;dbname=$db_name", 'root', '');
session_start();

$user_id = $_SESSION['user'];
if (isset($_COOKIE['Burrito'])) {
	$prod = $_COOKIE['Burrito'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','burrito','$prod', 1.5)");
}

if (isset($_COOKIE['taco'])) {
	$prod = $_COOKIE['taco'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','taco','$taco', 5)");
}

if (isset($_COOKIE['taco-meat'])) {
	$prod = $_COOKIE['taco-meat'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','taco-meat','$tacomeat', 6)");
}

if (isset($_COOKIE['chicken-burrito'])) {
	$prod = $_COOKIE['chicken-burrito'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','chicken-burrito','$chicken_burrito', 7)");
}

if (isset($_COOKIE['casadia'])) {
	$prod = $_COOKIE['casadia'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','casadia','$casadia', 14)");
}

if (isset($_COOKIE['salad'])) {
	$prod = $_COOKIE['salad'];
	$pdo->exec("INSERT INTO orders(`user_id`,`order`,quantity,price) VALUES('$user_id','salad','$salady', 12)");
}

header("Location: menu.php");
$pdo = null;