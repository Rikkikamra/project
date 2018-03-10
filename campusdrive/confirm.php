<?php
 session_start();
 include("dbconn.php");
 if(isset($_POST["home"]))
 		{
 			session_destroy();
 			header("Location: index.php");
 		}
 if(isset($_POST['undo']))
 {
 			
 			$phn=$_SESSION['phone'];
 			$sql= "UPDATE table1 SET present= '0' where  phone=\"$phn\"";
 			$result = $conn->query($sql);	
 			header("Location: index.php");
}
 	

 
 ?>