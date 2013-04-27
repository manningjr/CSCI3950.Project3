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
            Check Out
          </div>
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
  
  <br /><br />

<div class="columnCont">
<div class="left">
<?php
if (!isset($_SESSION['myusername'])){
	 echo '<h3>You need to <a href="register.php" style="color: rgb(121,146,223);"><u>Register</u></a> or Login to access the checkout process.</h3>';
}
else{
//echo "<p>The amount of your order is: $<b>$price</b>"; 
 //echo"<p><h4> Payment Information:</h4></p>";
   echo "<form action='confirm.php'>";
   //echo   "<input type='hidden' name='customer_id' value='$customer_id'/>";
   echo "<table>";
   echo "<tr><td>First Name:</td><td><input type='text' name = 'fname' /></td></tr>";
   echo "<tr><td>Last Name:</td><td><input type='text' name = 'lname' /></td></tr>";
   echo "<tr><td>Email Address:</td><td><input type = 'text' name = 'email'/></td></tr>";
   echo "<tr><td>Phone Number:</td><td><input type = 'text' name = 'tel'/></td></tr>";
   echo "<tr><td>Street:</td><td><input type = 'text' name = 'street' /></td></tr>";
   echo "<tr><td>City:</td><td><input type = 'text' name = 'city'/></td></tr>";
   echo "<tr><td>State:</td><td><select name='State'> 
<option value='' selected='selected'>Select</option> 
<option value='AL'>Alabama</option> 
<option value='AK'>Alaska</option> 
<option value='AZ'>Arizona</option> 
<option value='AR'>Arkansas</option> 
<option value='CA'>California</option> 
<option value='CO'>Colorado</option> 
<option value='CT'>Connecticut</option> 
<option value='DE'>Delaware</option> 
<option value='DC'>District Of Columbia</option> 
<option value='FL'>Florida</option> 
<option value='GA'>Georgia</option> 
<option value='HI'>Hawaii</option> 
<option value='ID'>Idaho</option> 
<option value='IL'>Illinois</option> 
<option value='IN'>Indiana</option> 
<option value='IA'>Iowa</option> 
<option value='KS'>Kansas</option> 
<option value='KY'>Kentucky</option> 
<option value='LA'>Louisiana</option> 
<option value='ME'>Maine</option> 
<option value='MD'>Maryland</option> 
<option value='MA'>Massachusetts</option> 
<option value='MI'>Michigan</option> 
<option value='MN'>Minnesota</option> 
<option value='MS'>Mississippi</option> 
<option value='MO'>Missouri</option> 
<option value='MT'>Montana</option> 
<option value='NE'>Nebraska</option> 
<option value='NV'>Nevada</option> 
<option value='NH'>New Hampshire</option> 
<option value='NJ'>New Jersey</option> 
<option value='NM'>New Mexico</option> 
<option value='NY'>New York</option> 
<option value='NC'>North Carolina</option> 
<option value='ND'>North Dakota</option> 
<option value='OH'>Ohio</option> 
<option value='OK'>Oklahoma</option> 
<option value='OR'>Oregon</option> 
<option value='PA'>Pennsylvania</option> 
<option value='RI'>Rhode Island</option> 
<option value='SC'>South Carolina</option> 
<option value='SD'>South Dakota</option> 
<option value='TN'>Tennessee</option> 
<option value='TX'>Texas</option> 
<option value='UT'>Utah</option> 
<option value='VT'>Vermont</option> 
<option value='VA'>Virginia</option> 
<option value='WA'>Washington</option> 
<option value='WV'>West Virginia</option> 
<option value='WI'>Wisconsin</option> 
<option value='WY'>Wyoming</option>
</select></td></tr>";
    echo "<tr><td>Zip Code:</td><td><input type = 'text' name = 'zip'/></td></tr>";
	echo "<tr><td>Credit Card Number:</td><td><input type = 'text' name = 'cardNumber'/></td></tr>";
	echo   "<tr><td></td><td><button type='submit'>    Place Order    </button><button type='Reset'>     Cancel     </button></td></tr>";
    echo "</table>";
   echo "</form>";
}?>
</div>

<div class="right">
<?php
echo"<h3> Puppy Selected:</h3>";
echo "<div class='puppic'>";
         // echo"<a href='pupInfo.php?id=" . $puppy_id . "'><img src='$img' alt='Puppy image' width='100' height='100'/></a>";
        echo "</div>";
        
        echo "<div class='puppy-list'>";
          echo "<table>";
          //  echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
          //  echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
          //  echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
          //  echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
          echo "</table>";
        echo "</div>";
		
		echo "<div class='puppic'>";
          echo"<img src=img/puppic/1.jpg alt='Puppy image' width='100' height='100'/></a>";
        echo "</div>";
        
        echo "<div class='puppy-list'>";
          echo "<table>";
          echo "<tr><td>Name:</td><td><b>Turk</b></td></tr>";
          echo "<tr><td>Breed:</td><td><b>Golden Retriever</b></td></tr>";
          echo "<tr><td>Sex:</td><td><b>Male</b></td></tr>";
          echo "<tr><td>Price:</td><td><b>$700</b></td></tr>";
          echo "</table>";
        echo "</div>";
   ?>
</div>
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

<?php
  // Prints an error if they try to search for a puppy and do not fill out all the necessary fields
  if (isset($_GET['error']) && $_GET['error'] == 1)
  {
    echo "<script type='text/javascript'>";
    echo "alert('Please fill in all the required search fields and try again.');";
    echo "</script>";
  }

?>