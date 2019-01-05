<?php
  
  echo '<html>
<head><title>Studiu PHP</title>
<script language="JavaScript">
function alertare () {
 alert("Esti hotarat sa inveti php?")
}
</script>
</head> 
<body onLoad="alertare()">
<p>Un script PHP ce contine JavaScript</p>
</body>
</html>'; 

$student = 'Florin';
echo 'Acum studentul este '.$student.'<br>';
$nume = 'Anghel';
$prenume = 'Florin';
echo ' Ma numesc '.$nume.' '.$prenume.' si sunt student. <br>'; 
echo $prenume .'<br>' ;
echo 25 .'<br>';

define('MANCARE', 'branza');
echo  MANCARE;
 ?>
