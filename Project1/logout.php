<?php
session_start();
$_SESSION["loggedon"]=0;

header('location:byt0.php');
session_destroy();
?>
