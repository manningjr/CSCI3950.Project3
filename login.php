 <span class="toggle2">
</span>
 <span class="toggle2-letters">
 <p><b>Login</b></p>
</span>
<div class="hiddenDivLogin">
<?php
ini_set('display_errors', 1);
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
                	<td>&nbsp;</td>
                	<td><input type="submit" name="Submit" value="Login">
                <tr>
                    <td><a href='#'><u>Forgot Password</u>&nbsp;</a></td>
                    <td><a href="register.php" target="_blank"><u>Register</u></a></td>
                </tr>
                    
            </form>
        </table>
     </div>
 
</div>
