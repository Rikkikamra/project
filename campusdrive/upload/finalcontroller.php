<?php
 session_start();
 include("dbconn.php");



if(!empty($_POST['check_list'])) {
	// echo "Entered main if";

	if (isset($_POST['Submit'])) {
		
		// echo "Entered pass if";	
    foreach($_POST['check_list'] as $check) {
			            
            $sql= "UPDATE table1 SET selected= '2' where id=$check";
            $result = $conn->query($sql);	
 			header("Location: final.php");
    	}
	}
	elseif (isset($_POST['Fail'])) {
		// echo "Entered fail if";
    foreach($_POST['check_list'] as $check) {
            
            $sql= "UPDATE table1 SET selected= '1' where id=$check";
            $result = $conn->query($sql);	
 			header("Location: final.php");
		}
	}
}


?>
