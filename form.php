
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
								<li><a href="index.php">Home</a></li>
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
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						
					<div class="brands_products"><!--brands_products-->
							<h2>My Panel</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href=""> <span class="pull-right">(5)</span>My Added Course</a></li>
									<li><a href=""> <span class="pull-right"></span>Academic Details</a></li>
									<li><a href=""> <span class="pull-right"></span>Add More Course</a></li>
									<li><a href=""> <span class="pull-right"></span>Edit Form</a></li>
									<li><a href=""> <span class="pull-right"></span>Print Form</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->


						<h2>Course Description</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								



								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#signal">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Signal Processing & Communication Engineering (SCEE | MS)
										</a>
									</h4>
								</div>

								<div id="signal" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<input type="checkbox" name = "Signal_image_process" >Image Processing<br>
											<input type="checkbox" name = "Signal_speech_process" >Speech/Audio Processing<br> 
											<input type="checkbox" name = "Signal_wireless_comm" >wireless Communication<br>
											<input type="checkbox" name = "Signal_computer_vision">Computer Vision<br>
											
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#power">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Power Electronics & Drives
										</a>
									</h4>
								</div>
								<div id="power" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<input type="checkbox" name = "Power_control">Control of Drives<br>
											<input type="checkbox" name = "Power_electronics">Power Electronics<br>
											<input type="checkbox" name = "Power_photovolt">Photovoltaics<br>
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#control">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Control System
										</a>
									</h4>
								</div>
								<div id="control" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<input type="checkbox" name = "Control_sensing">SensingTechniques & Senor Networks<br>
											<input type="checkbox" name = "Control_fault_control">Fault Tolerant Control<br>
											<input type="checkbox" name = "Control_fault">Fault Diagnosis<br>
											<input type="checkbox" name = "Control_automation">Building Automation<br>
											<input type="checkbox" name = "Control_control">Control Theory<br>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#vlsi">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											VLSI and Embeddded System
										</a>
									</h4>
								</div>
								<div id="vlsi" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<input type="checkbox" name = "Vlsi_analog">Analog and Mixed VLSI Design<br>
											<input type="checkbox" name = "Vlsi_semi">Semi Conductor Device Modeling<br>
											<input type="checkbox" name = "Vlsi_Nano">Nano Electronics and Fabrication<br>
											<input type="checkbox" name = "Vlsi_bio">Biomedical Engineering<br>
											<input type="checkbox" name = "Vlsi_embed">Embedded System<br>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#computer">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Computer Science and Engineering
										</a>
									</h4>
								</div>
								<div id="computer" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<input type="checkbox" name = "Computer_image">Image Processing<br>
											<input type="checkbox" name = "Computer_speech">Speech/Audio Processing<br>
											<input type="checkbox" name = "Computer_theory">Theoretical Computer Science<br>
											<input type="checkbox" name = "Computer_netowrk">Computer Networks<br>
											<input type="checkbox" name = "Computer_embed">Embedded System<br>
											<input type="checkbox" name = "Computer_info">Information Theory and Coding<br>
											<input type="checkbox" name = "Computer_social">Social Netowrk Analysis<br>
											<input type="checkbox" name = "Computer_cognitive">Cognitive Science & Human Computer Interaction<br>
											<input type="checkbox" name = "Computer_wireless">Wireless Communication<br>
											<input type="checkbox" name = "Computer_biometrics">Biometrics<br>
											<input type="checkbox" name = "Computer_machine">Machine Learning<br>
											<<input type="checkbox" name = "Computer_vision">Computer Vision<br>
										</ul>
									</div>
								</div>
							</div>
								
						</div><!--/category-productsr-->
					
						
						
						
						
						<!--<div class="shipping text-center">--><!--shipping-->
							<!--<img src="images/home/shipping.jpg" alt="" />
						</div>--><!--/shipping-->
						
					</div>
				</div>
				<div>
				Here wil be our stuff !
				</div>
				<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
				</div>
			</div>
		</div>
	</section>
	
	
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