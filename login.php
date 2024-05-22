<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="logstyle.css">
</head>
<body>
   <div class="wrapper">
    <div class="login_box">
        <div class="login-header">
            <span>Log In</span>
        </div>
    <form  method="post" action="login_api.php">
        <div class="input_box">
            <input type="text" id="user" name="username" class="input-field" required>
            <label for="user" class="label">Username</label>
        </div>
        <div class="input_box">
            <input type="password" id="pass" name="password" class="input-field" required>
            <label for="pass" class="label">Password</label>
        </div>
        <div class="remember-forgot">
            <div class="remember-me">
                <input type="checkbox" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <div class="forgot">
                <a href="#">Forgot password?</a>
            </div>
        </div>
            <div class="input_box">
                <button type="submit" name="login" class="input-submit">Login</button>
            </div>
            <div class="register">
                <span>Don't have an account?<a href="signup.html"> Register</a></span>
            </div>
            <div class="imgcontainer">
                
            </div>
    
     </form>
    </div>
   </div>
</body>
</html>
