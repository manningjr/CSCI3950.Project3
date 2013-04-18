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
	About Us
  </div>
  <div class="title3">
	Become Aware
  </div>
  <div class="about">
    <p>No matter how "reputable" you think your local pet store is, they are almost surely getting their puppies from a "backyard" dog breeder, or a puppy mill. The majority of purebred dogs are the product of irresponsible "backyard" dog breeders. These are people who make some easy cash by breeding their purebred dogs and they often also sell dogs through the newspaper classified ads. Remember that most of these backyard dog breeders don't know about breeding for favorable health and temperament qualities, and they don't know how to raise a properly socialized litter. Many of these little dog are weaned from their mothers way too soon. Sometimes, a backyard dog breeder turns into small-time puppy mill to increase their supply so you can buy a dog from a pet store and they can make a higher profit.
</p>
    <p>&nbsp; </p>
  </div>
<div class="title3">
	Stop Feeding The Puppy Mills
  </div>
  <div class="about">
    <p>What are puppy mills? A puppy mill is basically a purebred puppy factory farm where the puppies are just churned out as fast as they can and then sold to pet stores. The dogs are kept in small cages and forced to breed at unhealthy rates… it's all about the money. Female dogs in puppy mills are made to have several litters per year, which is extremely dangerous and cruel. Each purebred puppy mill produces several different breeds for pet stores, and pays little attention to the specific health and genetic diseases due to inbreeding. Genetic health testing is almost unheard of and mass-producing pets for profit is the bottom line. In the worst puppy mills, horrifying conditions are the norm. How can you stop puppy mills? There is only one way. Take away their profits. Remember before you buy a puppy, keep in mind that adoption is the most humane option! </p>
    <p>&nbsp;</p>
  </div>

<div class="title3">
	What To Do
  </div>
  <div class="about">
    <p>Luckily a solution exists! PupFetcher has a team of 20 experts monthly inspecting the conditions at every of our kennel partners. To increase our trust in our partners we require that the American Kennel Club approved each of these kennels. PupFetcher also rescues abandoned puppies and give them our full medical attention and training in order to provide them the better home they deserve. PupFetcher is entirely devoted in the perfect treatment of every puppy. Always demand nothing less than the PupFetcher quality. </p>
    <p>&nbsp;</p>
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