<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta tags -->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<meta name="description" content="Page Not Found">
	<meta name="author" content="Ichwanul Fadhli">
	<!-- End of meta tags -->


	<!-- Icon -->
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png'); ?>'">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png'); ?>">
	<!-- End of icon -->


	<!-- Title -->
	<title>
		404 Halaman Tidak Ditemukan | Blog si WANUL
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
			<a href="javascript:void(0)" class="nav-link back" style="color: white;" data-toggle="tooltip" data-placement="right" title="Kembali" data-container="body">
				<i class="material-icons" style="font-size: 28px;">keyboard_backspace</i>
			</a>
		</div>
	</nav>
	<!-- End of navigation panel -->


	<!-- Content -->
	<!-- Landing content -->
	<div class="page-header header-filter" id="background" data-parallax="true" style="background-image: url(https://media.giphy.com/media/hEc4k5pN17GZq/source.gif);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto mt-5">
					<div class="brand text-center">
						<img width="40%" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png'); ?>" alt="Logo Blog si WANUL">
						<h1 class="title" style="font-size: 100px; margin-top: -2%;">404</h1>
						<p style="margin-top: -5%;">Halaman Tidak Ditemukan.</p>
						<p>Anda Tersesat?</p>
						<p>Kembalilah Ke Jalan Yang Benar.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of landing content -->
	<!-- End of content -->


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
		$(document).ready(function() {
			//init DateTimePickers
			materialKit.initFormExtendedDatetimepickers();

			// Sliders Init
			materialKit.initSliders();
		});

		$(".back").click(function() {
			window.location.href = "<?php echo site_url(); ?>";
		});
	</script>
	<!-- End of control center -->
</body>

</html>