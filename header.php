<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.2.1.min.js"></script>
<style type="text/css">
		#navbar{background-color: black;
        color: white;
        width: 100%;
        height: 80px;
        border-bottom: 0px;
        z-index: -5;
}
#navbar a{text-decoration: none; color: white;border: 0px;}
#nav-button{
  margin-top: 30px;
}
#nav-button ul{
    overflow-x: hidden;
    white-space: nowrap;   
    width: 100%;
    margin-left: 80px;
}
#nav-button li{
    display: inline;
    padding: 10px 5px;
    margin: 5px;
}
#nav-button a:hover{text-decoration: none; color: yellow;}
#nav-button li:hover{
    color: yellow;
    text-decoration: none;
}
	</style>
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom-width: 0px;margin-bottom: 0px;">	
		<div class="container" id="navbar">
		
			<div class="col-md-6">
				<h1><a href="index.html">BookMyFood</a></h1>
			</div>
			<div class="col-md-6" id="nav-button">
				<ul style="display: inline;">
					<li><b> <a href="index.html">Home</a></li>
                    <li><a href="index.html#services" class="smoothScroll">Services</a></li>
                    <li><a href="restaurant.php">Restaurants</a></li>
                    <li><a href="index.html#contact" class="smoothScroll">Contact Us</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signin.php">Sign up</a></b></li>
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>