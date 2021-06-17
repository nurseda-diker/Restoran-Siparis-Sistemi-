<?php
  $server='localhost';
  $user='285407';
  $password='_Kc2agb44NKT-Z4';
  $database='285407';



$mysqli = mysqli_connect($server,$user,$password,$database);
if (!$mysqli) {
  echo("Bir hata meydana geldi");
  echo "Hata: ".mysqli_connect_error();
 
} 

?>
