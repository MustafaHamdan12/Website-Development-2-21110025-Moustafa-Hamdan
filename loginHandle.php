<?php

$uname = isset($_POST['uname']) ? $_POST['uname'] : '';
$password = isset($_POST['psw']) ? $_POST['psw'] : '';

if (empty($uname) || empty($password)) {
    header('Location: Login.php');
    exit;
}

$host = 'localhost';
$db_name = 'burrito_me';
$pdo = new PDO("mysql:host=$host;dbname=$db_name", 'root', '');

$statement = $pdo->query("SELECT * FROM users WHERE username = '$uname'")->fetchAll();

if (!empty($statement)) {
    if ($password == $statement[0]['password']) {
        session_start();
        $_SESSION['user'] = $statement[0]['id'];
    }elseif($password != $statement[0]['password']) {
        header("location:Login.php?msg=failed");
        exit;

    }
}

$statement = null;
$pdo = null;
header("Location: index.php");