<?php
defined('BASEPATH') or exit('No direct script access allowed');

setlocale(LC_TIME, 'id_ID');
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
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png?'). md5_file(base_url('assets/img/apple-icon.png')); ?>'">
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.png?'). md5_file(base_url('assets/img/favicon.png')); ?>">
	<!-- End of icon -->

	<!-- Title -->
	<title>
		<?php echo $blog['data'][0]['post_title']; ?> | Blog si WANUL
	</title>
	<!-- End of title -->

	<!-- Fonts and icons -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<!-- End of fonts and icons -->

	<!-- CSS Files -->
	<link href="<?php echo base_url('assets/css/material-kit.css?'). md5_file(base_url('assets/css/material-kit.css')); ?>" rel="stylesheet" />
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<!-- End of CSS files -->

	<!-- Import CKEditor -->
	<script src="<?php echo base_url('assets/js/plugins/ckeditor/ckeditor.js?'). md5_file(base_url('assets/js/plugins/ckeditor/ckeditor.js')); ?>"></script>
	<!-- End of import CKEditor -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161399100-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-161399100-3');
	</script> -->
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
			<div class="row px-2">
				<div class="col-auto align-self-center nav-link" style="padding: 10px;">
					<a href="javascript:void(0)" class="back rounded-circle" style="color: inherit; width: 60px; height: 60px;">
						<i class="material-icons" style="font-size: 28px;">keyboard_backspace</i>
					</a>
				</div>
				<div class="col-auto align-self-center nav-item" style="padding: 10px;">
					<p style="margin: 0; font-weight: 700; font-size: 20px;">Baca Blog</p>
				</div>
			</div>
		</div>
	</nav>
	<!-- End of navigation panel -->

	<!-- Landing content -->
	<div class="page-header header-filter" data-parallax="true" style="background-image: url(<?php echo $blog['data'][0]['post_cover']; ?>);">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 mx-auto mt-5">
					<div class="brand text-center">
						<img width="35%" src="<?php echo base_url('assets/img/Blog-Si-WANUL_Logo.png?'). md5_file(base_url('assets/img/Blog-Si-WANUL_Logo.png')); ?>" alt="Logo Blog si WANUL">
						<h2 class="title" style="margin: 10px 0px;"><i><?php echo $blog['data'][0]['post_title']; ?></i></h2>
						<h5 style="margin: 0px; color: #FFFFFF"><?php echo strftime("%d %B %Y", strtotime($blog['data'][0]['post_date'])); ?></h5>
						<a href="javascript:void(0)" class="scroll-to" id="blog">
							<img class="scroll-down-img" src="<?php echo base_url('assets/img/scroll-down.gif?'). md5_file(base_url('assets/img/scroll-down.gif')); ?>" alt="Scroll down">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of landing content -->

	<!-- Content -->
	<div class="main">
		<!-- Scroll to top button -->
		<button class="btn btn-primary btn-fab btn-round scroll-to" id="toTop">
			<i class="material-icons" style="font-size: 32px;">keyboard_arrow_up</i>
		</button>
		<!-- End of scroll to top button -->

		<!-- Blog -->
		<div class="container blog">
			<!-- Blog container -->
			<div class="section text-center">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto">
						<div class="text-left description">
							<?php echo $blog['data'][0]['post_content']; ?>
						</div>
					</div>
				</div>
			</div>
			<!-- End of blog container -->


			<!-- Comment -->
			<div class="section section-comments">
				<div class="row">
					<div class="col-md-8 ml-auto mr-auto">
						<!-- Post your comment -->
						<h3 class="title text-center">Tinggalkan komentar</h3>
						<div class="media media-post mb-xl-5">
							<div class="media-body">

								<form class="form" action="" method="POST">
									<label>Email anda tidak akan dipublikasikan.</label><br>
									<label>(*) Wajib diisi.</label>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group bmd-form-group">
												<input type="text" name="nama" class="form-control" placeholder="Nama Anda*" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group bmd-form-group">
												<input type="email" name="email" class="form-control" placeholder="Email Anda*" required>
											</div>
										</div>
									</div>
									<span class="bmd-form-group">
										<textarea class="form-control" name="komen" id="editor1" placeholder="Komentar*" rows="6" required></textarea>
									</span>
									<div class="media-footer mt-xl-3">
										<input type="submit" name="submit" class="btn btn-primary btn-round btn-wd float-right" value="Buat Komentar">
									</div>
								</form>

							</div>
						</div>
						<!-- End of post your comment -->


						<!-- Comments list -->
						<div class="media-area comment">

							<?php ($comment['data'] !== null ? print '<h3 class="title text-center">'. count($comment['data']). ' Komentar</h3>' : print ''); ?>

							<?php
							if($comment['data'] == null){
							?>
							<div class="media mb-xl-5">
								<div class="media-body">
									<h4 class="text-center text-muted">Belum ada komentar.</h4>
								</div>
							</div>
							<?php
							}
							else{
								foreach ($comment['data'] as $result) {
							?>
							<div class="media mb-xl-5">
								<div class="media-body">
									<h4 class="media-heading"><?php echo $result['comment_guest_name']; ?> <small><?php echo strftime("%d %B %Y", strtotime($result['comment_date'])) . ', pukul ' . strftime("%H:%M", strtotime($result['comment_date'])); ?></small></h4>
									<?php echo $result['comment_content']; ?>
								</div>
							</div>
							<?php
								}
							}
							?>

						</div>
						<!-- End of comments list -->

					</div>
				</div>
			</div>
			<!-- End of comment -->
		</div>
		<!-- End of blog -->
	</div>
	<!-- End of content -->

	<!-- Footer -->
	<footer class="footer footer-default px-lg-5">
		<div class="container px-5">
			<div class="float-xl-left">
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
			<div class="copyright float-xl-right">
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
	<script src="<?php echo base_url('assets/js/core/jquery.min.js?'). md5_file(base_url('assets/js/core/jquery.min.js')); ?>" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('assets/js/core/popper.min.js?'). md5_file(base_url('assets/js/core/popper.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js?'). md5_file(base_url('assets/js/core/bootstrap-material-design.min.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/plugins/moment.min.js?'). md5_file(base_url('assets/js/plugins/moment.min.js')); ?>"></script>
	<!-- End of core JS files -->

	<!-- Plugin for the Datepicker -->
	<script src="<?php echo base_url('assets/js/plugins/bootstrap-datetimepicker.js?'). md5_file(base_url('assets/js/plugins/bootstrap-datetimepicker.js')); ?>" type="text/javascript"></script>
	<!-- End of plugin for the datepicker -->

	<!-- Plugin for the sliders -->
	<script src="<?php echo base_url('assets/js/plugins/nouislider.min.js?'). md5_file(base_url('assets/js/plugins/nouislider.min.js')); ?>" type="text/javascript"></script>
	<!-- End of plugin for the sliders -->

	<!-- Control center -->
	<script src="<?php echo base_url('assets/js/material-kit.js?'). md5_file(base_url('assets/js/material-kit.js')); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/js/my.js?'). md5_file(base_url('assets/js/my.js')); ?>" type="text/javascript"></script>
	<script>
		$(".back").click(function() {
			console.log(document.referrer.includes("https://blogsiwanul.my.id"));
			if (document.referrer === '' || document.referrer.includes("https://blogsiwanul.my.id") === false) {
				window.location.href = window.location.origin;
			}
			else if(document.referrer.includes("https://blogsiwanul.my.id")) {
				window.history.go(-1);
			}
		});
	</script>
	<!-- End of control center -->
</body>

</html>