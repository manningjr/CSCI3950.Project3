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
    
<div class="login">   
    <h3>Register</h3>
    <table border="0">
    	<form method="post" action="loginproc.php">
        	
            <tr>
            	<td>Username: </td>
                <td><input type="text" name="username" size="20"/></td>
            </tr>
            
            <tr>
            	<td>Password: </td>
                <td><input type="text" name="password" size="20"/></td>
            </tr>
            
            <tr>
            	<td>Verify Password: </td>
                <td><input type="text" name="verifypassword" size="20"/></td>
            </tr>
            	
        </form>
    </table>
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