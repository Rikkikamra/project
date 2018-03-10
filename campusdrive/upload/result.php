<?php
session_start();
include("dbconn.php");
?>
<html>
<head>
	<title>Check your Result.</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container">  
    


	<h3 style="margin-top: 100px;">Hope your exam was good. </h3> <h3>Check if you are eligible for next round.</h3> <br><br>
<form method="POST">
	<input type="text" placeholder="Phone Number" name="phone" style="padding: 5px;">
	<button type="SUBMIT" name="SUBMIT" class="btn btn-success">SUBMIT</button>
</form>
<?php
  if(isset($_POST['SUBMIT']))
  {
  	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
  	$sql= "SELECT * FROM table1 WHERE phone=\"$phone\"";
  	$result = $conn->query($sql);
  	$row = $result->fetch_assoc(); 
  	$stu=$row['name_student'];
  	$clg=$row['name_college'];
  	$ssc=$row['ssc'];
  	$hsc=$row['hsc'];
  	$point=$row['diploma'];
  	$email=$row['email'];
  	$brch=$row['branch'];
  	$grad=$row['pointer'];
  	$_SESSION['selection']=$row['selected'];

  echo nl2br ("Name: $stu \n");
  echo nl2br ("College: $clg \n");
  echo nl2br ("Branch: $brch \n");
  echo nl2br ("Email: $email \n");
  echo nl2br ("SSC: $ssc \n");
  echo nl2br ("HSC: $hsc \n");
  echo nl2br ("Diploma: $point \n");
  echo nl2br ("BE AVG: $grad \n");
 }
?>

<form method="POST" action="display.php"><br>
	<button type="SUBMIT" name="present" class="btn btn-default">Check Result</button>
</form>
</div>
</body>
</html>