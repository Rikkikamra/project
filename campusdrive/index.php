<?php
	session_start();
	include("dbconn.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Checking page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div style="height: 150px;" class="text-center">
      <img src="logo.png" height="100px" style="padding-top: 10px;">

    </div>
          <form  method="POST" action="" class="text-center">
            <h2>Confirm your Registration Here !!!</h2><br>
          <input type="text" placeholder="Mobile Number" name="phone" style="padding: 5px;width: 200px;text-align: center;"> 
          	<br><br><input type="SUBMIT" name="SUBMIT" class="btn btn-primary" style="width: 200px;"><br><br>
          </form>
          <?php
          if(isset($_POST['SUBMIT']))
          {
          	$phone = mysqli_real_escape_string($conn,$_POST['phone']);
          	$sql= "SELECT * FROM table1 WHERE phone=\"$phone\"";
          	$result = $conn->query($sql);
          	$row = $result->fetch_assoc();
          	$_SESSION['phone']= $phone; 
          	$stu=$row['name_student'];
          	$_SESSION['name']=$row['name_student'];
          	$clg=$row['name_college'];
          	$ssc=$row['ssc'];
          	$hsc=$row['hsc'];
          	$point=$row['diploma'];
          	$email=$row['email'];
          	$brch=$row['branch'];
          	$grad=$row['pointer'];

?>

<div class="row" style="margin: 20px;">
<div class="col-sm-3 col-sm-offset-3">
  
</div>
  <div class="col-sm-3"  style="background-color: #ecf0f1;padding: 10px;">
  <?php  echo nl2br ("Name:  \n");
          echo nl2br ("College:\n");
          echo nl2br ("Branch:  \n");
          echo nl2br ("Email:  \n");
          echo nl2br ("SSC:  \n");
          echo nl2br ("HSC:  \n");
          echo nl2br ("Diploma:  \n");
          echo nl2br ("BE AVG:  \n");

        
        ?>
</div>
<div class="col-sm-3" style="background-color: #ecf0ff;padding: 10px;">
<?php  echo nl2br ("$stu \n");
          echo nl2br (" $clg \n");
          echo nl2br (" $brch \n");
          echo nl2br (" $email \n");
          echo nl2br (" $ssc \n");
          echo nl2br (" $hsc \n");
          echo nl2br (" $point \n");
          echo nl2br (" $grad \n");

         }
        ?>
</div>

</div>
          

        <form method="POST" class="text-center" style="padding-top: 20px;">
        	<button type="SUBMIT" name="present" class="btn btn-success">Confirm presence</button>
        	<button type="SUBMIT" name="edit" class="btn btn-info">Edit any details</button>
        	<button type="SUBMIT" name="register" class="btn btn-warning">Register here</button>
        </form>
<div class="text-center"><br><br>
        <?php

         if(isset($_POST['present']))
         	{
         		$naam=$_SESSION['name'];
         		$phn=$_SESSION['phone'];
         		echo $naam." is present";
         		$sql= "UPDATE table1 SET present= '1' where  phone=\"$phn\"";
         		$result = $conn->query($sql);
         		?></div>
         <form method ="POST" action="confirm.php" class="text-center"><br><br>
         <button type="SUBMIT" name="home" class="btn btn-success">Home</button>
         <button type="SUBMIT" name="undo" class="btn btn-danger">UNDO</button>
         </form>
         <?php
         	}
         
        if (isset($_POST['edit'])) 
        {
        	header("Location: change.php");
        }

        if (isset($_POST['register'])) {
        	header("Location: register.php");
        }
        ?>
      </div>
</body>
</html>