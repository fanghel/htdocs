<?php
require 'conectare.php';
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "UTF-8">
    <title>Inserare</title>
</head>
<body>

<form action="signup.inc.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Parola"><br><br>
    <input type="text" name="email" placeholder="Email"><br><br>
    <input type="text" name="nume" placeholder="Nume"><br><br>
    <input type="text" name="prenume" placeholder="Prenume"><br><br>
    <input type="submit" name="trimite" value="Trimite">
</form>

</body>
</html>
