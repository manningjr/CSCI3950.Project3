<?php
	session_start();
	ini_set('display_errors', 1);


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The PupFetcher</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
<link rel="stylesheet" type="text/css" href="css/pupInfo.css">
<link rel="Stylesheet" type="text/css" href="css/form.css" />

<?php
    ini_set('display_errors', 1);
    require("database/database.php");
	include("sidebarJquery.php");
	include("loginJquery.php");
?>

</head>

<body>
<div class="container">

<?php
include("navBar.php");
?>

<?php
include("login.php");
?>

  <div class="content">
  
     <div class="title">
            PupCart
          </div>
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
  
  <br /><br />
<!--Content of Cart-->

<div class="cartContent">


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
	<p style="color:white;">Would you like to <a href='puppies.php' style="color: blue;">Continue Shopping</a> or <a href='pupCart.php' style="color:blue">View Your Cart</a>?</p>
</div>


 <div class="paws">
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  </div>

     <br />
    
  <div class="bottomPic">
   <img src="img/puppic/gather.jpg" name="paw" />
  </div>

  <div class="footer">
  <hr/>
     <p>Project 3 Designed by the A-Team. Copyright &copy; 2013.</p>
    <!-- end .footer --></div>
  <!-- end .content --></div> 

<!--Sidebar-->
<?php
include("sidebar.php");
?>
<!--End of Sidebar-->

  <!-- end .container --></div>
  <!-- end .background--></div>
  </body>
</html>



