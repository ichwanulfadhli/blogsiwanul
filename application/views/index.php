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
						<a href="javascript:void(0)" class="nav-link scroll-to" id="recentBlog">
							<i class="material-icons">bookmark</i> Blog Terbaru
						</a>
					</li>
					<li class="nav-item">
						<a href="javascript:void(0)" class="nav-link scroll-to" id="allBlogs">
							<i class="material-icons">bookmarks</i> Kumpulan Blog
						</a>
					</li>
					<li class="nav-item">
						<a href="javascript:void(0)" class="nav-link scroll-to" id="aboutMe">
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
						<!-- <h1>Your title here</h1> -->
						<img width="80%" class="mylogo" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png'); ?>">
						<h3 class="title text-center">- Welcome to My Blog! -</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of landing content -->


	<div class="main main-raised">
		<!-- Scroll to top button -->
		<button class="btn btn-primary btn-fab btn-round scroll-to" id="toTop">
			<i class="material-icons">arrow_upward</i>
		</button>
		<!-- End of scroll to top button -->


		<!-- Recent blog -->
		<div class="container">
			<div class="section text-center recentBlog">
				<h2 class="title">Blog Terbaru</h2>
				<div class="row justify-content-md-center">
					<div class="col-md-7">
						<div class="card">
							<img class="card-img-top" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" alt="Card image cap">
							<div class="card-body text-left">
								<h4 class="card-title">Judul</h4>
								<h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
								<p class="card-text">
									Some quick example text to build on the card
									title and make up the bulk of the card's content.
								</p>
								<a href="#0" class="card-link">Baca lebih lanjut...</a>
							</div>
							<div class="card-footer text-muted">
								Tanggal
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of recent blog -->

		<!-- All blogs -->
		<div class="container">
			<div class="section text-center allBlogs">
				<h2 class="title">Kumpulan Blog</h2>
				<div class="row justify-content-md-center">
					<div class="col-md-5">
						<div class="card">
							<div class="card-body text-left">
								<h4 class="card-title">Judul</h4>
								<h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
								<p class="card-text">
									Some quick example text to build on the card
									title and make up the bulk of the card's content.
								</p>
								<a href="#0" class="card-link">Baca lebih lanjut...</a>
							</div>
							<div class="card-footer text-muted">
								Tanggal
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="card">
							<div class="card-body text-left">
								<h4 class="card-title">Judul</h4>
								<h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
								<p class="card-text">
									Some quick example text to build on the card
									title and make up the bulk of the card's content.
								</p>
								<a href="#0" class="card-link">Baca lebih lanjut...</a>
							</div>
							<div class="card-footer text-muted">
								Tanggal
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="card">
							<div class="card-body text-left">
								<h4 class="card-title">Judul</h4>
								<h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
								<p class="card-text">
									Some quick example text to build on the card
									title and make up the bulk of the card's content.
								</p>
								<a href="#0" class="card-link">Baca lebih lanjut...</a>
							</div>
							<div class="card-footer text-muted">
								Tanggal
							</div>
						</div>
					</div>

					<div class="col-md-5">
						<div class="card">
							<div class="card-body text-left">
								<h4 class="card-title">Judul</h4>
								<h6 class="card-subtitle mb-2 text-muted">Sub judul</h6>
								<p class="card-text">
									Some quick example text to build on the card
									title and make up the bulk of the card's content.
								</p>
								<a href="#0" class="card-link">Baca lebih lanjut...</a>
							</div>
							<div class="card-footer text-muted">
								Tanggal
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End of all blogs -->


		<!-- About me -->
		<div class="container">
			<div class="section text-center aboutMe">
				<h2 class="title">Tentang Saya</h2>
				<div class="media d-block d-md-flex mt-3">
					<img class="d-flex mb-3 mx-auto z-depth-1 img-raised rounded img-fluid my-pic" src="<?php echo base_url('assets/img/faces/me.jpg') ?>" alt="Ichwanul Fadhli">
					<div class="media-body text-center text-md-left ml-md-3 ml-0">
						<h3 class="mt-0 font-weight-bold px-3">Ichwanul Fadhli</h3>
						<h4 class="text-left description px-3">
							Ichwanul Fadhli alias "Wanul" adalah seorang pria (<script>
								document.write(new Date().getFullYear() - 1999 + " tahun");
							</script>) asal Bogor
							yang hobi bermain <i>game</i>, dan melakukan <i>coding</i>. Dia dulu berkeinginan untuk menjadi seorang <i>Game Developer</i>, namun hanya saja
							mimpinya tidak kesampaian. Tetapi hal itu tidak membuat dia untuk berhenti belajar. Ia terus belajar supaya ia bisa menjadi seorang <i>Programmer</i>.
							Saat ini dia sedang berkuliah di STIKOM Binaniaga dengan jurusan Teknik Informatika dan saat ini pula ia sedang berkuliah di semester 6. Dia 
							berharap suatu hari nanti dia dapat menjadi seorang <i>Programmer</i> yang handal.
						</h4>
					</div>
				</div>
			</div>
		</div>
		<!-- End of about me -->


	</div>
	<!-- End of content -->


	<!-- Footer -->
	<footer class="footer footer-default">
		<div class="container">
			<div class="float-left">
				<ul>
					<li>
						<a href="https://www.instagram.com/ichwa_nf/" data-toggle="tooltip" data-placement="top" title="Follow Instagram Saya" data-container="body">
							Instagram
						</a>
					</li>
					<li>
						<a href="https://github.com/ichwanulfadhli/" data-toggle="tooltip" data-placement="top" title="Temukan Saya di GitHub" data-container="body">
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


	<!-- jQuery UI Plugin -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!-- End if jQuery UI plugin -->


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

		$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();

			// Sliders Init
			materialKit.initSliders();
		});

		$(document).ready(function() {
			$("html, body").niceScroll({
				scrollspeed: 100
			});
		});

		// Function to scroll to each section on the page
		$(function(){
			$(".scroll-to").click(function(){
				var section = $(this).attr("id");

				if($('.' + section).length != 0){
					$("html, body").animate({
						scrollTop: $('.' + section).offset().top
					}, 'slow', 'easeInOutCubic');
				}
			});
		});

		// On scroll window, will display "To Top Button"
		$(window).scroll(function(){
			if($(this).scrollTop() >= 535){
				// jQuery fade in animation
				$("#toTop").fadeIn(350);
			}
			else if($(this).scrollTop() <= 300){
				// jQuery fade out animation
				$("#toTop").fadeOut(350);
			}
		});

		// Function scroll to top
		$("#toTop").click(function(){
			// Scrolling animation
			$("html, body").animate({
				scrollTop: 0
			}, 1000, 'easeInOutCubic');
		});
	</script>
	<!-- End of control center -->
</body>

</html>