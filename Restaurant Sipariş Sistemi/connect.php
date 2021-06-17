<?php

$mysqli = mysqli_connect("localhost","root","12345","restaurant");
if ($mysqli -> connect_errno) {
  echo("Bir hata meydana geldi");
  exit;
} 

?>
