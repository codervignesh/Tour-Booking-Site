<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        input.check {
            width : 20px;
            height : 20px;
        }
    </style>
</head>

<body>
    <div class="center">
        <div class="btns">
            <a class="a1" href="#">Sign up</a>
            <a class="a2" href="#">Log in</a>
        </div>
        <div class="signup-form">
            <div class="header">Signup For Free</div>
            <div class="signup_error"></div>
            <form action="new_register.php" name="signupForm" method="post" onsubmit="return signupValid()">
                <input class="fstname" type="text" name="firstname" placeholder="Firstname" autocomplete="off">
                <input class="lstname" name="lastname" type="text" placeholder="Lastname" autocomplete="off" >
                <input class="email" name="email" type="email" placeholder="Email" autocomplete="off">
                <input class="email" name="password" type="password" placeholder="Password" autocomplete="off">
                <input type="submit" value="Signup">
                <button type="button" onclick="window.location.href = 'homenew.php';">Sign up later</button>
            </form>
        </div>
        <div class="login-form">
            <div class="header header1">Login</div>
            <div class="login_error"></div>
            <form action="new_login_auth.php" name="loginForm" method="post" onsubmit="return loginValid()">
                <input class="email" type="email" name="email1" placeholder="Email" value="<?php if(isset($_COOKIE['user'])){ echo $_COOKIE['user'];}?>">
                <input class="email" type="password" name="password1" placeholder="Password" value="<?php if(isset($_COOKIE['pass'])){ echo $_COOKIE['pass'];}?>">
                <input type="checkbox" class="check" name="ch1" id="ch1">
                <label for="vehicle1"> Remember Me </label>
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="valid.js"></script>
</body>
</html>