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

	<meta name="description" content="<?php echo $blog['data'][0]['post_description']; ?>">
	<meta name="keywords" content="<?php echo $blog['data'][0]['post_keywords']; ?>">
	<meta name="robot" content="index,follow">
	<meta name="language" content="indonesia">
	<meta name="author" content="Ichwanul Fadhli">
	<!-- End of meta tags -->


	<!-- Icon -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>'">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
	<!-- End of icon -->


	<!-- Title -->
	<title>
		<?php echo $blog['data'][0]['post_title']; ?> - Blog si WANUL
	</title>
	<!-- End of title -->


	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- End of fonts and icons -->


	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/material-kit.css'); ?>" rel="stylesheet" />
	<!-- End of CSS files -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-161399100-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-161399100-3');
	</script>
	<!-- End of Global site tag Google Analytics -->


	<!-- 
		####     #######   ################
		####       #####   ##############
		####        ####   ####
		####   ##    ###   ###########
		####   ###    ##   #########
		####   ####        ####
		####   #####       ####
		####   #######     ####
	-->
</head>

<body>
	<!-- Navigation panel -->
	<nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
		<div class="container">
			<a href="<?php echo site_url('Home'); ?>" class="nav-link" style="color: white;" data-toggle="tooltip" data-placement="right" title="Kembali" data-container="body">
				<i class="material-icons" style="font-size: 28px;">keyboard_backspace</i>
			</a>
		</div>
	</nav>
	<!-- End of navigation panel -->


	<!-- Content -->
	<!-- Landing content -->
	<div class="page-header header-filter" id="background" data-parallax="true" style="background-image: url(<?php echo $blog['data'][0]['post_cover']; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto mt-5">
					<div class="brand text-center">
						<img width="40%" style="margin-bottom: -3.5%;" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png'); ?>" alt="Logo Blog si WANUL">
						<h1 class="title"><i><?php echo $blog['data'][0]['post_title']; ?></i></h1>
						<h5><?php echo date("d F Y", strtotime($blog['data'][0]['post_date'])) . ', jam ' . date("H:i", strtotime($blog['data'][0]['post_date'])); ?></h5>
						<a href="javascript:void(0)" class="scroll-to" id="blog">
							<img class="scroll-down-img" src="<?php echo base_url('assets/img/scroll-down.gif'); ?>" alt="Scroll down">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of landing content -->


	<div class="main">
		<!-- Scroll to top button -->
		<button class="btn btn-primary btn-fab btn-round scroll-to" id="toTop">
			<i class="material-icons" style="font-size: 32px;">keyboard_arrow_up</i>
		</button>
		<!-- End of scroll to top button -->


		<!-- Blog -->
		<div class="container blog">
			<div class="section text-center">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto">
						<h2 class="text-center title"><?php echo $blog['data'][0]['post_title']; ?></h2>
						<div class="text-left description" style="font-size: 16px;">
							<?php echo $blog['data'][0]['post_content']; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of recent blog -->


	</div>
	<!-- End of content -->


	<!-- Footer -->
	<footer class="footer footer-default px-5">
		<div class="container px-5">
			<div class="float-left">
				<ul>
					<li>
						<a href="https://www.instagram.com/ichwa_nf/" target="_blank" data-toggle="tooltip" data-placement="top" title="Follow Instagram Saya" data-container="body">
							Instagram
						</a>
					</li>
					<li>
						<a href="https://github.com/ichwanulfadhli/" target="_blank" data-toggle="tooltip" data-placement="top" title="Temukan Saya di GitHub" data-container="body">
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
	<script src="<?php echo base_url('assets/js/material-kit.js'); ?>" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();

			// Sliders Init
			materialKit.initSliders();
		});

		// Function to scroll to each section on the page
		$(function() {
			$(".scroll-to").click(function() {
				var section = $(this).attr("id");

				if ($('.' + section).length != 0) {
					$("html, body").animate({
						scrollTop: $('.' + section).offset().top
					}, 500);
				}
			});
		});

		// On scroll window, will display "To Top Button"
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 535) {
				// jQuery fade in animation
				$("#toTop").fadeIn(350);
			} else if ($(this).scrollTop() <= 300) {
				// jQuery fade out animation
				$("#toTop").fadeOut(350);
			}
		});

		// Function scroll to top
		$("#toTop").click(function() {
			// Scrolling animation
			$("html, body").animate({
				scrollTop: 0
			}, 500);
		});
	</script>
	<!-- End of control center -->
</body>

</html>