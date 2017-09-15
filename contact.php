<?php
$connect=mysqli_connect('localhost','root','','de');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 

// create a variable
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

//Execute the query

mysqli_query($connect,"INSERT INTO contact(name,email,message)
				VALUES('$name','$email','$message')");

echo "Data inserted succesfully.";
//header("Location: index.html");
//exit();
?>