<?php
  session_start();
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
    ?>

<?php
ini_set('display_errors', 1);
include("sidebarJquery.php");
?>

<?php
ini_set('display_errors', 1);
include("loginJquery.php");
?>

</head>

<body>
<div class="container">

<?php
include("navBar.php");
if (!isset($_SESSION['myusername']))
	{
		include("login.php");
	}
	else
	{
		include("logoutbutton.php");
	}
?>

  <div class="content">
  
     <div class="title">
           Order Placed
          </div>
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
  
<!--Content of Cart-->

<div class="puplist">

<h3 style="text-align:center;">Thank you for using PupFetcher.</p> Your Puppy order is now on its way </h3><br />
<p>Your order should arrive in the next 10 business days. </p>
<p> Try to be available at all time between 8am to 8pm.</p>
<p> If nobody answer at this address we will either:</p>
<p> -Keep the puppy for ourself. </p>
<p>-Sell the puppy to a dog fighting association. </p>
<p>-Give the puppy to Rob.</p>

<div class="shipping" style="position:absolute; left:500px; top:220px">
<img src="img/puppic/shipping.png" />
</div><br />
</div>



 <div class="paws">
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  </div>

     <br />
    
  <div class="bottomPic">
   <img src="img/puppic/gather2.jpg" name="paw" />
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

<?php
  // Prints an error if they try to search for a puppy and do not fill out all the necessary fields
  if (isset($_GET['error']) && $_GET['error'] == 1)
  {
    echo "<script type='text/javascript'>";
    echo "alert('Please fill in all the required search fields and try again.');";
    echo "</script>";
  }

?>