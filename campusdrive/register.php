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
	<form method="POST" action="addnew.php">
		<input type="text" name="naam" placeholder="Name" style="padding: 10px; margin-right: 50px;" required="required" > 
		<input type="email" name="email" placeholder="Email" style="padding: 10px;" required="required"> <br><br>
		<input type="text" name="number" placeholder="Phone Number" style="padding: 10px;margin-right: 50px;" required="required"> 
		 <input type="text" name="clg" placeholder="College Name" style="padding: 10px;" required="required"> <br><br>
		 <input type="text" name="branch" placeholder="Branch" style="padding: 10px;margin-right: 50px;" required="required"> 
		<input type="text" name="ssc" placeholder="SSC Score" style="padding: 10px;" required="required"> <br><br>
		<input type="text" name="hsc" placeholder="HSC Score" style="padding: 10px;margin-right: 50px;" >
		 <input type="text" name="diploma" placeholder="Diploma Score" style="padding: 10px;"> <br><br>
		<input type="text" name="pointer" placeholder="BE Average Pointer" style="padding: 10px;margin-left: 20px;" required="required"> <br><br>
		<button type="Submit" name="" class="btn btn-success" style="width: 172px;padding: 10px;">Submit</button><br>
	</form>
	</div>
</body>
</html>