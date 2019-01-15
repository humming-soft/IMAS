<!DOCTYPE html>
<html>

<head>
	<title>IMAS(ICP Management System) - Recover Password</title>
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

	<div class="hk-wrapper">

		<!-- Main Content -->
		<div class="hk-pg-wrapper hk-auth-wrapper" style="min-height: 763px;">
			<div class="top-bar color-scheme-transparent bg-smoke-dark-1 br-0">
				<div class="menu-position-side menu-w menu-side-left bg-transparent bs-none">
					<div class="logo-w"><a class="logo" href="<?=site_url()?>">
							<div class="logo-element"></div>
							<div class="logo-label text-white">IMAS</div>
						</a></div>
				</div>
				<div class="top-menu-controls">
					<div class="top-icon lang-user-w top-settings os-dropdown-trigger os-dropdown-position-left d-inline-flex">
						<div class="lang-w"><img alt="" src="<?=site_url('assets/img/flags-icons/uk.png')?>"></div>
						<div class="lang-info-w">
                            <div class="lang-active">English</div>
                        </div>
						<div class="os-dropdown light message-list lang-list">
                            <div class="icon-w"><i class="os-icon os-icon-edit"></i></div>
                            <ul>
                                <li><a href="#">
                                        <div class="lang-w"><img alt="" src="<?=site_url('assets/img/flags-icons/uk.png')?>"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">English</h6>
                                            <h6 class="message-title">United Kingdom</h6>
                                        </div>
									</a>
								</li>
                                <li><a href="#">
                                        <div class="lang-w"><img alt="" src="<?=site_url('assets/img/flags-icons/my.png')?>"></div>
                                        <div class="message-content">
                                            <h6 class="message-from">Bahasa Malayu</h6>
                                            <h6 class="message-title">Malaysia</h6>
                                        </div>
									</a>
								</li>
                            </ul>
                        </div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12 pa-0">
						<div class="auth-form-wrap pt-xl-0 pt-40">
							<div class="auth-form w-xl-30 w-sm-50 w-100">
								<form>
									<h1 class="display-5 mb-2 text-center">Need help with your Password?</h1>
									<p class="mb-4 text-center">We will send new code to your <a href="#"><u>recovery email</u></a> to reset your password.</p>
									<div class="form-group">
										<input class="form-control" placeholder="Email" type="email">
									</div>
									<button class="btn btn-primary btn-block mb-3" type="submit">Send</button>
									<div class="hs-hr"></div>
									<p class="text-right pt-3"><a href="<?=site_url()?>"><i class="os-icon os-icon-arrow-left7 mr-1"></i> Back to login</a></p>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /Main Content -->

		</div>

	</div>
	<!-- /HK Wrapper -->

	<script src="<?=site_url('assets/js/vendors/jquery/dist/jquery.min.js')?>"></script>
	<script src="<?=site_url('assets/js/app.js')?>"></script>
</body>
</html>
