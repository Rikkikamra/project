<?php
session_start();
include("dbconn.php");
$phone=$_SESSION['phone']; 
$sql= "SELECT * FROM table1 WHERE phone=\"$phone\"";
  	$result = $conn->query($sql);
  	$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit details</title>

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">

<div class="row" style="margin: 20px;">
<div class="col-sm-3 col-sm-offset-3">
  
</div>
  <div class="col-sm-3"  style="background-color: #ecf0f1;padding: 10px;font-size: 20px;">
 		Name: <br>
			Email: <br>
			Phone number:  <br>
			Name of College:  <br>
			Name of Branch: <br>
			SSC:  <br>
			HSC: <br>
			Diploma: <br>
			Average pointer:  <br>
</div>
<div class="col-sm-3" style="background-color: #ecf0ff;padding: 10px;">
	<form method="POST" action="add.php">
			<input type="text" name="naam" value="<?php echo $row['name_student']; ?>"> <br>
			 <input type="text" name="email" value="<?php echo $row['email']; ?>"> <br>
			<input type="text" name="number" value="<?php echo $row['phone']; ?>"> <br>
			 <input type="text" name="clg" value="<?php echo $row['name_college']; ?>"> <br>
			 <input type="text" name="branch" value="<?php echo $row['branch']; ?>"> <br>
			 <input type="text" name="ssc" value="<?php echo $row['ssc']; ?>"> <br>
			 <input type="text" name="hsc" value="<?php echo $row['hsc']; ?>"> <br>
			 <input type="text" name="diploma" value="<?php echo $row['diploma']; ?>"> <br>
			 <input type="text" name="pointer" value="<?php echo $row['pointer']; ?>"> <br>
			
</div>

</div>
<div class="text-center">
	<button type="Submit" name="submit">Submit</button>
		</form>

</div>

			
	</div>
	
	<!-- <?php 
	// if (isset($_POST['submit'])) 
	{
		
	}
?> -->
</body>
</html>