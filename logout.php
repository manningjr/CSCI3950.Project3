<?php
ini_set('display_errors',1);

// Inialize session
	session_start();

// Delete certain session
 	unset($_SESSION['username']);
// Delete all session variables
	session_destroy();

// Jump to login page
	header("location:index.php");

?>