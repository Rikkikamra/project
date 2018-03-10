<?php
include("dbconn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin panel</title>
</head>
<body>
<form method="POST" action="checklogin.php">
	UserName: <input type="text" name="user">
	Password: <input type="Password" name="pass">
	<button type="SUBMIT">LogIN</button>
</form>
</body>
</html>