<html>

	<head>
		<title>Sign Up</title>
	
		<style>
		
			body{margin:0;
				line-height:20px;}
		
			.sign{width:620px;
					height:680px;
					background-color:#f8f8f8;
					border:none;
					border-radius:5px;
					box-shadow: 0 2px 8px 0 rgba(46, 60, 73, 0.4);}
					
			form{padding:10px;}
					
			.button {
					background-color: #0ff09f; /* Green */
					border: none;
					color: white;
					padding: 15px 32px;
					text-align: center;
					font-size: 20px;
					margin:25px 0px 20px 0px;
					letter-spacing: 3px;
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
					
			.text {color:#222222;
					font-family:verdana;
					letter-spacing:2px;
					font-size:20px;}
					
			select{border-radius:10px;
					border:1px solid #bbbbbb;
					font-size:20px;
					letter-spacing:2px;
					width:350px;
					padding:10px 10px;
					margin:0px 0px 0px 0px;}
			
			.facebook{background-color:blue;
						width:200px;}
						
			.facebook:hover{cursor:pointer;
							background-color:#fffeee;
							color:blue;}
			
			.google{background-color:red;
					width:200px;}
					
			.google:hover{cursor:pointer;
							background-color:#fffeee;
							color:red;}

			#error{font-size: 13px;
					color: red;
					float:left;
					margin: 0px 20px;}
		
		</style>

	</head>
	
	<body>

		<?php
			$firstErr = $lastErr = $emailErr = $phoneErr = $passErr = "";
			$first = $last = $email = $phone = $pass = "";

			if($_SERVER["REQUEST_METHOD"] == "POST"){

				if(empty($_POST["first"])){
					$firstErr = "First Name is required";
					return false;
				}
				else{
					$first = test_input($_POST["first"]);

					if(!preg_match("/^[a-zA-Z]*$/",$first)){
						$firstErr = "Only letters are allowed";
						return false;
					}
				}

				if(empty($_POST["last"])){
					$lastErr = "Last Name is required";
					return false;
				}
				else{
					$last = test_input($_POST["last"]);

					if(!preg_match("/^[a-zA-Z]*$/",$last)){
						$lastErr = "Only letters are allowed";
						return false;
					}
				}

				if(empty($_POST["email"])){
					$emailErr = "Email is required";
					return false;
				}
				else{
					$email = test_input($_POST["email"]);

					if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
						$emailErr = "Invalid email format";
						return false;
					}
				}

				if(empty($_POST["phone"])){
					$phoneErr = "";
				}
				else{
					$phone = test_input($_POST["phone"]);
				}

				if(empty($_POST["pass"])){
					$passErr = "Password is required";
					return false;
				}
				else{
					$pass = test_input($_POST["pass"]);
					return false;
				}
			}

			function test_input($data) {
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}
		?>
	
		<div class="sign">
		
			<form method="post" action="register.php" onsubmit='return <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' name="myform">
				<div class="text" align="center"><br>
					First Name <span style="color:red;font-size:13px;">*</span>
							<span style="padding:0px 15px 0px 10px;">:</span>
							<input title="Enter your Username" type="text" name="first" value="<?php echo $first;?>">
							<span id="firsterror"><?php echo $firstErr;?></span><br><br>
					Last Name <span style="color:red;font-size:13px;">*</span>
							<span style="padding:0px 15px 0px 15px;">:</span>
							<input title="Enter your Username" type="text" name="last" value="<?php echo $last;?>">
							<span id="error"><?php echo $lastErr;?></span><br><br>
					Email-ID <span style="color:red;font-size:13px;">*</span>
							<span style="padding:0px 15px 0px 35px;">:</span>
							<input title="Enter your Email ID" type="text" name="email" value="<?php echo $email;?>">
							<span id="error"><?php echo $emailErr;?></span><br><br>
					Phone no. <span style="padding:0px 15px 0px 40px;">:</span>
							<input title="Enter your Phone no. (optional)" type="text" name="phone" value="<?php echo $phone;?>">
							<span id="error"><?php echo $phoneErr;?></span><br><br>
					Password <span style="color:red;font-size:13px;">*</span>
							<span style="padding:0px 15px 0px 30px;">:</span>
							<input title="Enter your Password" type="password" name="pass" value="<?php echo $pass;?>">
							<span id="error"><?php echo $passErr;?></span><br><br>

					<span style="float:left;margin-left:25px;font-size:13px;"> <span style="color:red">*</span> required field</span><br><br>
					<input class="button" type="submit" value="Sign Up">
					<p align="center">OR</p>
					<p align="center" style="font-size: 15px">sign up with these services</p>
					<a href="http://www.facebook.com" target="_blank"><input class="button facebook" type="button" value="Facebook"></a>
					<span style="margin: 0px 30px"></span>
					<a href="http://mail.google.com"><input class="button google" type="button" value="Google"></a>
				</div>
			
			</form>
		
		</div>
	
	</body>

</html>
