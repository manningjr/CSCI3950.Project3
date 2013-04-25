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
  
<!--Content of Cart-->

<div class="puplist">

<?php
ini_set('display_errors', 1);
include("addToCart.php");
?>

    <?php

      $database = database_connect();

      $session = $_SESSION;

      //echo "<p style:'color:white;'>";
      //print_r($session);
      //echo "</p>";

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
		      echo"<a href='checkout.php'> <img src='img/pupcart3.png' /></a>";
		    echo "</div>";

        //  Remove button printed here for each puppy. 'puppy_id' needs to be linked to the remove buttons so it can be 
        //  found and deleted from the session. The page will be reloaded and it won't load the deleted puppy
      }
	  
	  $i++; //  Increment index
      }

      echo "<br><br>";

      //echo "<p style:'color:white;'>";
      //foreach ($queries as $q)
      {
       // echo $q;
       // echo "<br>";
      }
      echo "</p>";
    ?>

<?php
	echo "<div class='previousButton'>";
		echo "<a href='javascript:javascript:history.go(-1)'><img src='img/previous.png'/></a>";
		echo "</div>";
		
		    echo "<div class='infoButtons3'>";
		echo"<a href='checkout.php'> <img src='img/checkout.png'/></a>";
		echo "</div>";
		?>

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