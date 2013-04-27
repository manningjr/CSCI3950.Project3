<div class="cartTop-letters">
 <a href="pupCart.php"><p><img src="img/cart.png"</p></a>
</div>
 
 <span class="toggle2">
</span>

<div class="separation-letters">
 <p>|</p>
</div>

 <span class="toggle2-letters">
<p><b>Logout</b></p>
</span>
<div class="hiddenDivLogin">
<?php
ini_set('display_errors', 1);
 ?>

<div class="logout">
	<a href="logout.php" class="---" >Logout</a>

	<?php 
		$username = $_SESSION['myusername'];
		
    	echo "<p style='font-family:verdana; font-size:30px;'>" . $username . "</p>";
   	?>
</div>
</div>