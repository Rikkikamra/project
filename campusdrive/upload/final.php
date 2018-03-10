<?php
session_start();

if($_SESSION["adminlogged"] !=1 )
	{
		echo "<script type='text/javascript'>\n";
		echo "alert('You are not logged in..!!!');\n";
		echo "</script>";
		echo '<script>window.location="admin.php"</script>';
		}	


include("dbconn.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Selection of students for next round</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- <script>
function myFunction()
{
	$id= document.getElementById("SearchID").value;
	$redirect = "final.php#"+$id;
    document.location.href = $redirect;
};
</script> -->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand active" href="#">Selection of Eligible Students</a>
    </div>

    <form class="navbar-form navbar-left">
<!--       <div class="form-group">
        <input type="text" class="form-control" placeholder="Search Using ID" id="SearchID">
      </div>
      <button type="button" class="btn btn-default" onclick="myFunction()">GO</button> -->
    </form>
     
   
      <a href="#Submit" style="" ><button type="button" class="btn btn-success" style="margin-top: 8px;">Go To Submit</button></a>
    
  </div>
</nav>
<div class="container" style="margin-top: 100px;">	





	
	<form method="POST" id="farmework_test" action="finalcontroller.php" id="#top">
		

<!-- 		<select id="framework" name="framework[]" multiple class="form-control">
 -->		
 	<?php
		$sql= "SELECT * FROM table1 where present='1' AND selected='0'"; 
		if($result = $conn->query($sql))
	{
		$rows=array();

		while ($row=$result->fetch_assoc()) 
		{
			$rows[]=$row;
			// echo "while is wokring";
		}
		foreach ($rows as $row)
		{
			// echo "entering the foreach";
			$user=stripcslashes($row['name_student']);
			$call=stripcslashes($row['phone']);
			$id=stripcslashes($row['id']);
			?>
			<div class="row">
				
					<?php echo "<div class=col-sm-1>".$id."</div><div class=col-sm-3>".$user."</div><div class=col-sm-2>".$call."</div>"; ?>
				
				<input type="checkbox" value="<?php echo $id ?>" name="check_list[]" style="height: 20px;width:20px;margin-top: 10px;"><hr>
			</div>
<!-- 			<option value="<?php echo $id.". ".$user."			".$call ?>"><?php echo $id.". ".$user."			".$call ?></option>	
 -->
			<?php 
		}
		?>
		</select> <?php
	} 
		?><br> <br>
		<input type="submit" name="Submit" value="Pass" id="Submit" class="btn btn-success" style="margin-bottom: 30px;margin-right: 50px;">
		<input type="submit" name="Fail" value="Fail" id="Fail" class="btn btn-success" style="margin-bottom: 30px;margin-right: 50px;">
		<a href="#top" style="" ><button type="button" class="btn btn-success" style="margin-bottom: 30px;">Go to top</button></a>
		<a href="logout.php" style="" ><button type="button" class="btn btn-success" style="margin-bottom: 30px;">Logout</button></a>

	</form>
	

</div>
</body>
</html>

<script>
	$(document).ready(function()
	{
		$('#framework').multiselect(
		{
			nonSelectedText: 'Select Framework',
			enableFiltering: true;
			enableCaseInsensitiveFiltering: true;
			buttonWidth: '400px';
		});
		$('#farmework_test').on('submit',function(event) {
			event.preventDefault();
			var form_data = $(this).serialize();
			$.ajax({
				url:"insert.php",
				method: "POST",
				data: form_data,
				success:function(data)
				{
					$('#framework option:selected').eachh(function(){
						$(this).prop('selected', false);
					});
					$('#framework').multiselect('refresh');
					alert(data);
				}
			})
		})	
	});

</script>