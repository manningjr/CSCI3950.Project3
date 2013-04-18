<?php
  session_start();
?>


<?php

	$session = $_SESSION;
	$get = $_GET;

	$session['cart'] = $get['id'];

	print_r($session);



?>