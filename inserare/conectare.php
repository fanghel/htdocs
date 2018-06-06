<?php
$conectare = mysqli_connect('localhost', 'root' , '' , 'florin');
if (!$conectare) {
	die(mysqli_connect_error());
}