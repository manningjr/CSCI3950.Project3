<?php
  session_start();
?>


<?php

	$session = $_SESSION;
	$get = $_GET;

	$id = $get['id'];
	
	
	// nickorus you need to do something like this:
	
	$session['cart'][] = $id;
		

	print_r($session);

	echo "<br><a href='index.php'>Home</a>";

?>
