<?php
session_start();
require 'connection.php';

if (!empty($_POST['username']) && !empty($_POST['password']) &&  isset($_POST['username']) && isset($_POST['password'])) {
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conectare, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['password'];

    $passwordMatches = password_verify($password, $hash);
    if (!$passwordMatches) {
        header("Location: ../index.php?info=LOGIN_FAILED");
        die();
    } else {
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        $_SESSION['username'] = $row['username'];
    }

    header("Location: ../index.php");
}
?>
