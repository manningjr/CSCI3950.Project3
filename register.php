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
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
           	Register
          </div>

 
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
  
  
     <div class="columnCont2">
<div class="left">
 <div class="about">
    <p>Registering now will speed up the checkout process.
</p>
  </div>
  <form id:"registerUser" name="registerUser" method="post" action=''>
  
  	<p><input type="text" name="username"/>
   	<label for="username">Username</label></p>
   	<?php
		$username = $_REQUEST['username'];
	?>
  
	<p><input type='text' name = 'fname' />
 	<label for="fname">First Name</label></p>
  	<?php
		$username = $_REQUEST['fname'];
	?>
    
    <p><input type='text' name = 'lname' />
 	<label for="fname">Last Name</label></p>
  	<?php
		$username = $_REQUEST['lname'];
	?>
    
    <p><input type='text' name = 'password' />
 	<label for="password">Password<label></p>
  	<?php
		$username = $_REQUEST['password'];
	?>
    
    <p><input type='text' name = 'cpassword' />
 	<label for="cpassword"> Confirm Password<label></p>
  	<?php
		$username = $_REQUEST['cpassword'];
	?>
    
    <p><input type='text' name = 'email' />
 	<label for="email">Email<label></p>
  	<?php
		$username = $_REQUEST['email'];
	?>
    
    <p><input type='text' name = 'phoneNum' />
 	<label for="phoneNum">Phone Number<label></p>
  	<?php
		$username = $_REQUEST['phoneNum'];
	?>
    
    <p><input type='text' name = 'street' />
 	<label for="street">Street<label></p>
  	<?php
		$username = $_REQUEST['street'];
	?>
    
    <p><input type='text' name = 'city' />
 	<label for="city">City<label></p>
  	<?php
		$username = $_REQUEST['city'];
	?>

 	<?php
	//require ('mysql_connect.php');
	$sql="SELECT state_id, state_name FROM assignedState ORDER BY state_name ASC"; 
	$result=mysql_query($sql); 
	$options=""; 
						
	while ($row=mysql_fetch_array($result)) { 
	$id=$row["state_id"];
	$assignedState=$row["state_name"]; 
	$options.="<OPTION VALUE=\"$id\">".$assignedState; 
	} 
	?>
    <SELECT name="assignedState"> 
    <OPTION VALUE=0>Select State
    <?=$options?> 
    </SELECT> 
                        
    <?php
	//stores value from dropdown menu in assignedTo2
	$assignedState= $_REQUEST['assignedState'];
	?>
            
	<p><input type='text' name = 'zip' />
 	<label for="zip">Zip<label></p>
  	<?php
		$username = $_REQUEST['zip'];
	?>
    
    <p><label name="rank">Rank</label>
   	<SELECT name="rank">
 	<option>User</option>
   	<option>Admin</option>
   	<?php
   	$rank=$_REQUEST['rank'];
  	?>
   	</SELECT></p>
    
	<input name="submit" type="submit" value="Register"/>
					<?php
                            
                            require ('./mysql_connect.php');
                            //ini_set('display_errors',1);
								if (isset($username) || isset($password1) || isset($cpassword) || isset($rank))
								{
									if ($rank=='admin')
									{
										$rankNum=1;
									}
									else
									{
										$rankNum=0;
									}
														
				// requirements that must be met
									if ($username!="" && $password==$cpassword && $password!="" && strlen($password)>=8)
										{
											//updates username and password in the database
											$query="INSERT INTO user VALUES (\"\",\"$username\", \"$password\",\"$rankNum\")";
											$result = mysql_query($query);
											
												if($result)
												{
													$username = $_SESSION['myusername'];
				
													echo "<p style='font-family:verdana; font-size:20px;'>" . $username . "</p>";
													echo "<p>You have successfully entered in a username and password.</p>";
													$_POST = array();
												}
												else // An error has been made!!!!
												{
													die('Error: ' . mysql_error(). "<br>");
													echo "An error has been made, please try again.";
												}
										}
									//	Does password equal confirmed password?
									else if ($password!=$cpassword)
										{
											echo "<p>I am sorry but the two passwords do not match, please try again.</p>";
										}
									//	Is password long enough?
									else if(strlen($password)<8)
										{
											echo "<p>Please make sure your password is eight characters or longer.</p>";
										}
									//	Are all fields entered with information?
									else if($username=="" || $password=="")
										{
											echo "<p>Please enter in information in all fields.</p>";
										}
										
									// Close database connection	
									//mysql_close($con);
								}
							?>
    
  </form>
</div>

<div class="right">
<img src="img/register.jpg" class="pics"/>
</div>

<div class="left">
<img src="img/register.jpg" class="pics"/>
</div>

</div>

  <div class="paws">
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
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
