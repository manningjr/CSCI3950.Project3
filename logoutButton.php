<div class="logout">
	<a href="logout.php" class="---" >Logout</a>

	<?php 
		$username = $_SESSION['myusername'];
		
    	echo "<p style='font-family:verdana; font-size:30px;'>" . $username . "</p>";
   	?>
</div>