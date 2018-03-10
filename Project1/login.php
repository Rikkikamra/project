<html>

	<head>
		<title>Login In Page</title>
		
		<style>
		
			body{margin:0px;
			background-image: url("back1.jpg");
		background-attachment: fixed;}
			
			.nav{background-color: #0ff09f;
				margin:0px;
				padding:0px;
				overflow:hidden;
				box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);
				position:fixed;
				width:100%;}
				 
			ul {list-style-type: none;
				float:right;}
				
			li a{color : white;
				 display : block;
				 padding: 5px 30px;
				 text-decoration: none;
				 letter-spacing:3px;
				 font-size:20px;
				 transition:0.4s;
				 }
				 
			li a:hover{color : black;
						display : block;
						padding: 0px 20px;
						text-decoration: none;
						letter-spacing:10px;
						cursor:pointer;
						font-size:25px;
						text-shadow: 0 4px 8px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.12);}
			
			li {float : left;}
			
			.book {float:left;}
			
			.book a{text-decoration: none;
					color:white;
					padding-left: 200px;
					font-size:25px;
					transition:0.4s;
					letter-spacing:3px;}
				
			.book a:hover{color:black;
						text-shadow: 0 4px 8px rgba(0,0,0,0.16), 0 4px 10px rgba(0,0,0,0.12);
						font-size:30px;
						letter-spacing:5px;}
						
			.frame{width:630px;
					height:690px;
					border:none;}
					
			a{padding:0px 100px;
				text-decoration:none;}
			
		</style>

	</head>
	
	<body>
			
		<div class="nav">
				
			<p class="book"><a href="byt0.php">Book Your Trip</a></p>
				
			<ul>
				<li><a href="login.php">My Account</a></a></li>
				<li><a href="#support">Support</a></li>
				<li><a href="#recentsearches">Recent Search</a></li>
				<li style="padding-right:100px"><a href="#help">Help</a></li>
			</ul>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<div class="sign" align="center" border="1px solid black">
			<a class="signin" href="signin.php" target="signtype" >Sign In</a>
			<a class="signup" href="signup.php" target="signtype">Sign Up</a>
		</div>
		
		<br>
		
		<div id="in" align="center"><iframe class="frame" name="signtype" scrolling="no" type="login" src="signin.php"/></div>
		
	</body>

</html>
