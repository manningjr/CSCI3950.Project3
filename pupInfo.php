

</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Puprofile</title>

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
        require("login.php");
      ?>

        <div class="contentProfile">
  

          <?php

            $database = database_connect();

            

            $q2 = "SELECT MAX(puppy_id) FROM `puppies`";

            $result = mysql_fetch_array(mysql_query($q2));


            $id = (isset($_GET['id']) && $_GET['id'] <= $result[0]) ? $_GET['id'] : 1;

            $q1 = "SELECT * FROM `puppies` WHERE `puppy_id`=" . $id;

            $blah = mysql_query($q1);


            while($puppy = mysql_fetch_assoc($blah))
            {
              $pupName = $puppy['name'];
              $breed = $puppy['breed'];
              $birthday = $puppy['birthday'];
              $sex = $puppy['sex'];
              $size = $puppy['size'];
              if ($puppy['vaccination'] == 1)
                $vaccin = "Yes";
              else
                $vaccin = "No";
              $price = $puppy['price'];
              $location = $puppy['location'];
              $img = $puppy['img_name'];
            }

          ?>



          <div class="title">
            Pup Profile
           </div>


  
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
      
     
     <div class="pupInfo">
      
         <div class="puppic">
    	<?php echo"<img src='$img' alt='Demo image' id='11' />"; ?>
      </div>
      
    <?php

            echo "<table>";
            echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
            echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
            echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
            echo "<tr><td>Size:</td><td><b>$size</b></td></tr>";
            echo "<tr><td>Birthday:</td><td><b>$birthday</b></td></tr>";
            echo "<tr><td>Vaccinated:</td><td><b>$vaccin</b></td></tr>";
            echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
            echo "<tr><td>Location:</td><td><b>$location</b></td></tr>";
            echo "</table>";
    ?>
    </div>  
	<?php
	echo "<div class='previousButton'>";
		echo "<a href='javascript:javascript:history.go(-1)'><img src='img/previous.png'/></a>";
		echo "</div>";
    echo "<div class='infoButtons3'>";
		echo"<a href='#'> <img src='img/pupcart.png'/></a>";
		echo "</div>";
	  	
		
    ?>



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
