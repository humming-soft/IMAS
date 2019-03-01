<!DOCTYPE html>
<html>

<head>
	<title>IMAS (ICP Management System) - Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="Hummingsoft Sdn. Bhd." name="author">
	<meta content="Admin dashboard html template" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="favicon.png" rel="shortcut icon">
	<link href="apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets/js/vendors/owl/owl.carousel.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/owl/owl.theme.default.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/css/core.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/css/style.css')?>" rel="stylesheet">
</head>

<body class="non-auth">
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper">

		<!-- Main Content -->
		<div class="hk-pg-wrapper hk-auth-wrapper">
			<header class="d-flex justify-content-between align-items-center">
				<div class="menu-position-side menu-w menu-side-left bg-transparent bs-none">
					<div class="logo-w"><a class="logo" href="<?=site_url()?>">
							<div class="logo-element"></div>
							<div class="logo-label">IMAS</div>
						</a></div>
				</div>
				<div class="btn-group btn-group-sm">
					<a href="#" class="btn btn-outline-secondary">Help</a>
					<a href="#" class="btn btn-outline-secondary">About Us</a>
				</div>
			</header>
			<div class="container-fluid p-0">
				<div class="row">
					<div class="col-xl-5 p-0">
						<div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
							<div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?=site_url('assets/img/bg2.jpg')?>);">
								<div class="auth-cover-info py-xl-0 pt-100 pb-50">
									<div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
										<h1 class="display-4 text-white mb-20">Contribute to the National Economic Growth.</h1>
										<p class="text-white">The purpose of lorem ipsum is to create a natural looking block of text (sentence,
											paragraph, page, etc.) that doesn't distract from the layout. Again during the 90s as desktop publishers
											bundled the text with their software.</p>
									</div>
								</div>
								<div class="bg-overlay bg-trans-dark-50"></div>
							</div>
							<div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url(<?=site_url('assets/img/bg1.jpg')?>);">
								<div class="auth-cover-info py-xl-0 pt-100 pb-50">
									<div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
										<h1 class="display-4 text-white mb-20">Improves Malaysia’s Competitiveness in the Global Market.</h1>
										<p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on
											their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their
											software.</p>
									</div>
								</div>
								<div class="bg-overlay bg-trans-dark-50"></div>
							</div>
						</div>
					</div>
					<div class="col-xl-7 pa-0">
						<div class="auth-form-wrap py-xl-0 py-50">
							<div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100 auth-box-w">
								<h1 class="display-5 mb-10 text-center"><?=$this->lang->line('log_header')?></h1>
								<p class="mb-3 text-center"><?=$this->lang->line('log_sub_header')?></p>
								<?=form_open('login') ?>
									<div class="form-group">
										<label for=""><?=$this->lang->line('log_username')?></label>
										<input class="form-control" placeholder="Enter your username" name="user_email" value="<?=$user_email?>" type="text">
										<div class="pre-icon os-icon os-icon-user-male-circle"></div>
									</div>
									<div class="form-group">
										<label for=""><?=$this->lang->line('log_password')?></label>
										<input class="form-control" placeholder="Enter your password" name="user_password" type="password">
										<div class="pre-icon os-icon os-icon-fingerprint"></div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<div class="form-check">
												<label class="form-check-label"><?php echo form_checkbox('remember', '1', FALSE, 'id="remember" class="form-check-input"');?><?=$this->lang->line('log_remeber')?></label>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group text-right">
												<a href="<?=site_url('forgot-password')?>" class="font-14 mt-15"><?=$this->lang->line('log_forgot_pass')?></a>
											</div>
										</div>
									</div>

								<button class="btn btn-primary btn-block " type="submit"><i class="os-icon os-icon-check-square mr-1"></i> <?=$this->lang->line('log_btn_signin')?></button>
								<?=form_close()?>
								
								<div class="hs-hr"></div>
								
								<div class="text-center pt-3">
									<?php if(!empty($message)){ ?>
										<div class="alert bg-info text-white alert-dismissible" role="alert">
										<button class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span></button>
										<?=$message?>
										</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Content -->

	</div>
	<!-- /HK Wrapper -->

	<script src="<?=site_url('assets/js/vendors/jquery/dist/jquery.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/util.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/alert.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/owl/owl.carousel.min.js')?>"></script>
    <script src="<?=site_url('assets/js/app.min.js')?>"></script>
</body>
<script type="text/javascript">document.addEventListener('DOMContentLoaded', function() {App.initOwlCarousel($('#owl_demo_1'))})</script>
</html>
