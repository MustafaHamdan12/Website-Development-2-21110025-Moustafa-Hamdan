<?php

if (isset($_GET['001']) && $_GET['001'] === 'Burrito') {
	if (isset($_COOKIE['Burrito'])) {
		setcookie('Burrito', $_COOKIE['Burrito'] + 1, time() + 1800);
	} else {
		setcookie('Burrito', 1, time() + 1800);
	}
}

if (isset($_GET['002']) && $_GET['002'] === 'taco') {
	if (isset($_COOKIE['taco'])) {
		setcookie('taco', $_COOKIE['taco'], time() + 1800);
	} else {
		setcookie('taco', 1, time() + 1800);
	}
}

if (isset($_GET['003']) && $_GET['003'] === 'taco-meat') {
	if (isset($_COOKIE['taco-meat'])) {
		setcookie('taco-meat', $_COOKIE['taco-meat'] + 1, time() + 1800);
	} else {
		setcookie('taco-meat', 1, time() + 1800);
	}
}

if (isset($_GET['004']) && $_GET['004'] === 'chicken-burrito') {
	if (isset($_COOKIE['chicken-burrito'])) {
		setcookie('chicken-burrito', $_COOKIE['chicken-burrito'], time() + 1800);
	}
	if (isset($_COOKIE['chicken-burrito'])) {
		setcookie('chicken-burrito', $_COOKIE['chicken-burrito'] + 1, time() + 1800);
	} else {
		setcookie('chicken-burrito', 1, time() + 1800);
	}
}

if (isset($_GET['005']) && $_GET['005'] === 'casadia') {
	if (isset($_COOKIE['casadia'])) {
		setcookie('casadia', $_COOKIE['casadia'] + 1, time() + 1800);
	} else {
		setcookie('casadia', 1, time() + 1800);
	}
}

if (isset($_GET['006']) && $_GET['006'] === 'salad') {
	if (isset($_COOKIE['salad'])) {
		setcookie('salad', $_COOKIE['salad'] + 1, time() + 1800);
	} else {
		setcookie('salad', 1, time() + 1800);
	}
}

header("Location: menu.php");
exit;
