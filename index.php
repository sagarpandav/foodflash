<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link href="fonts/fontawesome-webfont.ttf">
	<script type="text/javascript" src="js/main.js"></script>


</head>
<body class="index-hoverable nav-light" style="height-inital">

	<nav class="navbar navbar-default navbar-fixed-top" style="border-bottom-width: 0px;margin-bottom: 0px;">	
		<div class="container" id="navbar">
		
			<div class="col-md-6">
				<h1><a href="index.php">FoodFlash</a></h1>
			</div>
			<div class="col-md-6" id="nav-button">
				<ul style="display: inline;">
					<li><b> <a href="index.php">Home</a></li>
                    <li><a href="#services" class="smoothScroll">Services</a></li>
                    <li><a href="restaurant.php" class="smoothScroll">Restaurants</a></li>
                    <li><a href="#contact" class="smoothScroll">Contact Us</a></li>
                    <?php
                        if(!isset($_SESSION['uname'])){
                            echo '<li><a href="login.php">Login</a></li><li><a href="signin.php">Sign up</a></b></li>';
                        }
                        else{
                            echo '<li><a href="logout.php">Log out</a></li>';
                        }
                    ?>
					
				</ul>
			</div>
		</div>
	</nav>

		
	</div>

	<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouse1" data-slide-to="1"></li>
            <li data-target="#myCarouse1" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/burger.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Are you hungry?</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/pizza.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Check out here</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/Sandwich.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Delicious Food We provide!</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!--Carousel Over-->

    <!--services-->
<section class="parallax-section">
    <div class="container" id="services">
    	<div class="services_title">
    		<h2 align="center"><b>Services we provide</b></h2>
    		<p align="center"><b>Satisfy yourself with services</b></p>
    	</div>

    	<div class="row">
    		<div class="col-md-3">
    			<div class="card" id="one" style="width: 26.5rem;"">
    				<span>1</span>
    				<img class="card-image-top" src="images/search_restaurant.jpg">
                    <div class="card-block">
    				<h3>Search Restaurant</h3>
    				<p>Search and Compare all Restaurant at your Near.</p>
                    </div>
    			</div>
    		</div>
    		<div class="col-md-3">
    			<div class="card" id="two" style="width: 26.5rem;">
    				<span>2</span>
                    <img class="card-image-top" src="images/order.jpg">
                    <div class="card-block">
    				<h3>Bifurcate & Order</h3>
    				<p>Start bifurcating Food and Order as you like to Eat.</p>
    			    </div>
                </div>
    		</div>
    		<div class="col-md-3">
    			<div class="card" id="three" style="width: 26.5rem;">
    				<span>3</span>
    				<img class="card-image-top" src="images/Payment.jpg">
                    <div class="card-block">
    				<h3>Digital Payment</h3>
    				<p>Pay your bills Electricully or in Cash on Delivery.</p>
    			    </div>
                </div>
    		</div>
    		<div class="col-md-3">
    			<div class="card" id="four" style="width: 26.5rem;">
                <span>4</span>
                <img class="card-image-top" src="images/delivery.jpg">
                <div class="card-block">
    				<h3>Food Delivery</h3>
    				<p>Order and wait, your food will at your Home Soon!</p>
                </div>
    		    </div>
    	   </div>
        </div>
    </div>
</section>

<!--Choose Restaurant-->
<div id="choose_rest">
    <div class="container">
        <h3>Choose all Resaurants from over Your area.</h3>
        <p style="color: #fff">We have coverd all restaurants around you. Just select your favorite!</p>
        <a href="restaurant.php">VIEW RESTAURANTS</a>   
    </div>
</div>

<!-- contact section -->
<section id="contact" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-1 col-md-10 col-sm-12 text-center">
                <h1 class="heading">Contact Us</h1>
                <hr>
            </div>
            <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
                <form action="contact.php" method="post">
                    <div class="col-md-6 col-sm-6">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Name">
                  </div>
                    <div class="col-md-6 col-sm-6">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email">
                  </div>
                    <div class="col-md-12 col-sm-12">
                        <textarea name="message" rows="8" class="form-control" id="message" placeholder="Message"></textarea>
                    </div>
                    <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                        <input name="submit" type="submit" class="form-control" id="submit" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-md-2 col-sm-1"></div>
        </div>
    </div>
</section>

<!--Footer-->
<footer class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-3">
                <h3>Secure payments with</h3>
                <p>
                    <img src="images/cards.jpg" alt="" class="img-responsive">
                </p>
            </div>
            <div class="col-md-3 col-sm-3" id="about">
                <h3>About</h3>
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#contact" class="smoothScroll">Contacts</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signin.php">Register</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3" id="newsletter">
                <h3>Newsletter</h3>
                <p>
                    Join our newsletter to keep be informed about offers and news.
                </p>
                <div id="newsletter">
                </div>
                <form>
                    <div class="form-group">
                        <input name="email" id="email" type="email" value="" placeholder="Your mail" class="form-control">
                    </div>
                    <input type="submit" value="Subscribe" class="btn_1" id="submit">
                </form>
            </div>
            
        </div><!-- End row -->
        <div class="row">
            <div class="col-md-12">
                  <div id="social" align="center"><a href="#" class="fa fa-facebook"></a>
		      	       <a href="#" class="fa fa-twitter"></a>
					   <a href="#" class="fa fa-google"></a>
					   <a href="#" class="fa fa-linkedin"></a>
					   <a href="#" class="fa fa-youtube"></a>
					   <a href="#" class="fa fa-instagram"></a>
				</div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </footer>
<!--end Footer-->

<!-- copyright section -->
<section id="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h3>FoodFlash</h3>
                <p>Copyright © | All rights reserved |</p>
            </div>
        </div>
    </div>
</section>





    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script type="text/javascript">
    $('.carousel').carousel({
        interval: 3000 //changes the speed
    })
    </script>
</body>
</html>
