<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body style="background-color: #222222;">

<?php include 'header.php' ?>
	<div class="container">
		<div class="Line2" align="center">
			<div class="form">
    		<h2>Login to your account</h2>
    		<form name="form" method="post" onsubmit="return validation()">
      			<input type="text" placeholder="Username" name="uname"/><br>
      			<input type="password" placeholder="Password" name="pass"/><br>
     			<input type="submit" value="Login">
    		</form>
    		<p style="color: #fff">Forget Password?</p>
  			</div>
  			
		</div>

		
	</div>



<script type="text/javascript">
	function validation(){
		var uname = document.forms["form"]["uname"].value;
		var pass = document.forms["form"]["pass"].value;
		if(uname == "" || pass == ""){
			alert("Username and password cannot be empty");
		}
		/*if(uname == 'admin'){
			if(pass == 'admin'){
				location.href = 'admin.php';
			}
			else{ alert("Unexpected error occured");}
		}*/
	}

</script>
</body>
</html>

<?php
session_start();
$uname = $_POST['uname'];
$pass = $_POST['pass'];

if($uname=='admin' && $pass=='admin')
{
	echo "<script> location.href = 'admin.php'; </script>";
}

$connect=mysqli_connect('localhost','root','','de');
 
if($connect)
{
		echo 'Failed to connect';
}

$query = "select * from signin where uname='$uname'";

$result=mysqli_query($connect,$query);
$row=mysqli_fetch_array($result);
if($row["pass"]==$pass){
	$_SESSION['uname']=$uname;
	echo "<script> location.href = 'restaurant.php'; </script>";
}
else{
	echo '<script>alert("invalid username and password");</script>';
}
?>