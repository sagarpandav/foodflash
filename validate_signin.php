<?php
$connect=mysqli_connect('localhost','root','','de');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 

// create a variable
$uname=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mono=$_POST['mono'];

//Execute the query

mysqli_query($connect,"INSERT INTO signin(uname,pass,email,mono)
				VALUES('$uname','$pass','$email','$mono')");

echo "Data inserted succesfully.";
$_SESSION['login_user']=$uname;
//header("Location: index.html");
//exit();
?>
