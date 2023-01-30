<?php
$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$password = isset($_POST['psw']) ? $_POST['psw'] : '';
$password_repeat = isset($_POST['psw-repeat']) ? $_POST['psw-repeat'] : '';

if (empty($uname) || empty($password) || empty($password_repeat)) {
    header('Location: register.php');
    exit;
}

$host = 'localhost';
$db_name = 'burrito_me';
$pdo = new PDO("mysql:host=$host;dbname=$db_name", 'root', '');
$statement = $pdo->query("SELECT * FROM users WHERE username = '$uname'")->fetchAll();

if (empty($statement)) {
    $pdo->exec("INSERT INTO users(username,password) VALUES('$uname','$password')");
    session_start();
    $_SESSION['user'] = $pdo->lastInsertId();
}
$statement = null;
$pdo = null;
header("Location: index.php");
