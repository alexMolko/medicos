<!DOCTYPE html>
<html lang="en">
	<head>
	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Dentist Clinic - Bootstrap 3 Template</title>
		
		<!-- Bootstrap -->
		<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
		
		<!-- Google Web Fonts -->
		<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,700,600,800,900" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=BenchNine:400,300,700" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
		
		<!-- Template CSS Files  -->
		<link href="<?php echo base_url();?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/camera/css/camera.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/datepicker/css/datepicker.css" rel="stylesheet">
		<link href="<?php echo base_url();?>js/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">
		<link href="<?php echo base_url();?>css/responsive.css" rel="stylesheet">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/fav-144.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/fav-114.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/fav-72.png">
		<link rel="apple-touch-icon-precomposed" href="images/fav-57.png">
		<link rel="shortcut icon" href="images/fav.png">
		
	</head>
	<body>
	<!-- Wrapper Starts -->
		<div id="wrapper" class="container">
		<!-- Header Starts -->
			<header class="main-header">
			<!-- Top Bar Starts -->
				<div class="top-bar hidden-xs">
					<div class="container">
						<ul class="list-unstyled list-inline clearfix">
							<li class="pull-left">Welcome To Dentist Portfolio Template</li>
							<li class="pull-right">
								E - mail : <a href="mailto:info@dentistdomain.com">info@dentistdomain.com</a>
							</li>
						</ul>
					</div>
				</div>
			<!-- Top Bar Starts -->
			<!-- Navbar Starts -->
				<nav id="nav" class="navbar navbar-default navbar-static-top" role="navigation">
				<!-- Container Starts -->
					<div class="container">
					<!-- Navbar Header Starts -->
						<div class="navbar-header">
						<!-- Collapse Button Starts -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						<!-- Collapse Button Ends -->
						<!-- Logo Starts -->
							<a href="index.html" class="navbar-brand">
								<img class="img-responsive" src="images/logo.png" alt="Logo">
							</a>
						<!-- Logo Ends -->
						</div>
					<!-- Navbar Header Ends -->
					<!-- Navbar Collapse Starts -->
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="appointment.html">Appointment</a></li>
								<li><a href="services.html">Services</a></li>
								<li class="dropdown active">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Gallery
									</a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="gallery.html">Gallery 1</a></li>
										<li class="active"><a href="gallery-3col.html">Gallery 2</a></li>
										<li><a href="gallery-4col.html">Gallery 3</a></li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Blog
									</a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="blog.html">Blog Page</a></li>
										<li><a href="blog-single.html">Blog Single Page</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact Us</a></li>
							</ul>
						</div>
					<!-- Navbar Collapse Ends -->
					</div>
				<!-- Container Ends -->
				</nav>
			<!-- Navbar Ends -->
			</header>
		<!-- Header Ends -->
		<!-- Main Container Starts -->
			<div class="main-container">
				<div class="container">
				<!-- Heading Starts -->
					<h3 class="main-heading-1">Gallery 2</h3>
				<!-- Heading Ends -->
				<!-- Gallery Filters Starts -->
					<ul id="gallery-filter" class="list-unstyled list-inline">
						<li>
							<a href="#" class="active" data-group="all">
								Show All
							</a>
						</li>
						<li><a href="#" data-group="category1">Category 1</a></li>
						<li><a href="#" data-group="category2">Category 2</a></li>
						<li><a href="#" data-group="category3">Category 3</a></li>
					</ul>
				<!-- Gallery Filters Ends -->
				<!-- Gallery Starts -->
					<ul id="gallery-grid" class="row col3-text text-center-xs">
					<!-- Gallery Item #1 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category1"]'>
							<a href="<?php echo base_url();?>images/gallery/gallery-img-1.jpg" class="gallery-zoom">
								<img src="<?php echo base_url();?>images/gallery/gallery-img-1.jpg" alt="Gallery Image1" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #1</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #1 Ends -->
					<!-- Gallery Item #2 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category2"]'>
							<a href="<?php echo base_url();?>images/gallery/gallery-img-2.jpg" class="gallery-zoom">
								<img src="<?php echo base_url();?>images/gallery/gallery-img-2.jpg" alt="Gallery Image2" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #2</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #2 Ends -->
					<!-- Gallery Item #3 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category3"]'>
							<a href="<?php echo base_url();?>images/gallery/gallery-img-3.jpg" class="gallery-zoom">
								<img src="<?php echo base_url();?>images/gallery/gallery-img-3.jpg" alt="Gallery Image3" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #3</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #3 Ends -->
					<!-- Gallery Item #4 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category2"]'>
							<a href="<?php echo base_url();?>images/gallery/gallery-img-4.jpg" class="gallery-zoom">
								<img src="<?php echo base_url();?>images/gallery/gallery-img-4.jpg" alt="Gallery Image4" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #4</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #4 Ends -->
					<!-- Gallery Item #5 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category3"]'>
							<a href="images/gallery/gallery-img-5.jpg" class="gallery-zoom">
								<img src="images/gallery/gallery-img-5.jpg" alt="Gallery Image5" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #5</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #5 Ends -->
					<!-- Gallery Item #6 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category1"]'>
							<a href="images/gallery/gallery-img-6.jpg" class="gallery-zoom">
								<img src="images/gallery/gallery-img-6.jpg" alt="Gallery Image6" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #6</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #6 Ends -->			
					<!-- Gallery Item #7 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category3"]'>
							<a href="images/gallery/gallery-img-7.jpg" class="gallery-zoom">
								<img src="images/gallery/gallery-img-7.jpg" alt="Gallery Image7" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #7</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #7 Ends -->
					<!-- Gallery Item #8 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category1"]'>
							<a href="images/gallery/gallery-img-8.jpg" class="gallery-zoom">
								<img src="images/gallery/gallery-img-8.jpg" alt="Gallery Image8" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #8</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #8 Ends -->
					<!-- Gallery Item #9 Starts -->
						<li class="col-md-4 col-sm-6 col-xs-12 gallery-grid" data-groups='["all", "category2"]'>
							<a href="images/gallery/gallery-img-9.jpg" class="gallery-zoom">
								<img src="images/gallery/gallery-img-9.jpg" alt="Gallery Image9" class="img-responsive thumbnail">
							</a>
							<h5 class="main-heading-2">Heading #9</h5>
							<p>
								Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis, in luctus risus. Donec et placerat orci. Praesent pulvinar... 
							</p>
						</li>
					<!-- Gallery Item #9 Ends -->
					</ul>
				<!-- Gallery Starts -->
					<br><hr>
				<!-- Pagination Starts -->
					<ul class="pagination">
						<li><a href="#">Previous</a></li>
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">Next</a></li>
					</ul>
				<!-- Pagination Ends -->
				</div>
			</div>
		<!-- Main Container Ends -->
		<!-- Footer Starts -->
			<footer class="main-footer">
			<!-- Footer Area Starts -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
						<!-- Services List Starts -->
							<div class="col-md-2 col-sm-4 col-xs-12">
								<h4>Services</h4>
								<ul class="list-unstyled footer-links-style-1">
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Lorem Ipsum
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Simply Dummy Text
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>The Printing
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Typesetting Industry
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Lorem Ipsum Has Been
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Industry Standard
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Unknown Printer
										</a>
									</li>
								</ul>
							</div>
						<!-- Services List Ends -->
						<!-- Doctors List Starts -->
							<div class="col-md-2 col-sm-4 col-xs-12">
								<h4>Doctors</h4>
								<ul class="list-unstyled footer-links-style-1">
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>The Printing
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Typesetting Industry
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Lorem Ipsum Has Been
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Industry Standard
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Unknown Printer
										</a>
									</li>
								</ul>
							</div>
						<!-- Doctors List Ends -->
						<!-- Clinic List Starts -->
							<div class="col-md-2 col-sm-4 col-xs-12">
								<h4>Clinic</h4>
								<ul class="list-unstyled footer-links-style-1">
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Simply Dummy Text
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>The Printing
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Typesetting Industry
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Lorem Ipsum Has Been
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Industry Standard
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-angle-double-right"></i>Unknown Printer
										</a>
									</li>
								</ul>
							</div>
						<!-- Clinic List Ends -->
						<!-- Dentist clinic Info Starts -->
							<div class="col-md-5 col-xs-12 col-md-offset-1">
								<h2 class="footer-main-head">Dentist Clinic</h2>
								<ul class="list-unstyled footer-links-style-2">
									<li>
										<i class="fa fa-map-marker"></i>
										#441 Red Hills Colony, Road No. 15, Banjara Hills, Hyd.
									</li>
									<li>
										<i class="fa fa-mobile"></i>
										+91 888 954 9999, 011 - 1122 3377
									</li>
									<li>
										<i class="fa fa-envelope"></i>
										<a href="mailto:info@demowebsite.info">info@demowebsite.info</a>, <a href="mailto:support@demowebsite.info">support@demowebsite.info</a>
									</li>
								</ul>
								<ul class="list-unstyled list-inline footer-sm-links">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						<!-- Dentist clinic Info Ends -->
						</div>
					</div>
				</div>
			<!-- Footer Area Ends -->
			<!-- Copyright Starts -->
				<div class="copyright">
					<div class="container text-center">
						&copy; 2015 All Rights Reserved By <strong>Dentist Clinic</strong>. Designed By <a href="http://sainathchillapuram.com">Sainath Chillapuram</a>
					</div>
				</div>
			<!-- Copyright Ends -->
			</footer>
		<!-- Footer Ends -->
		</div>
	<!-- Wrapper Ends -->	
	<!-- Template JS Files -->
	<script src="<?php echo base_url();?>js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery-migrate-1.2.1.min.js"></script>	
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/camera/js/jquery.mobile.customized.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/camera/js/jquery.easing.1.3.js"></script>
	<script src="<?php echo base_url();?>js/plugins/camera/js/camera.min.js"></script>	
	<script src="<?php echo base_url();?>js/plugins/datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url();?>js/plugins/shuffle/jquery.shuffle.modernizr.min.js"></script>
	<script src="<?php echo base_url();?>js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>	
	<script src="<?php echo base_url();?>js/custom2.js"></script>	
	</body>
</html>