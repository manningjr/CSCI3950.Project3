<?php

	session_start();


	$removeIndex = array_search($_GET['puppy_id'], $_SESSION['cart']);
	unset($_SESSION['cart'][$removeIndex]);


	header("LOCATION: pupCart.php");


?>