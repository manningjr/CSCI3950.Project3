	<?php

		$get = $_GET;
		$id = $get['id'];

		//	Test to see if item is already in cart. If it is, don't add it and give an error message. If it is not, add it into the session
		$temp;
		foreach ($_SESSION['cart'] as $s)
		{
			if ($s == $id)
			{
				$temp = true;
			}
		}
		
		if ($temp != true)
		{
			$_SESSION['cart'][] = $id;
			echo "<p style:'color:white;'>The puppy was added to your cart</p>";
		}
		else
		{
			echo "<p style:'color:white;'>Puppy already in cart</p>";
		}

	?>