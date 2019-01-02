<?php
require 'conectare.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$nume = $_POST['nume'];
$prenume = $_POST['prenume'];

$sql = "INSERT INTO user (username, password, email, nume, prenume) VALUES ('$username', '$password', '$email', '$nume', '$prenume')";

$result = mysqli_query($conectare, $sql);
if ($result) {
    echo "<br/> Datele pentru $prenume $nume au fost introduse!";
} else {
    echo "<br/> Eroare!!!";
    $mysqlerror = mysqli_error($conectare);
    echo "<br/> The error from MySQL is: <br/> $mysqlerror";
}

mysqli_close($conectare);

// header("Location: index.php");
?>
