<?php
//session_start();
require 'conectare.php';

if (!empty($_POST['username']) && !empty($_POST['password']) &&  isset($_POST['username']) && isset($_POST['password'])) { 
    $username = strtolower($_POST['username']);
    $password = $_POST['password'];
    echo 'test';
    echo "$username, $password";
    
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conectare, $sql);
    $row = $result->fetch_assoc();
    $hash = $row['password']; 
    
    $check = password_verify($password, $hash);
    echo "$check";
    if ($check == 0) {
        //header("Location: ../index.php?info=gresit");
        echo "$check";
        die();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hash'";
        $result = mysqli_query($conectare, $sql);
        
        if (!$row = $result->fetch_assoc()) {
            echo 'Parola sau username-ul nu se potriveste';
        
        } else {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nume'] = $row['nume'];
            $_SESSION['prenume'] = $row['prenume'];
            $_SESSION['username'] = $row['username'];
        }
        
     // header("Location: ../index.php");
    }  
}