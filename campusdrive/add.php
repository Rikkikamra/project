<?php
session_start();
include("dbconn.php");
$phn=$_SESSION['phone'];
		$email = $_POST['email'];
        $naam = $_POST['naam'];
        $clg = $_POST['clg'];
        $brch =$_POST['branch'];
        $ssc = $_POST['ssc'];
        $hsc = $_POST['hsc'];
        $diplo = $_POST['diploma'];
        $point = $_POST['pointer'];

		$sql= "UPDATE table1 SET name_student= '$naam',name_college= '$clg' , branch= '$brch' , email= '$email' , ssc= '$ssc' , hsc= '$hsc' , diploma= '$diplo' , pointer= '$point' where  phone=\"$phn\"";
		$result = $conn->query($sql);
		header("Location: index.php");
?>