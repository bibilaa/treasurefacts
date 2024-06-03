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
            <h2>Login Form</h2>
            <p id="message" style=<?php
                    if (isset($_SESSION['message']) and $_SESSION['message']=='Akun berhasil dibuat'){
                        echo "color:green;";
                    }
                    else echo "color:red;";
                ?>>
                <?= isset($_SESSION['message'])?$_SESSION['message']:"" ?>
                <?= $_SESSION['message']=""?>
            </p>
            <form method="post" id="login_form" action="login_proccess.php">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username"><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Log in">
            </form>
            <p>Belum memiliki akun silahkan <a href="signup.php">daftar</a></p>
        </div>
    </body>
</html>