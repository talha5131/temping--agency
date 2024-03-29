<!DOCTYPE html>

<html lang="en">

<head>



	<!-- Basic Page Needs

		================================================== -->

	<meta charset="utf-8">

	<title>Post A Job</title>

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

	<!-- Font Awesome 4 -->

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Minimal Rich Text Editor With CSS -->

	<link rel="stylesheet" href="css/richtext.min.css">


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

			<img src="images/banner/banner1.jpg" alt="" />

			<div class="parallax-overlay"></div>

			<!-- Subpage title start -->

			<div class="banner-title-content">

				<div class="text-center">

					<h2>Post A Job</h2>

					<ul class="breadcrumb">

						<li><a href="index.html"> Home</a></li>

						<li>Post A Job</li>



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

						<h2 class="title2">Post A Job

							<span class="title-desc"> Quality Recruitment Solutions</span>

						</h2>

					</div>

				</div><!-- Title row end -->



				<div class="row about-wrapper-bottom">



					<div class="col-md-6 ts-padding about-message">



						<h3> Order A Staff </h3>

						<br>

						<p>If you Need To Fill any Temporary or Permanent Job For Your Business / Organisation, Filled up the Form below and send to us for a Quick Response.</p>
						<p>Temping Agency is always ready to help their customers and users to fulfil their Job/Employment needs!</p>





					</div>
					<!--/ About message end -->



					<div class="col-md-6 ts-padding about-img" style="height:374px;background:url(images/pages/about-4.jpg) 50% 50% / cover no-repeat;">

					</div>
					<!--/ About image end -->



				</div>
				<!--/ Content row end -->



				<div class="row about-wrapper-top">

					<div class="col-md-12 ts-padding about-message">
						<form id="postAJob">
							<div class="form-group">
								<label for="">Have an account?</label>
								<p>
									If you don't have an account you can create one below by entering your email address/username. Your account details will be confirmed via email.
								</p>
								<button class="btn btn-success btn-lg">Sign In</button>
							</div>
							<hr>
							<div class="form-group">
								<label for="email">Your Email Address</label>
								<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="you@yourdomain.com">
							</div>
							<hr>
							<div class="form-group">
								<label for="jobTitle">Job Title</label>
								<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
							</div>
							<hr>
							<div class="form-group">
								<label for="location">Location <small>(optional)</small></label>
								<input type="text" class="form-control" id="location" placeholder="e.g. London">
							</div>
							<hr>
							<div class="form-group">
								<label for="jobtype">Job Type</label>
								<select class="form-control" id="jobtype">
									<option>Freelance</option>
									<option selected>Full Time</option>
									<option>Internship</option>
									<option>Part Time</option>
									<option>Temporary</option>
								</select>
							</div>
							<hr>
							<div class="form-group">
								<label for="desc">Description</label>
								<textarea class="form-control content" rows="7" id="desc" name="desc"></textarea>

							</div>
							<hr>
							<div class="form-group">
								<label for="appEmail">Application e-mail/URL</label>
								<input type="text" class="form-control" id="appEmail" name="appEmail" placeholder="Enter an e-mail adress or website URL">
							</div>
							<hr>

							<h2>Company Details</h2>

							<div class="form-group">
								<label for="compName">Company Name</label>
								<input type="text" class="form-control" id="compName" name="compName" placeholder="Enter the name of the company">
							</div>
							<div class="form-group">
								<label for="website">Website <small>(optional)</small></label>
								<input type="text" class="form-control" id="website" placeholder="http://">
							</div>
							<div class="form-group">
								<label for="tagline">Tagline <small>(optional)</small></label>
								<input type="text" class="form-control" id="tagline" placeholder="Briefly describe your company">
							</div>
							<div class="form-group">
								<label for="video">Video <small>(optional)</small></label>
								<input type="text" class="form-control" id="video" placeholder="A link to a video about your company">
							</div>
							<div class="form-group">
								<label for="twitterUsername">Twitter Username <small>(optional)</small></label>
								<input type="text" class="form-control" id="twitterUsername" placeholder="@yourcompany">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-2">
										<label for="logo">Logo <small>(optional)</small></label>
									</div>
									<div class="col-md-10">
										<input type="file" id="logo">
										<small class="form-text text-muted">Maximum file size: 128 MB.</small>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-primary">Preview</button>
							<button type="submit" class="btn btn-primary">Save Draft</button>
						</form>

					</div>
					<!--/ About image end -->

				</div>
				<!--/ Content row end -->







				<!-- Company Profile -->



			</div>
			<!--/ 1st container end -->





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







					</div>
					<!--/ row end -->

				</div>
				<!--/ Container end -->

			</div>
			<!--/ Counter end -->









		</section>
		<!--/ Main container end -->


		<!-- Footer start -->
		<?php include('footer.php'); ?>
		<!--/ Footer end -->



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

		<!-- minimal Rich Text Editor With jQuery -->

		<script type="text/javascript" src="js/jquery.richtext.min.js"></script>

	</div><!-- Body inner end -->
	<script type="text/javascript">
		$(document).ready(function() {
			$('#postAJob').validate({
				rules: {
					email: {
						required: true,
						email: true
					},
					jobTitle: {
						required: true,
					},
					desc: {
						required: true,
						minlength: 200,
					},
					appEmail: {
						required: true,
						email: true,
					},
					compName: {
						required: true,
					}
				}
			});
		});

		$('.content').richText();
	</script>
</body>

</html>