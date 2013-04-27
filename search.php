<?php
  session_start();
?>

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
	include("loginJquery.php");
	include('functions/functions.php');
	include('database/database.php');
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

        <div class="contentProfile">

          <div class="title">
            Search Results
          </div>

 
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
      
       
     
     <div class="puplist">

	<?php 

		$post = $_GET;

		if (isset($post['submit1']))
		{
			if (isset($post['breed']) && !empty($post['breed']) && isset($post['sex']) && !empty($post['sex']) && isset($post['age']) && !empty($post['age']) && isset($post['state']) && !empty($post['state']))
			{

				$breed = $post['breed'];
				$name = $post['pupName'];
				$sex = $post['sex'];
				$age = $post['age'];
				$location = $post['state'];

				$location = setState($location);

				if ($age == "0-1")	// If the age is from 0-1 weeks
				{
					$startAge = 0;	// Get beginning date (in days) for subtraction from time stamp to get rang of dates
					$endAge = 7;	// Get end date (in days) for subtraction from time stamp to get rang of dates
				}
				if ($age == "1-4")	// If age is from 1-4 weeks
				{
					$startAge = 7;	// Get range in days
					$endAge = 28;
				}
				if ($age == "4-3m") // Repeat for all ages
				{
					$startAge = 28;
					$endAge = 91;
				}
				if ($age == "3m-6m")
				{
					$startAge = 91;
					$endAge = 182;
				}
				if ($age == "6m-1y")
				{
					$startAge = 182;
					$endAge = 365;
				}
				if ($age == "1y-more")
				{
					$startAge = 365;
				}


			$currentDate = date("m-d-y");	// Get current date

			$startDate = mktime(0,0,0,date("m"),date("d")-$endAge,date("Y"));		// Gets the beginning date for query range
			$startDateFormatted = date("m-d-Y", $startDate);						// Formats date for query

			$endDate = mktime(0,0,0,date("m"),date("d")-$startAge,date("Y"));		// Gets the end date for query range
			$endDateFormatted = date("m-d-Y", $endDate);							// Formats date for query



			$database = database_connect();

			$q1 = "SELECT * FROM `puppies` WHERE `breed` = '" . $breed . "' AND `sex` = '" . $sex . "' AND 
					`birthday` BETWEEN '" . $startDateFormatted . "' AND '" . $endDateFormatted . "'";

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
		
				echo "<div class='infoButtons2'>";
					echo"<a href='pupInfo.php?id=" . $puppy_id . "'> <img src='img/profile.png'/></a>";
				echo "</div>";
		
				echo "<div class='infoButtons'>";
					echo"<a href='pupCart.php?id=" . $puppy_id . "'> <img src='img/pupcart2.png'/></a>";
				echo "</div>";

			}


		}
		else
		{
			echo '<meta http-equiv="refresh" content="0; url=puppies.php"/>';
		}

	}


	else if (isset($post['submit2']))
	{
		if (isset($post['size']) && !empty($post['size']) && isset($post['upkeep']) && !empty($post['upkeep']) && isset($post['state']) && !empty($post['state']))
		{

			$size = $post['size'];
			$upkeep = $post['upkeep'];
			$location = $post['state'];


			$location = setState($location);


			$database = database_connect();

			$q1 = "SELECT * FROM `puppies` WHERE `size` = '" . $size . "'";

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
		
				echo "<div class='infoButtons2'>";
					echo"<a href='pupInfo.php?id=" . $puppy_id . "'> <img src='img/profile.png'/></a>";
				echo "</div>";
		
				echo "<div class='infoButtons'>";
					echo"<a href='addToCart.php?id=" . $puppy_id . "'> <img src='img/pupcart2.png'/></a>";
				echo "</div>";

			}


		}
		else
		{
			echo '<meta http-equiv="refresh" content="0; url=puppies.php"/>';	
		}
	}

?>

<hr />

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
<!-- end .container --></div>
      <!-- end .background--></div>
    </body>
</html>