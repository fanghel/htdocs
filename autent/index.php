<?php
   // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="header">
		<div class="container">
			<div class="logo">
				<img src="https://picsum.photos/200/150"
					width="100" 
					height="100">
			</div>
			<div class="nav">
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="signup.php"> SIGN UP</a></li>
				</ul>
			</div>
		</div>
	</div>
   <?php
   // if (isset($_SESSION['id'])) {
    //    echo 'Wellcome'.$_SESSION['prenume'];  
   // }
    
    ?>
    
    
    <h1>Bine ai venit!</h1>   
    <form method="POST" action="includes/login.inc.php">
        <input type="text" name="username" placeholder="Username"><br><br>
        <input type="password" name="password" placeholder="Parola"><br><br>
        <input type="submit" value="Log in">
    <form>
    <?php
        if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
            echo 'Eroare la conectare';
        }
    
    ?>
        
</body>
</html> 