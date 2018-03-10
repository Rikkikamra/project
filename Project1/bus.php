<html>
<?php
	session_start();
?>

	<head>

		<link href="https://fonts.googleapis.com/css?family=Concert+One|Bree+Serif|Cabin|Merriweather" rel="stylesheet">
	<meta charset="utf-8">

		<title>Bus</title>
	
		<style>
		
			body{margin:0;
				box-sizing: border-box;
			/*background-image: url("back1.jpg");
		background-attachment: fixed;*/}
						
			.input{margin:20px;
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

		<script type="text/javascript">
			
		function selectType(){
			var x = document.querySelectorAll("input[name=sleeper], input[name=seater], input[name=ac], input[name=nonac]");
			var i;

			if(document.getElementById('alltype').checked == true){
				for(i=0;i < x.length; i++){
					x[i].checked = true;
				}
				
			}
			else{
				for(i=0;i < x.length; i++){
					x[i].checked = false;
				}

			}
		}

		function selectTime(){
			var x = document.querySelectorAll("input[name=zero], input[name=six], input[name=twelve], input[name=eighteen]");
			var i;

			if(document.getElementById('alltime').checked == true){
				for(i=0;i < x.length; i++){
					x[i].checked = true;
				}
				
			}
			else{
				for(i=0;i < x.length; i++){
					x[i].checked = false;
				}

			}

		}

		function selectOperator(){
			var x = document.querySelectorAll("input[name=ganga], input[name=yamuna], input[name=saraswati]");
			var i;

			if(document.getElementById('alloperator').checked == true){
				for(i=0;i < x.length; i++){
					x[i].checked = true;
				}
				
			}
			else{
				for(i=0;i < x.length; i++){
					x[i].checked = false;
				}

			}

		}



		</script>
	
	</head>

	<body>
	
		<form style="position:fixed;width:100%;background-color:orange;box-shadow:0 2px 4px 0 #aaaaaa;float: left;" action="bus.php">
		
			<input class="input" type="text" name="source" placeholder="Source" value="Mumbai" />
			<input class="input" type="text" name="destination" placeholder="Destination" value="Nashik" />
			<input class="input" type="text" name="depart" placeholder="Depart Date" value="20/04/2017" />
			<input class="input search" type="submit" name="search" value="Search"/>
		
		</form>	

		<div style="padding-top: 150px"></div>

		<div style="max-height:20%;
					width:70%;
					margin: 0px 550px 0 280px;
					box-sizing: border-box;
					letter-spacing: 2px;
					line-height: 30px;
					font-family: sans-serif;
					">

			<div style="letter-spacing: 5px;">
				<div style="float: left;font-size: 30px;padding-left: 40px"><span>Departure</span></div>
				<div style="float: left;font-size: 30px;padding-left: 40px"><span>Arrival</span></div>
				<div style="float: left;font-size: 30px;padding-left: 40px"><span>Duration</span></div>
				<div style="float: left;font-size: 30px;padding-left: 40px"><span>Travels Name</span></div>
				<div style="float: left;font-size: 30px;padding-left: 40px"><span>Price</span></div><br>
			</div><br>
			<hr>
			
			<?php

			$json = file_get_contents('https://developer.goibibo.com/api/bus/search/?app_id=21395c6c&app_key=44fcdd6ea9cc967edf401f6e58040e06&format=json&source=mumbai&destination=nashik&dateofdeparture=20170420');
			$data = json_decode($json);

			for($i=0;$i<150;$i++){
			echo '<div style="text-align: center;">
				<div style="padding-left: 40px;width: 178.4px;float: left;font-size: 20px;"><span>' . $data->data->onwardflights[$i]->DepartureTime . '</span></div>
				<div style="padding-left: 40px;width: 120px;float: left;font-size: 20px;"><span>' . $data->data->onwardflights[$i]->ArrivalTime . '</span></div>
				<div style="padding-left: 40px;width: 153.39px;float: left;font-size: 20px;"><span>' . $data->data->onwardflights[$i]->duration . '</span></div>
				<div style="padding-left: 40px;width: 245.59px;float: left;font-size: 20px;"><span>' . $data->data->onwardflights[$i]->TravelsName . '</span></div>
				<div style="padding-left: 40px;width: 93.34px;float: left;font-size: 20px;"><span>&#8377 ' . $data->data->onwardflights[$i]->fare->totalfare . '</span><br>
				<form action="checkout.php"><input name="book" type="submit" class="search" style="text-decoration: none;padding: 10px 20px;font-size: 15px;letter-spacing: 1px;border-radius: 5px;margin-top: 5px;" value="Book"/></a></div><br>
			</div><br><br><hr>';
		}

			?>

		</div>

		

		
	</body>

</html>
