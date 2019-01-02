<?php
$conectare = mysqli_connect('localhost', 'root', '', 'autentificare');
if (!$conectare) {
    die('The database connection failed!');
}