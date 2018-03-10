<?php
session_start();
$_SESSION['adminlogged']=0;
session_destroy();
header("Location: admin.php");
?>