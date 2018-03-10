<html>

	<head>

	<meta charset="utf-8">

		<title>Checkout</title>
	
		<style>
		
			body{margin:0;
			background-image: url("back1.jpg");
		background-attachment: fixed;}
				
			input{margin:10px;
					width:200px;
					height:40px;
					padding:0px 15px;
					font-size:15px;
					border-radius:5px;
					border:1px solid #777777;}

			.pay{
				background-color:green;
						color:white;
						border:0px;
						transition:0.3s;
						cursor: pointer;
			}

			.pay:hover{background-color:orange;
							color:white;
							letter-spacing: 1px;
							box-shadow:0 4px 20px rgba(0,0,0,0.16), 0 4px 30px rgba(0,0,0,0.12);}

			.nav{background-color: #0ff09f;
					margin:0px;
					padding:0px;
					box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
					position:fixed;
					width:100%;}
				 
			ul {list-style-type: none;
				float:right;
				font-family: verdana;}	

			li a{color : white;
				 display : block;
				 margin: 5px 20px;
				 text-decoration: none;
				 letter-spacing:3px;
				 font-size:20px;
				 transition:0.4s;}
				 
			li a:hover{color : black;
						}
			
			li {float : left;}

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

			.contenthead{
				background: #dddddd;border-radius: 5px;width: 50%;margin: 50px auto 10px auto;height: 450px;padding: 50px;box-sizing: border-box;font-size: 20px;font-family: sans-serif;
			}

			
		</style>
	
	</head>
	<body>

		<div class="nav">
	
			<p class="book"><a href="byt0.php">Book Your Trip</a></p>
			
			<ul>
				<li><a href="#support">Support</a></li>
				<li><a href="#recentsearches">Recent Search</a></li>
				<li><a href="#help">Help</a></li>
				<li id='myAccount' onclick="myaccount()"><a>Login/Sign Up <a></li>
			</ul>
			<br>
			<h3>

		</div>

		<div style="padding-top: 70px"></div>
		<form action="payment.php">
		<div class="contenthead">
			<span style="font-size: 30px;letter-spacing: 2px;margin-left: 5px;font-family: sans-serif;">Traveller details</span>
			<br><br>
			<div style="padding-left: 20px">
				<span>Traveller's Name<span>
				
				<input type="text" name="firstname" placeholder="First Name" required/>
				<input type="text" name="lastname" placeholder="Last Name" required/><br>
				<input style="width: 100px;margin-left: 165px" type="number" name="age" placeholder="Age" required/>
			</div>
			<div style="padding-left: 20px;">
				<span style="">Email Address</span>
				<input style="margin-left: 30px" type="email" name="email" required />
			</div>
			<div style="padding-left: 20px;">
				<span>Mobile Number</span>
				<input style="margin-left: 23px" type="number" name="phone_no"  required/>
			</div>
			
			<input style="margin-left: 20px;
							padding: 10px 20px;
							color: #ffffff;
							border-radius: 5px;" type="submit" class="pay" value="Proceed & Pay" />
			</form>
		<div>

		</div>

	</body>

</html>
