<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style/login_signup.css">
    </head>
    <body>
        <div class="container">
            <h2>Signup Form</h2>
            <p id="message" style="color:red;">
                <?= isset($_SESSION['message'])?$_SESSION['message']:"" ?>
                <?= $_SESSION['message']=""?>
            </p>
            <form method="post" id="login_form" action="signup_proccess.php">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Log in">
            </form>
            <p>Sudah memiliki akun silahkan <a href="login.php">login</a></p>
        </div>
    </body>
</html> 