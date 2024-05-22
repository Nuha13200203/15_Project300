<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="signstyle.css">
</head>
<body>
    <div class="background">
        <div class="overlay"></div>
      </div>
    <div class="container">
        <h1 class="form-title">Sign Up</h1>
        <form method="post" action="signup_api.php">
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Full Name</label>
                    <input type="text" id="fullName" name="fullName" placeholder="Enter Full Name" required>
                </div>

                <div class="user-input-box">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter Username" required>
                </div>

                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter valid email"  required>
                </div>

                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password" required>
                </div>

                <div class="user-input-box">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" required>
                </div>

                <div class="form-submit-btn">
                    <a href="login.php">
                    <input type="submit" name="submit" value="Sign up">
</a>
                </div>


            </div>
        </form>
    </div>
</body>
</html>