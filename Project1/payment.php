<html>

	<head>

	<meta charset="utf-8">

		<title>Payment</title>
	
		<style>
		
			body{margin:0;
				background: #ffffff;
				background-image: url("download.jpg");
		background-attachment: fixed;}
				
			input{margin:10px;
					width:230px;
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

			.contenthead{background: #dddddd;
						border-radius: 5px;
						width: 50%;
						margin: 50px auto 10px auto;
						height: 550px;
						padding: 50px;
						box-sizing: border-box;
						font-size: 20px;
						font-family: sans-serif;
			}

			.error{font-size: 13px;
					color: red;
					float:left;
					margin: 0px 20px;}

			
		</style>

		<script type="text/javascript">
			
		function formValidate(){
			var cardV = document.forms["myform"]["cardno"].value
			if (cardV == "") {
				document.getElementById('carderror').innerHTML = "Card No. must be filled out";
				return false;
			}
			else{
				if(cardV.length>16 || cardV.length<16){
					document.getElementById('carderror').innerHTML = "Card No. should be of 16 digit";
					return false;
				}
			}

			var expiryV = document.forms["myform"]["expiry"].value
			if (expiryV == "") {
				document.getElementById('expiryerror').innerHTML = "Expiry must be filled out";
				return false;
			}
			else{
				document.getElementById('expiryerror').innerHTML = "";
			}

			var cvvV = document.forms["myform"]["cvv"].value
			if (cvvV == "") {
				document.getElementById('cvverror').innerHTML = "CVV must be filled out";
				return false;
			}
			else{
				document.getElementById('cvverror').innerHTML = "";
			}

			var nameV = document.forms["myform"]["payment_name"].value
			if (nameV == "") {
				document.getElementById('nameerror').innerHTML = "Name must be filled out";
				return false;
			}
			else{
				document.getElementById('nameerror').innerHTML = "";
			}

		}

		</script>
	
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
		
		<div class="contenthead">

			<form method="post" action="successful.php" onsubmit="return formValidate()" name="myform">
	 
					<span style="font-size: 30px;letter-spacing: 2px;margin-left: 5px;font-family: sans-serif;">Payment details</span>
					<br><br>
					<div style="padding-left: 20px">
						<span>Card No.<span>
						
						<input style="margin-left: 53px" type="number" name="cardno" placeholder="XXXX-XXXX-XXXX-XXXX"/>
					</div>
					<span id="carderror" class="error"></span><br>
					<div style="padding-left: 20px;">
						<span style="">Expiry Date</span>
						<input style="margin-left: 30px" type="text" name="expiry" placeholder="MM / YY"/>
					</div>
					<span id="expiryerror" class="error"></span><br>
					<div style="padding-left: 20px;">
						<span>CVV No.</span>
						<input style="margin-left: 57px;" type="text" name="cvv" placeholder="XXX" />
					</div>
					<span id="cvverror" class="error"></span><br>
					<div style="padding-left: 20px;">
						<span>Name</span>
						<input style="margin-left: 82px;" type="text" name="payment_name" placeholder="Name on Card" />
					</div>
					<span id="nameerror" class="error"></span><br>
					<input style="margin-left: 20px;
									padding: 10px 20px;
									color: #ffffff;
									border-radius: 5px;" type="submit" class="pay" value="Proceed & Pay Securely" />

			</form>
		<div>

		</div>

	</body>

</html>
