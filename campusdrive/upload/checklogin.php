<?php
 session_start();
 include("dbconn.php");
 $_SESSION['user']=$_POST['user'];
 $_SESSION['pass']=$_POST['pass'];

 $sql= "SELECT * FROM admin WHERE user='".$_SESSION['user']."'";
 $results = $conn->query($sql);
 $row = $results->fetch_assoc();
 $pass=$row['pass'];

 if($pass!=$_SESSION['pass'])
 {
 echo "invalid password";
 }
 else
 {
 	$_SESSION['adminlogged']=1;
 	header("Location: final.php");
 }
?>
