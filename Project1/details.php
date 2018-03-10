<?php

	session_start();
	$_SESSION['source']=$_POST['source'];
	$_SESSION['dest']=$_POST['destination'];
	header('location:bus.php');
?>