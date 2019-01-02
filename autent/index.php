<?php
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <img src="https://picsum.photos/200/150?lock=10">
    <ul>
        <li><a href="index.php">HOME</a></li>
        <?php
            if (!isset($_SESSION['id'])) {
                echo '<li><a href="signup.php">SIGN UP</a></li>';
            }
        ?>
    </ul>

   <?php
     if (!isset($_SESSION['id'])) {
        echo '
            <h2>WELCOME<h2>
            <form method="POST" action="includes/login.inc.php">
                <input type="text" name="username" placeholder="Username"><br><br>
                <input type="password" name="password" placeholder="Password"><br><br>
                <input type="submit" value="Log in">
            <form>
        ';

        if (isset($_GET['info']) && $_GET['info'] == 'LOGIN_FAILED') {
            echo 'Connection error!';
        }
     } else {
        echo 'Welcome  '.$_SESSION['surname'];
        echo '
            <form action="includes/logout.inc.php"><br><br>
                <input type="submit" value="Log Out">
            </form>
        ';
     }
    ?>
</body>
</html>
