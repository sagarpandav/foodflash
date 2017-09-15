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
mysql_close();
?>