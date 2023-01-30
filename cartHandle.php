<?php

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'Burrito') {
	setcookie('Burrito', $_POST['Quantity'], time() + 1800);
}

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'taco') {
	setcookie('taco', $_POST['Quantity'], time() + 1800);
}

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'taco-meat') {
	setcookie('taco-meat', $_POST['Quantity'], time() + 1800);
}

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'chicken-burrito') {
	setcookie('chicken-burrito', $_POST['Quantity'], time() + 1800);
}

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'casadia') {
	setcookie('casadia', $_POST['Quantity'], time() + 1800);
}

if (isset($_POST['item']) && isset($_POST['Quantity']) && $_POST['item'] === 'salad') {
	setcookie('salad', $_POST['Quantity'], time() + 1800);
}

header("Location: cart.php");
exit;