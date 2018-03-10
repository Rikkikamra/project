<html>

	<head>

	<meta charset="utf-8">

		<title>Flight</title>
	
		<style>
		
			body{margin:0;
			background-image: url("back1.jpg");
		background-attachment: fixed;}
			
			form{background-color:orange;
					box-shadow:0 2px 4px 0 #aaaaaa;}
					
			input{margin:20px;
					width:200px;
					height:40px;
					padding:0px 15px;
					font-size:15px;
					border-radius:5px;
					border:1px solid #777777;}
					
			.search{background-color:purple;
						color:white;
						border:0px;
						transition:0.3s;}
						
			.search:hover{background-color:white;
							color:purple;
							font-style:bold;
							box-shadow:0 4px 20px rgba(0,0,0,0.16), 0 4px 30px rgba(0,0,0,0.12);}
			
		</style>
	
	</head>

	<body>
	
		<form style="position:fixed;width:100%" action="flight.php">
		
			<input type="text" name="source" placeholder="Source" required/>
			<input type="text" name="destination" placeholder="Destination" required/>
			<input type="text" name="depart" placeholder="Depart Time"/>
			<input class="search" type="submit" name="search" value="Search"/>
		
		</form>
	
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div style="height:100%;
					width:20%;
					background-color:purple;
					margin-left:30px;
					box-shadow:2px 2px 5px #bbb, 4px 4px 10px #ccc;
					border-radius:5px;">
		</div>
	
	</body>
	
</html>
