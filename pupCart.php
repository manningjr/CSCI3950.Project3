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
  
  <br /><br />
<!--Content of Cart-->

<div class="cartContent">

    <p style="color: white;">Hello</p>

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