<?php
  session_start();
?>


<?php

	$session = $_SESSION;
	$get = $_GET;

	$id = $get['id'];

	$session['cart'] = $id;

	print_r($session);

	echo "<br><a href='index.php'>Home</a>";

?>