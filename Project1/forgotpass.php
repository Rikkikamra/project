<html>

	<head>
		<title>Forgot Password</title>
		
		<style>
		
			body{margin:0px;
			background-image: url("back1.jpg");
		background-attachment: fixed;}
			
			form{padding:30px;}
			
			.password{width:620px;
						height:300px;
						background-color:#f8f8f8;
						border:none;
						border-radius:5px;
						box-shadow: 0 2px 8px 0 rgba(46, 60, 73, 0.4);
						color:#222222;
						font-family:verdana;
						letter-spacing:2px;
						font-size:20px;}
						
			input{padding:10px 20px;
					width:350px;
					border:1px solid #bbbbbb;
					font-size:20px;
					letter-spacing:2px;
					border-radius:10px;}

			.button {
				width:200px;
				background-color: #0ff09f; /* Green */
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
		}

		</script>
	</head>

	<body>

		<div class="password">
			<form align="center" action="signin.php" onsubmit="return formValidate()" name="myform">
				Email-ID <span style="color:red;font-size:13px;">*</span>
						<span style="padding:0px 15px 0px 35px;">:</span>
						<input title="Enter your Email ID" type="text" name="email">
						<span id="emailerror" class="error"></span><br><br>
	
			
			<div style="line-height:10px;font-size:15px;float: left;">
				<p style="color:#777777;padding-left:70px;"><i>Enter your email address which was registered</i></p>
				<p style="color:#777777;padding-left:70px;"><i>and follow the steps to reset your password.</i></p>
			</div>

			<input class="button" type="submit" value="Submit" align="center">

					</form>

		</div>
		
	</body>
	
</html>
