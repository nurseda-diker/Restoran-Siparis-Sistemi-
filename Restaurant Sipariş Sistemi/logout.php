<?php

session_start();

include "connect.php";
unset($_SESSION["id"]);
unset($_SESSION['mail']);


header("Location:index.php");


?>
