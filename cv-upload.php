<!DOCTYPE html>

<html lang="en">

<head>



	<!-- Basic Page Needs

		================================================== -->

		<meta charset="utf-8">

		<title>CV Register</title>

		<meta name="description" content="">	

		<meta name="author" content="">



	<!-- Mobile Specific Metas

		================================================== -->

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



	<!-- Favicons

		================================================== -->

		<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />

		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">

		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">

		<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

		

	<!-- CSS

		================================================== -->

		

		<!-- Bootstrap -->

		<link rel="stylesheet" href="css/bootstrap.min.css">

		<!-- Template styles-->

		<link rel="stylesheet" href="css/style.css">

		<!-- Responsive styles-->

		<link rel="stylesheet" href="css/responsive.css">

		<!-- FontAwesome -->

		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Animation -->

		<link rel="stylesheet" href="css/animate.css">

		<!-- Prettyphoto -->

		<link rel="stylesheet" href="css/prettyPhoto.css">

		<!-- Owl Carousel -->

		<link rel="stylesheet" href="css/owl.carousel.css">

		<link rel="stylesheet" href="css/owl.theme.css">

		<!-- Flexslider -->

		<link rel="stylesheet" href="css/flexslider.css">

		<!-- Flexslider -->

		<link rel="stylesheet" href="css/cd-hero.css">

		<!-- Style Swicther -->

		<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">



		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->

    <!--[if lt IE 9]>

      <script src="js/html5shiv.js"></script>

      <script src="js/respond.min.js"></script>

  <![endif]-->



</head>



