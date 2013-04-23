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
  <form action='register_handle.php'>
	   <table>
			<tr><td>First Name:</td><td><input type='text' name = 'fname' /></td></tr>
			<tr><td>Last Name:</td><td><input type='text' name = 'lname' /></td></tr>
			<tr><td>Password:</td><td><input type='password' name = 'password' /></td></tr>
			<tr><td>Confirm Password:</td><td><input type='password' name = 'cpassword' /></td></tr>
			<tr><td>Email Address:</td><td><input type = 'text' name = 'email'/></td></tr>
			<tr><td>Phone Number:</td><td><input type = 'text' name = 'tel'/></td></tr>
			<tr><td>Street:</td><td><input type = 'text' name = 'street' /></td></tr>
			<tr><td>City:</td><td><input type = 'text' name = 'city'/></td></tr>
			<tr><td>
				State:</td><td><select name='State'>
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
				</select>
			</td></tr>
			<tr><td>Zip Code:</td><td><input type = 'text' name = 'zip'/></td></tr>
			<tr><td></td><td><button type='submit'>    Submit    </button><button type='Reset'>     Reset     </button></td></tr>
		</table>
  	</form>
</div>
<div class="right">
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
