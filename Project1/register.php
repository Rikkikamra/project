<?php


 $database="website";
 $first_name =$_POST['first'];
 $last_name=$_POST['last'];
 $email =$_POST['email'];
 $phone =$_POST['phone'];
 $password =$_POST['pass']; 
 
 
 $con = mysql_connect("localhost","root","");
 if (!$con)
  {
   die('Could not connect: ' . mysql_error());
  }
 
 mysql_select_db("$database", $con);
 $table = 'users';
 $sql = "insert into $table values ('$first_name','$last_name','$email','$phone','$password')";
 mysql_query($sql);
 echo '<script>window.location="byt0.php"</script>';

?>
