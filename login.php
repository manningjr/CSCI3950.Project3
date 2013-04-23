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
            <form method="POST" action="loginproc.php">
                            
                            <tr><td>Username:</td><td><input type=="text"
                            name="myusername" id="myusername" size="20"></td></tr>
                        
                            <tr><td>Password:</td><td><input type="password"
                            name="mypassword" id="mypassword" size="20"></td></tr>
                        	
                           <tr><td>&nbsp;</td><td>
                            
                            <tr>
                            <td><input type="submit" name="Submit" value="Login"></td>
                            
                            	<!--Forgot Password-->
                            	<td>
									<script>
                                    function forgotPassword()
                                    {
                                    alert("Please contact your campus administrator!");
                                    }
                                    </script>
                                    
                                    <input type="button" onClick="forgotPassword()" value="Forgot Password" />
                           		</td>
                            </tr>
                        </form>
                        
                        
                            	<!--Register-->
                        	<tr>
                            	<td>&nbsp;</td>
                            </tr>
                        	<tr>
                                <td>
                                	<a href="register.php" target="_blank"><u>Register</u></a>
                                </td>
                            </tr>
        </table>
     </div>
 
</div>
