<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<!-- End of meta tags -->


	<!-- Icon -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>'">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
	<!-- End of icon -->


	<!-- Title -->
	<title>
		Blog si WANUL - Home
	</title>
	<!-- End of title -->


	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- End of fonts and icons -->


	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/material-kit.css'); ?>" rel="stylesheet" />
	<!-- End of CSS files -->

	<!-- 
		####     #######   ################
		####	   #####   ##############
		####        ####   ####
		####   ##    ###   ###########
		####   ###	  ##   #########
		####   ####		   ####
		####   #####       ####
		####   #######     ####
	-->
</head>

<body>
	<!-- Navigation panel -->
	<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
		<div class="container">
			<div class="navbar-translate">
				<!-- <a class="navbar-brand" href="<?php echo site_url(); ?>">
					Material Kit
				</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="#" class="nav-link">
							<i class="material-icons">apps</i> Template
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of navigation panel -->


	<!-- Content -->
	<div class="page-header header-filter" id="background" data-parallax="true">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<div class="brand text-center">
						<!-- <h1>Your title here</h1> -->
						<img width="80%" class="mylogo" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png'); ?>">
						<h3 class="title text-center">- Welcome to My Blog! -</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main main-raised">
		<div class="container">
			<div class="section text-center">
				<h2 class="title">Your main section here</h2>
			</div>
		</div>
	</div>
	<!-- End of content -->


	<!-- Footer -->
	<footer class="footer footer-default">
		<div class="container">
			<div class="float-left">
				<ul>
					<li>
						<a href="https://www.instagram.com/ichwa_nf/">
							Instagram
						</a>
					</li>
					<li>
						<a href="https://github.com/ichwanulfadhli/">
							Github
						</a>
					</li>
				</ul>
			</div>
			<div class="copyright float-right">
				&copy;
				<script>
					document.write(new Date().getFullYear())
				</script>
				Ichwanul Fadhli, made with
				<a href="https://www.creative-tim.com/product/material-kit" target="blank">
					Material Kit
				</a>.
			</div>
		</div>
	</footer>
	<!-- End of footer -->


	<!--   Core JS Files   -->
	<script src="<?php echo base_url('assets/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/moment.min.js'); ?>"></script>
	<!-- End of core JS files -->

	<!-- Plugin for the Datepicker -->
	<script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js'); ?>" type="text/javascript"></script>
	<!-- End of plugin for the datepicker -->


	<!-- Plugin for the sliders -->
	<script src="<?php echo base_url('assets/js/plugins/nouislider.min.js'); ?>" type="text/javascript"></script>
	<!-- End of plugin for the sliders -->


	<!-- Control center -->
	<script src="<?php echo base_url('assets/js/material-kit.js?v=2.0.7'); ?>" type="text/javascript"></script>
	<script>
		// Function to load random image
		function randomBackground() {
			// List of images
			var images = [
				'background-1.jpg',
				'background-2.jpg',
				'background-3.jpg',
				'background-4.jpg',
				'background-5.jpg'
			];

			// Full path
			var url = "<?php echo base_url('assets/img/'); ?>";
			// The image result
			var output = images[Math.floor(Math.random() * images.length)];

			// Returning output
			return url + output;

		}

		// Displaying random background image on page load
		window.onload = document.getElementById("background").style.backgroundImage = "url(" + randomBackground(1, 6) + ")";
	</script>
	<script>
		$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();

			// Sliders Init
			materialKit.initSliders();
		});


		function scrollToDownload() {
			if ($('.section-download').length != 0) {
				$("html, body").animate({
					scrollTop: $('.section-download').offset().top
				}, 1000);
			}
		}
	</script>
	<!-- End of control center -->
</body>

</html>