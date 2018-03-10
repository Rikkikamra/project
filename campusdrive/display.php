<?php
session_start();
include("dbconn.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>



</head>
<body>

	<div class="container text-center" style="padding-top:50px">
<?php
	if(isset($_POST['present']))
	{
		$select=$_SESSION['selection'];
		if ($select==0)
		 {
			echo "Your Result is still not uploaded!! Hope for the best!!";
		}
		elseif ($select==1) 
		{
			echo "Sorry you failed to Qualify for next Round";
		}
		else
		{
			echo "Congratulations you have successfully cleared first round and are qualified for GROUP DISCUSSION. Please move to Room no. 101 on 1st floor";
		}
	}
?>

</div>
</body>
</html>