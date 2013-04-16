<?php

session_start();

ini_set('display_errors',1);

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="PupFetcher"; // Database name 
$tbl_name="user"; // Table name 

// Connect to server and select databse.
$database = mysql_connect($host, $username, $password) or die("Mysql_Connect failed");
$blah = mysql_select_db($db_name, $database)or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");

$_SESSION['myusername'] = $myusername;

header("location:home.php");
}
else {
echo "Wrong Username or Password";
}
?>