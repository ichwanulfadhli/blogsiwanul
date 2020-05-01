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

	<meta name="description" content="<?php echo $description; ?>">
	<meta name="keywords" content="<?php echo $keywords; ?>">
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
		Blog si WANUL | Home
	</title>
	<!-- End of title -->


	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- End of fonts and icons -->


	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/material-kit.css'); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
			<div class="navbar-translate">
				<button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="sr-only">Toggle navigation</span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="javascript:;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="material-icons">bookmarks</i> Blog
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item scroll-to" id="recentBlog" href="#recentBlog">Blog Terbaru</a>
							<a class="dropdown-item" href="<?php echo site_url('Blog'); ?>">Kumpulan Blog</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="#aboutMe" class="nav-link scroll-to" id="aboutMe">
							<i class="material-icons">person</i> Tentang Saya
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- End of navigation panel -->


	<!-- Content -->
	<!-- Landing content -->
	<div class="page-header header-filter" id="background" data-parallax="true">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto">
					<div class="brand text-center">
						<img width="80%" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png'); ?>" alt="Logo Blog si WANUL">
						<h3 class="title text-center">- Welcome to My Blog -</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of landing content -->


	<div class="main main-raised">
		<!-- Scroll to top button -->
		<button class="btn btn-primary btn-fab btn-round scroll-to" id="toTop">
			<i class="material-icons" style="font-size: 32px;">keyboard_arrow_up</i>
		</button>
		<!-- End of scroll to top button -->


		<!-- Recent blog -->
		<div class="container recentBlog">
			<div class="section text-center">
				<h2 class="title">Blog Terbaru</h2>
				<div class="row justify-content-md-center">
					<?php
					if($recent_blog['data'] === null){
						?>
						<h3 class="px-5"><i>Belum ada konten, stay tuned guys ; )</i></h3>
					<?php
					}
					else{
						foreach($recent_blog['data'] as $data){
						?>
						<div class="col-md-7">
							<div class="card">
								<img class="card-img-top" src="<?php echo $data['post_cover']; ?>" alt="Blog cover">
								<div class="card-body text-left">
									<h4 class="card-title"><?php echo $data['post_title']; ?></h4>
									<p class="card-text">
										<?php echo $data['post_description']; ?>
									</p>
									<a href="<?php echo site_url('Blog/view/' . date("Y", strtotime($data['post_date'])) . '/' . date("m", strtotime($data['post_date'])) . '/' . date("d", strtotime($data['post_date']))); ?>" class="card-link">Baca lebih lanjut...</a>
								</div>
								<div class="card-footer text-muted">
									<?php echo date("d F Y", strtotime($data['post_date'])) . ', jam ' . date("H:i", strtotime($data['post_date'])); ?>
								</div>
							</div>
						</div>
					<?php
						}
					}
					?>
				</div>
			</div>
		</div>
		<!-- End of recent blog -->
		

		<!-- About me -->
		<div class="container aboutMe">
			<div class="section text-center">
				<h2 class="title">Tentang Saya</h2>
				<div class="media px-md-3 d-block d-md-flex mt-3">
					<img class="d-flex mb-3 mx-auto z-depth-1 img-raised rounded img-fluid my-pic" src="<?php echo base_url('assets/img/faces/me.jpg') ?>" alt="Ichwanul Fadhli">
					<div class="media-body text-center text-md-left ml-md-3 ml-0">
						<h3 class="mt-0 font-weight-bold px-3">Ichwanul Fadhli</h3>
						<h4 class="text-left description px-3">
							Ichwanul Fadhli alias "Wanul" adalah seorang pria (<script>
								document.write(new Date().getFullYear() - 1999 + " tahun");
							</script>) asal Bogor yang hobi mendengarkan musik, dan melakukan <i>coding</i>. Dia dulu berkeinginan untuk menjadi seorang <i>Game Developer</i>,
							namun hanya saja mimpinya tidak kesampaian. Sejak saat itu dia memutuskan untuk menjadi seorang <i>Programmer</i>. Dia belajar dan terus belajar supaya
							dia bisa menggapai cita-citanya. Saat ini dia sedang berkuliah di STIKOM Binaniaga Bogor dengan jurusan Teknik Informatika dan juga dia sedang ada di
							tingkat 6 (Semester 6).
						</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- End of about me -->


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
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
		// Function to load random image
		function randomBackground() {
			// List of images
			var images = [
				'background-1.jpg',
				'background-2.jpg',
				'background-3.jpg',
				'background-4.jpg',
				'background-5.jpg',
				'background-6.jpg',
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
					}, 500, 'easeInOutQuint');
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
			}, 500, 'easeInOutQuint');
		});
	</script>
	<!-- End of control center -->
</body>

</html>