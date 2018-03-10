<html>

	<head>
		<title>Sign In</title>
		
		<style>
		
			body{margin:0px;
			}
		
			.sign{width:600px;
					height:400px;
					background-color:#f8f8f8;
					border:none;
					border-radius:5px;
					box-shadow: 0 2px 8px 0 rgba(46, 60, 73, 0.4);}
			
			form{padding:10px;}
			
			.text {color:#222222;
					font-family:verdana;
					letter-spacing:2px;
					font-size:20px;}
			
			.button {background-color: #0ff09f;
						border: none;
						color: white;
						padding: 15px 32px;
						text-align: center;
						font-size: 20px;
						margin:25px 0px 20px 0px;
						letter-spacing: 5px;
						border-radius:5px;}
				
			.button:hover {background-color: #fffeee;
							color: #0ff09f;
							box-shadow: 0 4px 20px rgba(0,0,0,0.16), 0 4px 30px rgba(0,0,0,0.12);
							transition:0.2s;}
						
			input{padding:10px 20px;
					width:350px;
					border:1px solid #bbbbbb;
					font-size:20px;
					letter-spacing:2px;
					border-radius:10px;}

			.error{font-size: 13px;
					color: red;
					float:left;
					margin: 0px 20px;}
		
		</style>

		<script type="text/javascript">
			
		function formValidate(){

			var emailV = document.forms["myform"]["email"].value
			if (emailV == "") {
				document.getElementById('emailerror').innerHTML = "Email must be filled out";
				return false;
			}
			else{
				document.getElementById('emailerror').innerHTML = "";
				var atpos = emailV.indexOf("@");
				var dotpos = emailV.indexOf(".");
				if(atpos<1 || dotpos < atpos+2 || dotpos+2>=emailV.length){
					document.getElementById('emailerror').innerHTML = "Invalid email format";
					return false;
				}
			}

			var passV = document.forms["myform"]["pass"].value
			if (passV == "") {
				document.getElementById('passerror').innerHTML = "Password must be filled out";
				return false;
			}
			else{
				document.getElementById('passerror').innerHTML = "";
				if (passV.length < 8) {
					document.getElementById('passerror').innerHTML = "Password length should be atleast of 8 characters";
					return false;
				}
			}
		}

		</script>
	</head>
	
	<body>
	
	<div class="sign">
		
			<form method="post" action="checklogin.php" onsubmit="return formValidate()" name="myform">
				<div class="text" align="center"><br>
					Email-ID <span style="color:red;font-size:13px;">*</span>
						<span style="padding:0px 15px 0px 35px;">:</span>
						<input title="Enter your Email ID" type="text" name="email">
						<span id="emailerror" class="error"></span><br><br>
					Password <span style="color:red;font-size:13px;">*</span>
						<span style="padding:0px 15px 0px 30px;">:</span>
						<input title="Enter your Password" type="password" name="pass"> 
						<span id="passerror" class="error"></span><br><br>
					<input class="button" type="submit" value="Sign In"><br>
					<a href="forgotpass.php" target="signtype" style="text-decoration:none">Forgot Password ?</a><br><br>
					<a href="signup.php" target="signtype" style="text-decoration:none" >Not a user yet ? Register now</a>
				</div>
			
			</form>
		
		</div>
	
	</body>

</html>
