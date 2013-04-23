<?php
	session_start();
	ini_set('display_errors', 1);
	require('database/database.php');



	$get = $_GET;
	$id = $get['id'];
	$_SESSION['cart'][] = $id;
		

	print_r($_SESSION);

	echo "<br><a href='index.php'>Home</a>";










?>

