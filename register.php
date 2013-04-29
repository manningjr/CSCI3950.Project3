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
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
   

    <?php
      ini_set('display_errors', 1);
      include("sidebarJquery.php");
      require("database/database.php");
    ?>
    
    <?php
ini_set('display_errors', 1);
include("loginJquery.php");
?>

  <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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

<div class="left" style="color:white;">
 
<div class="about">
    <p>You need to register in order to start the checkout process.
</p>
  </div>
  <form id:"registerUser" name="registerUser" method="post" action="">
        
	      <span id="usernameTextField">
          <input type="text" name="username" id="username2" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
       	<?php $username = $_REQUEST['username']; ?>
                  
 	      <span id="fnameTextField">
          <input type="text" name="fname" id="fname" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $fname = $_REQUEST['fname']; ?>
        
		<span id="lnameTextField">
		<input type="text" name="lname" id="lname" />
		<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $lname = $_REQUEST['lname']; ?>
        
      <input type='password' name = 'password' placeholder="Password"/><br/>
		  <?php $password = $_REQUEST['password']; ?>
            
   	<input type='password' name = 'cpassword' placeholder="Confirm Password"/>
			<?php $cpassword = $_REQUEST['cpassword']; ?><br/>
        
      <span id="emailTextField">
      <input type="text" name="email" id="email" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $lname = $_REQUEST['lname']; ?>
        
      <span id="phoneNumTextField">
      <input type="text" name="phoneNum" id="phoneNum" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $phoneNum = $_REQUEST['phoneNum']; ?>
        
        <span id="cardNumTextField">
        <input type="text" name="cardNum" id="cardNum" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $phoneNum = $_REQUEST['cardNum']; ?>
        
        <span id="secCodeTextField">
        <input type="text" name="secCode" id="secCode" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $secCode = $_REQUEST['secCode']; ?>
        
        <span id="streetTextField">
        <input type="text" name="street" id="street" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $street = $_REQUEST['street']; ?>
        
        <span id="cityTextField">
        <input type="text" name="city" id="city" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $city = $_REQUEST['city']; ?>
        
        <select name='state'> 
		<option value='' selected='selected'>Select State</option> 
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
		<?php $state = $_REQUEST['state']; ?><br/>             
            
		<span id="zipTextField">
        <input type="text" name="zip" id="zip" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span><br/>
		<?php $zip = $_REQUEST['zip']; ?>
        
        <br/>
        
	<input name="submit" type="submit" value="Register"/-->
					
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
													?>
          <script>
													onload = function f()
													{
														alert("You have registered succesfully.");
													}
													</script>
                                                    
                                                    <?php
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
  <script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "custom", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "custom", {pattern:"/[A-Za-z]{2,}$/", validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {pattern:"/[A-Za-z]{2,}$/", useCharacterMasking:true, validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("fnameTextField", "custom", {pattern:"/[A-Za-z]{2,}$/", hint:"First Name"});
var sprytextfield5 = new Spry.Widget.ValidationTextField("usernameTextField", "custom", {hint:"Username"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("lnameTextField", "custom", {pattern:"/[A-Za-z]{2,}$/", hint:"Last Name"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("passwordTextField", "custom");
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8");
var sprytextfield9 = new Spry.Widget.ValidationTextField("emailTextField", "email", {hint:"Email"});
var sprytextfield10 = new Spry.Widget.ValidationTextField("phoneNumTextField", "phone_number", {hint:"Phone Number"});
var sprytextfield11 = new Spry.Widget.ValidationTextField("cardNumTextField", "credit_card", {hint:"Credit Card"});
var sprytextfield12 = new Spry.Widget.ValidationTextField("secCodeTextField", "integer", {hint:"Security Code"});
var sprytextfield13 = new Spry.Widget.ValidationTextField("streetTextField", "custom", {hint:"Street"});
var sprytextfield14 = new Spry.Widget.ValidationTextField("cityTextField", "custom", {hint:"City"});
var sprytextfield15 = new Spry.Widget.ValidationTextField("zipTextField", "zip_code", {hint:"Zip Code"});
  </script>
  </body>
</html>
