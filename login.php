 <span class="toggle2">
</span>
 <span class="toggle2-letters">
 <p><b>Login</b></p>
</span>
<div class="hiddenDivLogin">
<?php
ini_set('display_errors', 1);

/*
echo"<p><h3> Login</h3>";
                    echo"<table border='0'>";
                        echo"<form method='POST' action='loginproc.php'";
                        echo"<tr><td>Username:</td><td><input type='text'";
                        echo"name='username' size='20'></td></tr>";
						echo"<tr><td>Password:</td><td><input type='password'";
                        echo"name='password' size='20'></td></tr>";
						echo"<td><a href='#'><u>forgot password</u>&nbsp;</a></td>";
                        echo"<td><input type='submit'value='Login'></td></tr>";
                            
                        echo"</form>";
                    echo"</table>";
                echo"</div>";echo"<div class='login'>";
echo"<p><h3> Register</h3>";
                    echo"<table border='0'>";
                        echo"<form method='POST' action='registerProc.php'";
                        echo"<tr><td>Username:</td><td><input type='text'";
                        echo"name='username' size='20'></td></tr>";
						echo"<tr><td>Password:</td><td><input type='password'";
                        echo"name='password' size='20'></td></tr>";
						echo"<tr><td>Verify Password:</td><td><input type='password'";
                        echo"name='Vpassword' size='20'></td></tr>";
						echo"<td><a href='#'>&nbsp;</a></td>";
                        echo"<td><input type='submit'value='Submit'></td></tr>";
                        echo"</form>";
                    echo"</table>";
                echo"</div>"; */
 ?>
 
 <div class="login">
 	<h3>Login</h3>
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
            	<td><a href='#'><u>Forgot Password</u>&nbsp;</a></td>
                <td><a href="register.php" target="_blank"><u>Register</u>&nbsp;</a></td>
            </tr>
            	
        </form>
    </table>
 </div>
 
</div>
