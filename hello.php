
<?php
 
    session_start();
 
    if (isset($_SESSION['user']['logged_in'])) {
        header('Location: user.php');
        exit;
    }
 
    if (isset($_POST['login_submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
 
        if ($email === "user@laraphp.com" && $password === "password") {
            $_SESSION['user']['logged_in'] = true;
            $_SESSION['user']['username'] = "User";
            header("Location: user.php");
            exit;
        } else {
            die("Sorry! Your account doesn't exist in our database.");
        }
    }
 
?>
 
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post">
            <p><input type="text" name="email" placeholder="Email" required></p>
            <p><input type="password" name="password" placeholder="Password" required></p>
            <p><button type="submit" name="login_submit">Login</button></p>
        </form>
    </body>
</html>