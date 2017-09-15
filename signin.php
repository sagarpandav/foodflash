<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body style="background-color: #222222;">

<?php include 'header.php' ?>
	<div class="container">
		<div class="Line2" align="center">
  			<div class="form">
   	 		<h2>Create an account</h2>
    		<form action="validate_signin.php" method="post">
      			<input type="text" placeholder="Username" name="uname" /><br>
      			<input type="password" placeholder="Password" name="pass" /><br>
      			<input type="email" placeholder="Email Address" name="email" /><br>
      			<input type="tel" placeholder="Phone Number" name="mono" /><br>
      			<button onclick="Signinfunction()">Register</button>
    		</form>
  			</div>
		</div>
		
	</div>
</body>
</html>