</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Puprofile</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/pupInfo.css">
<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
<?php
include("sidebarJquery.php");
?>

</head>

<body>
<div class="container">

<?php
include("navBar.php");
?>

  <div class="contentProfile">
  
  <div class="title">
  Pup Profile
  </div>
  
 <div class="paws">
 <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
 <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
 <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
 </div>
  
   <div class="puppic">
<img src="img/puppic/11.jpg" alt="Demo image" id="11" />
  </div>
 
 <div class="pupInfo">
  
<?php
$pupName="Turk";
$breed="Lab";
$birthday="03-02-2012";
$sex="Female";
$vaccin="Yes";
$price="1000";
$location="Oregon";

echo "<form action='buyForm.php'>";

echo "<table>";
echo "<tr><td>Name:</td><td><b>$pupName</b></td></tr>";
echo "<tr><td>Breed:</td><td><b>$breed</b></td></tr>";
echo "<tr><td>Sex:</td><td><b>$sex</b></td></tr>";
echo "<tr><td>Birthday:</td><td><b>$birthday</b></td></tr>";
echo "<tr><td>Vaccinated:</td><td><b>$vaccin</b></td></tr>";
echo "<tr><td>Price:</td><td><b>$$price</b></td></tr>";
echo "<tr><td>Location:</td><td><b>$location</b></td></tr>";
echo "</table>";
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