<body>
	<!-- Modal Import -->
	<?php include('modal.php'); ?>
	<div class="body-inner">


		<!-- Header start -->
		<?php include('header.php'); ?>
		<!--/ Header end -->



		<div id="banner-area">

			<img src="images/banner/banner1.jpg" alt ="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2>Upload a CV</h2>

					<ul class="breadcrumb">

						<li><a href="index.html"> Home</a></li>

						<li>Upload a CV</li>

						

					</ul>

				</div>

			</div><!-- Subpage title end -->

		</div><!-- Banner area end -->



		<!-- Main container start -->



		<section id="main-container">

			<div class="container">



				<!-- Company Profile -->



				<div class="row">

					<div class="col-md-12 heading text-center">

						<h2 class="title2">Upload a CV

							<span class="title-desc">  Quality Recruitment Solutions</span>

						</h2>

					</div>

				</div><!-- Title row end -->

				

				<div class="row about-wrapper-bottom">

					

					<div class="col-md-6 ts-padding about-message">

						

						<h3> CV Registration </h3>

						<br>

						<p>Fill out the form below. Register your details together with your CV to access our candidate community pages where you can store search profiles, see the latest vacancies since you last logged in, create job alerts and more.</p>

						

						

					</div><!--/ About message end -->

					

					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-4.jpg) 50% 50% / cover no-repeat;">

					</div><!--/ About image end -->

					

				</div><!--/ Content row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">
						<form id="cvUploadForm">
							<div class="form-group">
								<label for="fname">Full Name</label>
								<input type="text" class="form-control" id="fname" name="fname" placeholder="Peter John">
								<h5 id="namecheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="johnpeter@gmail.com" >
								<h5 id="emailcheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="phoneNumber">Phone Number</label>
								<input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="+44*********" >
								<h5 id="numbercheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="address">Address / Post Code (Where Staff)</label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Address / Post Code" >
								<h5 id="addresscheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="location">Location <small>(optional)</small></label>
								<input type="text" class="form-control" id="location" placeholder="e.g. London">
							</div>
							<hr>
							<div class="form-group">
								<label for="jobtype">Select Your Relevant Job Category</label>
								<select class="form-control" id="jobtype">
									<option selected>Other</option>
									<option>Trade & Construction</option>
									<option>Site Labourers & Cleaners</option>
									<option>Multi-Skilled Builders</option>
									<option>Forklift Operatives</option>
									<option>Warehouse</option>
									<option>Drivers</option>
									<option>Pickers & Packers</option>
									<option>Electricians & Electricians Mate</option>
									<option>Plumbing</option>
									<option>Electrical</option>
									<option>Cleaning</option>
									<option>Property Maintenance</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label for="desc">Are you happy to work on temporary basis?</label>
								<br>
								<input type="radio" id="yes" name="choice" value="yes"  checked>
								<label for="yes">Yes</label><br>
								<input type="radio" id="no" name="choice" value="no">
								<label for="no">No</label><br>
							</div>
							<hr>
							<div class="form-group">
								<label for="availability">Availability (Are you immediately available to start work or need notice period)</label>
								<input type="text" class="form-control" id="availability" name="availability">
								<h5 id="availabilitycheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<label for="salary">Desired Salary / Wages (Per Hour Rate)</label>
								<input type="text" class="form-control" id="salary" name="salary">
								<h5 id="salarycheck"></h5>
							</div>
							<hr>
							<div class="form-group">
								<div class="row">
									<div class="col-md-6">
										<label for="pictureUpload">Upload Your Picture</label>
										<input type="file" id="pictureUpload" name="pictureUpload">
										<small class="form-text text-muted">Maximum file size: 128 MB.</small>
									</div>
									<div class="col-md-6">
										<label for="cvUpload">Upload Your CV</label>
										<input type="file" id="cvUpload" name="cvUpload">
										<small class="form-text text-muted">Maximum file size: 128 MB.</small>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Submit</button>
						</form>

					</div><!--/ About image end -->

				</div><!--/ Content row end -->



				



				<!-- Company Profile -->



			</div><!--/ 1st container end -->



			

			<div class="gap-60"></div>





			<!-- Counter Strat -->

			<div class="ts_counter_bg parallax parallax2">

				<div class="parallax-overlay"></div>

				<div class="container">

					<div class="row wow fadeInLeft text-center">

						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-user"></i></span>

							<div class="facts-num">

								<span class="counter">1200</span>

							</div>

							<h3>Clients</h3> 

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-institution"></i></span>

							<div class="facts-num">

								<span class="counter">1277</span>

							</div>

							<h3>Item Sold</h3> 

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-suitcase"></i></span>

							<div class="facts-num">

								<span class="counter">869</span>

							</div>

							<h3>Projects</h3> 

						</div>



						<div class="facts col-md-3 col-sm-6">

							<span class="facts-icon"><i class="fa fa-trophy"></i></span>

							<div class="facts-num">

								<span class="counter">76</span>

							</div>

							<h3>Awwards</h3> 

						</div>



						



					</div><!--/ row end -->

				</div><!--/ Container end -->

			</div><!--/ Counter end -->



			



			

		</section><!--/ Main container end -->

		





		

		<!-- Footer start -->

		<footer id="footer" class="footer">

			<div class="container">

				<div class="row">

					<div class="col-md-4 col-sm-12 footer-widget">

						

						<a href="index.html">

							<img class="img-responsive" src="images/logo.png" alt="logo">

						</a>  <br>  

						<p>  Temping Agency is a privately owned recruitment agency based in Central London, W1 area andÂ Established as part of the Workers Direct Group in 2010, TA has delivered excellent recruitment and employment services to clients in a variety of industries.<br> <br>Our services include recruitment, selection, placement, contract and temporary workers and our consultants are highly trained and experienced to deal with each step of the process. </p>

						

						<!-- 1st Latest Post end -->



						<!-- 2nd Latest Post end -->



						<!-- 3rd Latest Post end -->

						

					</div><!--/ End Recent Posts-->

					



					<div class="col-md-4 col-sm-12 footer-widget">

						<h3 class="widget-title">Flickr Photos</h3>



						<div class="img-gallery">

							<div class="img-container">

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">

									<img src="images/gallery/1.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">

									<img src="images/gallery/2.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">

									<img src="images/gallery/3.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">

									<img src="images/gallery/4.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">

									<img src="images/gallery/5.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">

									<img src="images/gallery/6.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">

									<img src="images/gallery/7.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">

									<img src="images/gallery/8.jpg" alt="">

								</a>

								<a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">

									<img src="images/gallery/9.jpg" alt="">

								</a>

							</div>

						</div>

					</div><!--/ end flickr -->



					<div class="col-md-3 col-sm-12 footer-widget footer-about-us">

						<h3 class="widget-title">About Craft</h3>

						

						<h4>Address</h4>

						<p>344-348 High road, Ilford IG1 1QP  </p>

						

						

						<h4>Email:</h4>

						<p>info@temping-agency.com</p>

						

						

						<h4>Phone No.</h4>

						<p>+44 (0) 2030 869080</p>

						

						

						<form action="#" role="form">

							<div class="input-group subscribe">

								<input type="email" class="form-control" placeholder="Email Address" ="">

								<span class="input-group-addon">

									<button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>

								</span>                        

							</div>

						</form>

					</div><!--/ end about us -->



				</div><!-- Row end -->

			</div><!-- Container end -->

		</footer><!-- Footer end -->

		



		<!-- Copyright start -->

		<section id="copyright" class="copyright angle">

			<div class="container">

				<div class="row">

					<div class="col-md-12 text-center">

						<ul class="footer-social unstyled">

							<li>

								<a title="Twitter" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>

								</a>

								<a title="Facebook" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>

								</a>

								<a title="Google+" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>

								</a>

								<a title="linkedin" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>

								</a>

								<a title="Pinterest" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>

								</a>

								<a title="Skype" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>

								</a>

								<a title="Dribble" href="#">

									<span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>

								</a>

							</li>

						</ul>

					</div>

				</div><!--/ Row end -->

				<div class="row">

					<div class="col-md-12 text-center">

						<div class="copyright-info">

							&copy; Copyright 2019 Temping Agency <span>Design & Developed by <a href="https://mstdevelopers.com">MST Developers</a></span>

						</div>

					</div>

				</div><!--/ Row end -->

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">

					<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>

				</div>

			</div><!--/ Container end -->

		</section><!--/ Copyright end -->



	<!-- Javascript Files

		================================================== -->



		<!-- initialize jQuery Library -->

		<script type="text/javascript" src="js/jquery.js"></script>

		<!-- Bootstrap jQuery -->

		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Style Switcher -->

		<script type="text/javascript" src="js/style-switcher.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="js/owl.carousel.js"></script>

		<!-- PrettyPhoto -->

		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

		<!-- Bxslider -->

		<script type="text/javascript" src="js/jquery.flexslider.js"></script>

		<!-- Owl Carousel -->

		<script type="text/javascript" src="js/cd-hero.js"></script>

		<!-- Isotope -->

		<script type="text/javascript" src="js/isotope.js"></script>

		<script type="text/javascript" src="js/ini.isotope.js"></script>

		<!-- Wow Animation -->

		<script type="text/javascript" src="js/wow.min.js"></script>

		<!-- SmoothScroll -->

		<script type="text/javascript" src="js/smoothscroll.js"></script>

		<!-- Eeasing -->

		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

		<!-- Counter -->

		<script type="text/javascript" src="js/jquery.counterup.min.js"></script>

		<!-- Waypoints -->

		<script type="text/javascript" src="js/waypoints.min.js"></script>

		<!-- Template custom -->

		<script type="text/javascript" src="js/custom.js"></script>

		<!-- jQuery Validation -->

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>

	</div><!-- Body inner end -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('#cvUploadForm').validate({
				rules: {
					fname: {
						required: true,
					},
					email: {
						required: true,
						email: true
					},
					phoneNumber: {
						required: true,
						minlength: 5,
						maxlength: 10
					},
					address: {
						required: true,
					},
					availability: {
						required: true,
					},
					salary: {
						required: true,
					},
					pictureUpload: {
						required: true,
					},
					cvUpload: {
						required: true,
					},
				}
			});
		});
	</script>
</body>

</html>