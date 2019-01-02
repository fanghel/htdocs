<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up form</title>
</head>
<body>
    <img src="https://picsum.photos/200/150">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="signup.php">SIGN UP</a></li>
        </ul>

    <h1>Sign up!</h1>
    <form method="POST" action="includes/signup.inc.php">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="text" name="surname" placeholder="Surname"><br><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Password"><br><br>
        <input type="submit" value="Sign up"> <br><br>
    <form>

    <?php
    if (isset($_GET['info']))
        $status = $_GET['info'];
    else
        return;

    $message = [
        'OK'                  => "The account has been created!",
        'ERROR'               => "Please fill in all fields!",
        'ACCOUNT_UNAVAILABLE' => "The username is not available!"
    ];

    echo "<p style='text-align:center;'>$message[$status]</p/>";
    echo "<br/>";
    ?>
</body>
</html>
