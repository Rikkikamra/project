<?php
	session_start();
	error_reporting(E_ALL ^ E_DEPRECATED);
	$database="website";
	$_SESSION["loggedin"] =1;	
	$_SESSION["email"] =$_POST['email'];
	$_SESSION["password"] =$_POST['pass'];
	$con = mysql_connect("localhost","root" ,"");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("$database", $con);
	$table = 'users';
	$sql = "SELECT * FROM $table WHERE email = '" .$_SESSION["email"]. "'";
	$results = mysql_query($sql);
	$results = mysql_fetch_assoc( $results );
//Getting all information in sessions
	$_SESSION["first_name"]=$results['first_name'];
	$_SESSION["last_name"]=$results['last_name'];
	$_SESSION["phone"]=$results['phone'];
	
	if ($results['email']==NULL) 
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('This Username does not exist');\n";
		echo "</script>";
		echo '<script>window.location="signup.php"</script>';
	}
	
	$storedpass = $results['password'];
	if($_SESSION["password"] == $storedpass)
	{
		setcookie('website[email]',$_SESSION['email'], 0, '', '', '', true);
		setcookie('website[password]',$_SESSION['pass'], 0, '', '', '', true);
		header('location:byt0.php');
		$_SESSION["loggedon"]=1;
	}
	else
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('The Username or Password is Incorrect');\n";
		echo "</script>";
		echo '<script>window.location="signin.php"</script>';
	} 
?>
