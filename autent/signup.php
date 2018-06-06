<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document 1</title>
</head>
<body>
	<img src="https://picsum.photos/200/150"
		width="100" 
		height="100">
		<ul>
			<li><a href="index.php">HOME</a></li>
			<li><a href="signup.php">SIGN UP</a></li>
		</ul>

    <h1>Sign up!</h1> 
    <form method="POST" action="includes/signup.inc.php">
        <input type="text" name="nume" placeholder="Nume"><br><br>
        <input type="text" name="prenume" placeholder="Prenume"><br><br>
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Parola"><br><br>
        <input type="submit" value="Sign up"> <br> <br>  
    <form>

    <?php 
        if (isset($_GET['info']) && $_GET['info'] == 'OK') {
            echo '<p style="text-align:center;"> Contul a fost creat</p/>';
        } else  if (isset($_GET['info']) && $_GET['info'] == 'EROARE') {
            echo '<p style="text-align:center;"> Eroare la completare!</p/>';
        } else  if (isset($_GET['info']) && $_GET['info'] == 'exista') {
            echo '<p style="text-align:center;"> Acest username exista deja!</p/>';
        }
    ?>
</body>
</html> 