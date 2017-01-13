
 <?php 

session_start(); 
	

?> 
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Selelection</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		<img src="images/header.png" style="width:100%">
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
						<!--<a href="http://www.iitmandi.ac.in/"><img src="images/logo.png" alt="" height="50" /></a>-->
						</div>
						<div class="btn-group pull-right">

							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canada</a></li>
									<li><a href="">UK</a></li>
								</ul>
							</div>-->
							
							<!--<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Canadian Dollar</a></li>
									<li><a href="">Pound</a></li>
								</ul>
							</div>-->
						</div>
					</div>
					
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"> <!--header-bottom-->
		 <div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html">Home</a></li>
								<?php
								if($_SESSION['admin']==1)
									echo'<li><a href="filter.php">Filter</a></li>';
								else if(isset($_SESSION['login_id']))
									echo'<li><a href="form.php">Dashboard</a></li>';
								?>
								<li><a href="contact-us.html">Contact</a></li>
								<li><a href="contact-us.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
								<?php
						if(!isset($_SESSION['login_id']))
							
						echo '<li><a href="login.html"> <span class=\"glyphicon glyphicon-log-out\"></span> Log In/ Register</a></li>';?>
								<?php
												if(isset($_SESSION['login_id']))
													{
								echo"<li class=\"dropdown\"><a href=\"#\" class=\"inactive\">User<i class=\"fa fa-angle-down\"></i></a>
                                    <ul role=\"menu\" class=\"sub-menu\">
                                        <div class=\"mainmenu pull-right\">
							
											 <ul class=\"nav navbar-nav\">";
												
												// <!--<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>-->
												// <!--<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>-->
												// <!-- <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> My-Selections</a></li> -->
												
													$user_name= $_SESSION['user_name'];
													echo"<li><a href=\"\"><i class=\"fa fa-user\"></i> $user_name </a></li>";
													echo"<li><a href=\"logout.php\"> <span class=\"glyphicon glyphicon-log-out\"></span> Log Out</a></li>";
													}
								echo"</ul>
										</div>
                                    </ul>
                                </li> ";?>
						   						
													
												
											 	
											 
								
														
 								
							</ul>
						</div>
					</div>
						<div class="col-sm-3">
						
						</div>


				</div>
				</div>
			</div>
	</header> 
	
	<section id="slider"><!--slider-->
		<div class="container">
		<!--<h1><span>PH.D</span>-PROGRAM</h1>-->
									<!-- <h2>Free E-Commerce Template</h2> -->
									<!--<h2>Application for PH.D Program IN SHSS </h2>
									<a href="scee-ms-index.html"><button type="button" class="btn btn-default get">Apply now</button></a>-->
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>PH.D</span>-PROGRAM</h1>
									<!-- <h2>Free E-Commerce Template</h2> -->
									<h2>Application for PH.D Program IN SHSS </h2>
									<a href="#"><button type="button" class="btn btn-default get">Apply now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="images/2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>M.S</span>-PROGRAM</h1>
									<!-- <h2>Free E-Commerce Template</h2> -->
									<h2>Application for M.S Program IN SHSS </h2>
									<a href="scee-ms-index.html"><button type="button" class="btn btn-default get">Apply now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="images/2.jpg" class="girl img-responsive" alt="" />
									<!-- <img src="images/home/pricing.png"  class="pricing" alt="" /> -->
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>PH.D</span>-PROGRAM</h1>
									<!-- <h2>Free E-Commerce Template</h2> -->
									<h2>Application for Intern Program</h2>
									<a href="#"><button type="button" class="btn btn-default get">Apply now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="images/2.jpg" class="girl img-responsive" alt="" />
									<!--<img src="images/home/pricing.png" class="pricing" alt="" />-->
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 IIT MANDI ALL rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="#">Team Raftar</a></span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>