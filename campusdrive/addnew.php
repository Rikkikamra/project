<?php

include("dbconn.php");
        $phn=$_POST['number'];
	$email = $_POST['email'];
        $naam = $_POST['naam'];
        $clg = $_POST['clg'];
        $brch =$_POST['branch'];
        $ssc = $_POST['ssc'];
        $hsc = $_POST['hsc'];
        $diplo = $_POST['diploma'];
        $point = $_POST['pointer'];

		$sql= "INSERT INTO table1(name_student,email,name_college,branch,phone,ssc,hsc,diploma,pointer) values ('$naam','$email','$clg','$brch','$phn','$ssc','$hsc','$diplo','$point')" ;
		$result = $conn->query($sql);
		header("Location: index.php");
?>