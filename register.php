<?php
  session_start();
  ini_set('display_errors',1);
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
 <!--Sidebar-->
    <?php
    include("sidebar.php");
    ?>
    <!--End of Sidebar-->
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
           	Register
          </div>

 
     <div class="paws">
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
     </div>
  
  
     <div class="columnCont2">

<div class="right">
<img src="img/register.jpg" class="pics"/>
</div>

<div class="left">
 
<div class="about">
    <p>Registering now will speed up the checkout process.
</p>
  </div>
  <form id:"registerUser" name="registerUser" method="post" action=""></td></tr>
  <table>
  	<tr><td><input type='text' name='username'/></td><td> <label for='username'>Username</label></td></tr>
			<?php $username = $_REQUEST['username']; ?>
	<tr><td><input type='text' name = 'fname' /></td><td> <label for='fname'>First Name</label></td></tr>
			<?php $fname = $_REQUEST['fname']; ?>
    <tr><td><input type='text' name = 'lname' /></td><td> <label for='fname'>Last Name</label></td></tr>
			<?php $lname = $_REQUEST['lname']; ?>
	<tr><td><input type='password' name = 'password' /></td><td> <label for='password'>Password<label></td></tr>
			<?php $password = $_REQUEST['password']; ?>
   	<tr><td><input type='password' name = 'cpassword' /></td><td> <label for='cpassword'>Confirm Password<label></td></tr>
			<?php $cpassword = $_REQUEST['cpassword']; ?>
   	<tr><td><input type='text' name = 'email' /></td><td> <label for='email'>Email<label></td></tr>
			<?php $email = $_REQUEST['email']; ?>
   	<tr><td><input type='text' name = 'phoneNum' /></td><td> <label for='phoneNum'>Phone Number<label></td></tr>
			<?php $phoneNum = $_REQUEST['phoneNum']; ?>
	<tr><td><input type='text' name = 'cardNum' /></td><td> <label for='cardNum'>Card Number<label></td></tr>
			<?php $cardNum = $_REQUEST['cardNum']; ?>
   	<tr><td><input type='text' name = 'secCode' /></td><td> <label for='secCode'>Security Code<label></td></tr>
			<?php $secCode = $_REQUEST['secCode']; ?>
   	<tr><td><input type='text' name = 'street' /></td><td> <label for='street'>Street<label></td></tr>
			<?php $street = $_REQUEST['street']; ?>
   	<tr><td><input type='text' name = 'city'/></td><td> <label for='city'>City<label></td></tr>
			<?php $city = $_REQUEST['city']; ?>
	<tr><td><select name='state'> 
		<option value='' selected='selected'>Select</option> 
		<option value='AL'>Alabama</option> 
		<option value='AK'>Alaska</option> 
		<option value='AZ'>Arizona</option> 
		<option value='AR'>Arkansas</option> 
		<option value='CA'>California</option> 
		<option value='CO'>Colorado</option> 
		<option value='CT'>Connecticut</option> 
		<option value='DE'>Delaware</option> 
		<option value='DC'>District Of Columbia</option> 
		<option value='FL'>Florida</option> 
		<option value='GA'>Georgia</option> 
		<option value='HI'>Hawaii</option> 
		<option value='ID'>Idaho</option> 
		<option value='IL'>Illinois</option> 
		<option value='IN'>Indiana</option> 
		<option value='IA'>Iowa</option> 
		<option value='KS'>Kansas</option> 
		<option value='KY'>Kentucky</option> 
		<option value='LA'>Louisiana</option> 
		<option value='ME'>Maine</option> 
		<option value='MD'>Maryland</option> 
		<option value='MA'>Massachusetts</option> 
		<option value='MI'>Michigan</option> 
		<option value='MN'>Minnesota</option> 
		<option value='MS'>Mississippi</option> 
		<option value='MO'>Missouri</option> 
		<option value='MT'>Montana</option> 
		<option value='NE'>Nebraska</option> 
		<option value='NV'>Nevada</option> 
		<option value='NH'>New Hampshire</option> 
		<option value='NJ'>New Jersey</option> 
		<option value='NM'>New Mexico</option> 
		<option value='NY'>New York</option> 
		<option value='NC'>North Carolina</option> 
		<option value='ND'>North Dakota</option> 
		<option value='OH'>Ohio</option> 
		<option value='OK'>Oklahoma</option> 
		<option value='OR'>Oregon</option> 
		<option value='PA'>Pennsylvania</option> 
		<option value='RI'>Rhode Island</option> 
		<option value='SC'>South Carolina</option> 
		<option value='SD'>South Dakota</option> 
		<option value='TN'>Tennessee</option> 	
		<option value='TX'>Texas</option> 
		<option value='UT'>Utah</option> 
		<option value='VT'>Vermont</option> 
		<option value='VA'>Virginia</option> 
		<option value='WA'>Washington</option> 
		<option value='WV'>West Virginia</option> 
		<option value='WI'>Wisconsin</option> 
		<option value='WY'>Wyoming</option>
		</select></td><td>State</td></tr>
		<?php $state = $_REQUEST['state']; ?>             
            
		<tr><td><input type='text' name = 'zip' /></td><td> <label for='zip'>Zip</label></td></tr>
			<?php $zip = $_REQUEST['zip']; ?>
		
		</table>
        
        <br/>
        
	<input name="submit" type="submit" value="Register"/>
					
					<?php     
                            require ('./mysql_connect.php');
                            ini_set('display_errors',1);
	if (isset($username) || isset($fname) || isset($lname) || isset($password) || isset($cpassword) || isset($email) || isset($phoneNum) || isset($cardNum) || isset($secCode) || isset($street) || isset($city) || isset($state) || isset($zip))
								{
														
				// requirements that must be met
									if ($username!="" && $fname!="" && $lname!="" && $password==$cpassword && $password!="" && strlen($password)>=8 && $email!="" && $phoneNum!="" && $cardNum!="" && $secCode!="" && $street!="" && $city!="" && $state!="" && $zip!="")
										{
											//updates username and password in the database
							$query="INSERT INTO user VALUES (\"\",\"$username\", \"$password\",\"$fname\", \"$lname\", \"$email\", \"$phoneNum\", \"$card_number\", \"$security_code\", \"$street\", \"$city\", \"$state\",\"$zip\")";
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
									else if($username=="" || $fname=="" || $lname=="" || $password=="" || $email=="" || $phoneNum=="" || $cardNum=="" || $secCode=="" || $street=="" || $city=="" || $zip=="")
										{
											echo "<p>Please enter in information in all fields.</p>";
										}
										
									//Close database connection	
									mysql_close($con);
								}
							?>
     </form>
     
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

   

      <!-- end .container --></div>
      <!-- end .background--></div>
  </body>
</html>
