<?php
ini_set('display_errors',1);

// Inialize session

// Delete certain session
// unset($_SESSION['username']);
// Delete all session variables
	session_start();
	session_destroy();

// Jump to login page
	//header("location:index.php");


?>