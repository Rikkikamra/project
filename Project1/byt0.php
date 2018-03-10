<!DOCTYPE html>
<?php
session_start();
?>
<html>

	<head>

		<title>Book your trip</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<style>
		
			body{background-image: url('back3.jpg');
		background-attachment: fixed;
					margin:0px;}
			
			.nav{background-color: #0ff09f;
					margin:0px;
					padding:0px;
					box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
					position:fixed;
					width:100%;}
				 
			.ankit {list-style-type: none;
				float:right;
				font-family: verdana;}
				
			.book {float:left;}
			
			.book a{text-decoration: none;
					color:white;
					margin-left: 200px;
					font-size:25px;
					transition:0.4s;
					letter-spacing:3px;
					font-family: verdana;}
				
			.book a:hover{color:black;
							}
				 
			.rakesh a{color : white;
				 display : block;
				 margin: 5px 20px;
				 text-decoration: none;
				 letter-spacing:3px;
				 font-size:20px;
				 transition:0.4s;}
				 
			.rakesh a:hover{color : black;
						}
			
			.rakesh {float : left;}
			
			.contenthead{display: flex;	
							width:55%;
							background-color:#dddddd;
							margin:auto;
							border-radius:5px;
							box-shadow: 0 2px 4px 0 rgba(46, 60, 73, 0.4);}				
			
			img{border-radius: 10px;}
				
			input{padding:10px 20px;
					margin:10px 50px;
					width:300px;
					border:1px solid #bbbbbb;
					font-size:20px;
					letter-spacing:2px;
					border-radius:10px;}
					
			.button {background-color: #0ff09f;
						border: none;
						color: white;
						width:200px;
						text-align: center;
						font-size: 20px;
						letter-spacing: 5px;
						border-radius:5px;
						cursor:pointer;}
				
			.button:hover {background-color: #fffeee;
							color: #0ff09f;
							box-shadow: 0 4px 20px rgba(0,0,0,0.16), 0 4px 30px rgba(0,0,0,0.12);
							transition:0.2s;}
			
			.content img{margin:25px;}
			
			.content form{margin:25px;}


			.drop .rikesh a:hover{background: #617F8A;}
			
			.rikesh :hover .drop{display: block;
						position: absolute;}

			.rikesh :hover .drop{float: none;
						font-size: 11px;}

			.rikesh :hover a{background: #617F8A;}

			.rikesh :hover .rikesh a:hover{background: #95A9B1;}
			
			
		</style>
		<script type="text/javascript">
			function gupta()
			{
				document.getElementById('sharma').innerHTML="<ul><li><a href='byt0.php'>My Bookings</a></li><li><a href='byt0.php'>Cancellations</a></li><li><a href='logout.php'>Logout</a></li></ul>";
			}
		</script>

		


	</head>

	<body>
		
		<div class="nav">
	
			<p class="book"><a href="byt0.php">Book Your Trip</a></p>
			
			<ul class="ankit">
				<li class="rakesh"><a href="#support">Support</a></li>
				<li class="rakesh"><a href="#recentsearches">Recent Search</a></li>
				<li class="rakesh"><a href="#help">Help</a></li>
				<?php 
				if( $_SESSION["loggedon"] == 1)
				{
					echo '<li class="rakesh drop" id="sharma"><a onclick="gupta()">Hey '.$_SESSION["first_name"].'</a></li>';
				}
				else
				{
					echo '<li><a href="login.php">Login/Sign Up</a></li>';
				}
				?>
			</ul>
			<br>
			<h3>

		</div>

		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			
		<div class="contenthead">

			<div class="content img">
				<img src="bus.png" width="250" height="250"/>
			</div>

			<div class="content form">

				<form action="details.php">
					<input type="text" name="sourcebuses" placeholder="Source" required/><br>
					<input type="text" name="destinationbuses" placeholder="Destination" required/><br>
					<input type="text" name="departbuses" placeholder="Depart Date"/><br>
					<input type="submit" value="Search" name="searchbuses" class="button"/>
				</form>

			</div>

		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="contenthead">

			<div class="content img">
				<img src="flight.jpg" width="250" height="250"/>
			</div>

			<div class="content form">

				<form action="flight.php">
					<input type="text" name="sourcetflights" placeholder="Source" required/><br>
					<input type="text" name="destinationflights" placeholder="Destination" required/><br>
					<input type="text" name="destinationflights" placeholder="Depart Date" /><br>
					<input type="submit" value="Search" name="searchflights" class="button"/>
				</form>

			</div>

		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="contenthead">

			<div class="content img">
				<img src="cabs.jpg" width="250" height="250"/>
			</div>

			<div class="content form">

				<form action="cabs.php">

					<input type="text" name="sourcecabs" placeholder="Source" required/><br>
					<input type="text" name="destinationcabs" placeholder="Destination" required/><br>
					<input type="text" name="destinationcabs" placeholder="Depart Date" /><br>
					<input type="submit" value="Search" name="searchtrains" class="button" />

				</form>

			</div>

		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
			
	</body>

</html>
