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
	
		include("sidebarJquery.php");

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
   
   
   echo "<form action='orderPlaced.php'>";
   //echo   "<input type='hidden' name='customer_id' value='$customer_id'/>";
   
   
   echo "<table>";
   		
	$database = database_connect();
		
     $username = $_SESSION['myusername'];

	 $query = "SELECT * FROM `user` WHERE `username` = '" . $username . "'";
		 
	 $results = mysql_query($query);
	 
     while($row = mysql_fetch_assoc($results))
	 {
		$user[] = $row;
	 }
	 
	 $user = $user[0];
	 
	

   echo "<tr><td>First Name:</td><td>".$user['fname']."</td></tr>";
   echo "<tr><td>Last Name:</td><td>".$user['lname']."</td></tr>";
   echo "<tr><td>Email Address:</td><td>".$user['email']."</td></tr>";
   echo "<tr><td>Phone Number:</td><td>".$user['phoneNum']."</td></tr>";
   echo "<tr><td>Street:</td><td>".$user['street']."</td></tr>";
   echo "<tr><td>City:</td><td>".$user['city']."</td></tr>";
   echo "<tr><td>State:</td><td>".$user['state']."</td></tr>";
    echo "<tr><td>Zip Code:</td><td>".$user['zip']."</td></tr>";
	echo "<tr><td>Credit Card Number:</td><td>".$user['card_number']."</td></tr>";
	echo   "<tr><td></td><td></td></tr>";
    echo "</table>";
   

	
	foreach($user as $key => $value)
	{
		echo '<input type="hidden" name="'.$key.'" value="'.$value.'"/>';
	}
	
	echo "<input type='submit' name='submit' />";
	
	
	
	echo "</form>"; // end of form

} // end else statement

?>
</div>

<div class="right">
<h3 style="margin-top:-20px; text-align:center;">Puppy Selected</h3>
<?php
ini_set('display_errors', 1);
include("addToCart.php");
?>
<?php

      if (isset($_SESSION['cart']) && !empty($_SESSION['cart']))
      {
        $database = database_connect();

        $session = $_SESSION;


        $queries = array(); // Make queries array


        //  Makes queries out of $_SESSION data
        $i = 0; //  Index placeholder
        foreach ($session['cart'] as $key=>$value)
        {
          $queries[$i] = "SELECT * FROM `puppies` WHERE `puppy_id` = '" . $value . "'";   //  Make query
          
  		
  		////////////////////////////////////////////////////////
  		$blah = mysql_query($queries[$i]);
  		while($puppy = mysql_fetch_assoc($blah))
        {
          $puppy_id = $puppy['puppy_id'];   // Keep as hidden field on image links to pupInfo. Then we can just send this field with the link and query for the correct id on pupInfo.php
          $pupName = $puppy['name'];
          $breed = $puppy['breed'];
          $birthday = $puppy['birthday'];
          $sex = $puppy['sex'];
          //$size = $puppy['size'];
          if ($puppy['vaccination'] == 1)
            $vaccin = "Yes";
          else
            $vaccin = "No";
          $price = $puppy['price'];
          $location = $puppy['location'];
          $img = $puppy['img_name'];

          $puppies[] = $puppy;  //Stores info into puppies[] for potential use later. May not be necessary.
  		 
          echo "<hr>";
          
          echo "<div class='puppic'>";
            echo"<a href='pupInfo.php?id=" . $puppy_id . "'><img src='$img' alt='Puppy image' width='100' height='100'/></a>";
          echo "</div>";
          
          echo "<div class='puppy-list'>";
            echo "<table>";
              echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
              echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
              echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
              echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
            echo "</table>";
          echo "</div>";
          
  		    echo "<div class='infoButtons3'>";
  		      echo"<a href='remove.php?puppy_id=".$puppy_id."'> <img src='img/pupcart3.png' /></a>";
  		    echo "</div>";

        }
  	  
  	  $i++; //  Increment index
        }
        echo "</p>";
	  }
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