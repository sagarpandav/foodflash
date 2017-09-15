<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<style type="text/css">
		
#services{

  color: white;
    padding-top: 80px;
  padding-bottom: 80px;

}
.card{
    border-radius: 3px;
    border: 1px solid #ededed;
    margin-bottom: 1px;
    margin-top: 25px;
    padding: 0px;
    position: relative;
    font-size: 14px;
    background-color: white;
    text-align: center;
    box-sizing: border-box;
    color: black;
    padding-bottom: 25px;
}

.card h3{
    font-size: 16px;
    font-weight: 700;
}

.card:hover{
    z-index: 1;
}

.row img{
    height: 150px;
    width: 260px;
}

	</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom-width: 0px;margin-bottom: 0px;">   
        <div class="container" id="navbar">
        
            <div class="col-md-6">
                <h1><a href="index.html">Food Flash</a></h1>
            </div>
            <div class="col-md-6" id="nav-button">
                <ul style="display: inline;">
                    <li><b> <a href="index.html">Home</a></li>
                    <li><a href="index.html#services" class="smoothScroll">Services</a></li>
                    <li><a href="restaurant.php">Restaurants</a></li>
                    <li><a href="index.html#contact" class="smoothScroll">Contact Us</a></li>
                    <li><a href="logout.php">Log out</a></li>
                    
                </ul>
            </div>
        </div>
    </nav>

<section class="parallax-section">
    <div class="container" id="services">
    	<div class="services_title">
    		<h2 align="center"><b>check out various restaurants here</b></h2>
    		<!--<p align="center"><b>check out various restaurants here</b></p>-->
    	</div>

    	<div class="row">
    		<div class="col-md-3">
    			<div class="card" id="one" style="width: 26.5rem;"">
    				<img class="card-image-top" src="images/foodway/foodway.png">
                    <div class="card-block">
    				<h3>FoodWay</h3>
    				<a href="foodwaymenu.php" class="btn btn-primary">Menu</a>
                    </div>
    			</div>
    		</div>
        </div>
    </div>
</section>

</body>
</html>