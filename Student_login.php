
<?php
include_once("head.php");

?>
    <div class="login-container">
	<center><img src="user_log.png" width="100" height="100" border="0" alt=""></center>
        <h2>Student Login</h2>
        <form method="post"  id="loginForm"  action="http://localhost/LMS/login_check.php">

			<input type="text" id="USN" name="USN" placeholder="USN">
<br><br>
            <input type="password"  id="password" name="password" placeholder="Password">
<br><br>
            <input type="submit" value="Login" name="sub_userlog">
        </form>
            <div class="forgot-password">
            <a href="register.html"><h5>New Registration</h5></a>
        </div>
    </div>

  
</body>
</html>