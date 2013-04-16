

</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Puppies</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/pupInfo.css">
    <link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
   

    <?php
      ini_set('display_errors', 1);
      include("sidebarJquery.php");
      require("database/database.php");
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

        <div class="contentProfile">

          <div class="title">
            Puppies
          </div>

 
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
      
       
     
     <div class="pupInfo">
      
      
      
    <?php

      $database = database_connect();

      $q1 = "SELECT * FROM `puppies`";

      $blah = mysql_query($q1);


      while($puppy = mysql_fetch_assoc($blah))
      {
        $puppy_id = $puppy['puppy_id'];   // Keep as hidden field on image links to pupInfo. Then we can just send this field with the link and query for the correct id on pupInfo.php
        $pupName = $puppy['name'];
        $breed = $puppy['breed'];
        $birthday = $puppy['birthday'];
        $sex = $puppy['sex'];
        if ($puppy['vaccination'] == 1)
          $vaccin = "Yes";
        else
          $vaccin = "No";
        $price = $puppy['price'];
        $location = $puppy['location'];
        $img = $puppy['img_name'];

        $puppies[] = $puppy;  //Stores info into puppies[] for potential use later. May not be necessary.

        echo "<div class='puppic'>";
          echo"<a href='pupInfo.php?id=" . $puppy_id . "'><img src='$img' alt='Puppy image'/></a>";
        echo "</div>";
        
        echo "<div class='puppy-list'>";
          echo "<table>";
            echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
            echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
            echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
            echo "<tr><td>Birthday:</td><td><b>$birthday</b></td></tr>";
            echo "<tr><td>Vaccinated:</td><td><b>$vaccin</b></td></tr>";
            echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
            echo "<tr><td>Location:</td><td><b>$location</b></td></tr>";
          echo "</table>";
        echo "</div>";


      }
    ?>
    </div>  

    <div class="favorite">
    <a href="pupInfo.php" class="button" style="top: 236px; left: 199px;">Add To Favorite</a>

    <a href="pupInfo.php" class="button" style="top: 236px; left: 199px;">See Favorites</a>
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
