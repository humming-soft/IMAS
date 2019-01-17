<!DOCTYPE html>
<html>

<head>
	<title>IMAS (ICP Management System) - Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="Hummingsoft Sdn. Bhd." name="author">
	<meta content="Admin dashboard html template" name="description">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="favicon.png" rel="shortcut icon">
	<link href="apple-touch-icon.png" rel="apple-touch-icon">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?=site_url('assets/js/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/dropzone/dist/dropzone.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/fullcalendar/dist/fullcalendar.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/slick-carousel/slick/slick.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/css/core.css')?>" rel="stylesheet">
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<div class="all-wrapper with-side-panel solid-bg-all content-panel-hidden">
		<div aria-hidden="true" class="onboarding-modal modal fade animated" role="dialog" tabindex="-1">
			<div class="modal-dialog modal-lg modal-centered" role="document">
				<div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
						 class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
					<div class="onboarding-slider-w">
						<div class="onboarding-slide">
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Propose New Project</h4>
								<div class="onboarding-text">This is an example of a multistep onboarding screen, you
									can use it to introduce your customers to your app, or collect additional
									information from them before they start using your app.</div>
								<div class="row text-left">
									<div class="col-sm-12 col-md-12">
										<div class="form-group">
											<label for="">Programme Name</label>
											<b class="font d-block">TUNNELING AND UNDERGROUND WORKS (MMC GAMUDA)</b>
										</div>
									</div>
								</div>
								<div class="row text-left">
									<div class="col-sm-12 col-md-12">
										<fieldset class="form-group">
											<legend><span>Project Information</span></legend>
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group"><label for=""> Project Title/Name</label>
														<input class="form-control" placeholder="Enter Project Title/Name.." type="text">
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group">
														<label for="">Reference Number</label>
														<b class="font d-block">TDA/POD/PRO/01/FOR-01<span class="small"> (Generated)</span></b>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group">
														<label for="">Revison</label>
														<b class="font d-block">REV-01<span class="small"> (Generated)</span></b>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 col-md-6">
													<div class="form-group"><label for="">Estimated Total ICV</label>
														<div class="input-group">
															<div class="input-group-prepend">
																<div class="input-group-text">RM</div>
															</div>
															<input class="form-control" placeholder="Enter Estimated Total ICP Value.." type="text">
															<div class="input-group-append">
																<div class="input-group-text">Million</div>
																<button type="button" class="btn btn-light dropdown-toggle btn-icon" data-toggle="dropdown"
																 aria-expanded="false"></button>

																<div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(969px, 36px, 0px);">
																	<a href="#" class="dropdown-item">Million</a>
																	<a href="#" class="dropdown-item">Billion</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"><label for="">Project Type</label>
														<select class="form-control">
															<option>--Select--</option>
															<option>Direct</option>
															<option>Indirect</option>
														</select>
													</div>
												</div>
											</div>
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Example Request Information</h4>
								<div class="onboarding-text">In this example you can see a form where you can request
									some additional information from the customer when they land on the app page.</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group text-center"><label for="">Objectives</label></div>
									</div>
									<div class="col-sm-4 text-left">
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkOne">Localization/Subcontracting</label></div>
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkTwo">Technology Transfer(s)</label></div>
									</div>
									<div class="col-sm-4 text-left">
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkThree">Market Access</label></div>
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkFour">Investments</label></div>
									</div>
									<div class="col-sm-4 text-left">
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkFive">Training/Human Capital Development</label></div>
										<div class="form-group"><label class="form-check-label"><input class="form-check-input" type="checkbox" id="checkSix">Others</label></div>
										<input class="form-control" id="objectiveDes" hidden placeholder="Please describe below.." type="text">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group"><label for="">Project Description</label>
											<textarea  class="form-control"></textarea>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Example Request Information</h4>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group"><label for="">ICP Recipient</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Name</div>
												</div>
												<input class="form-control"  type="text">
											</div>
											<br>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Address</div>
												</div>
												<textarea  class="form-control"></textarea>
											</div>
											<br>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Contact Details</div>
												</div>
												<input class="form-control"  type="text">
											</div>
											<br>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group"><label for="">ICP Provider</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Name</div>
												</div>
												<input class="form-control"  type="text">
											</div>
											<br>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Address</div>
												</div>
												<textarea  class="form-control"></textarea>
											</div>
											<br>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">Contact Details</div>
												</div>
												<input class="form-control"  type="text">
											</div>
											<br>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-media"><img alt="" src="<?=site_url('assets/img/bigicon6.png')?>" width="200px"></div>
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Showcase App Features</h4>
								<div class="onboarding-text">In this example you can showcase some of the features of
									your application, it is very handy to make new users aware of your hidden features.
									You can use boostrap columns to split them up.</div>
								<div class="row">
									<div class="col-sm-6">
										<ul class="features-list">
											<li>Fully Responsive design</li>
											<li>Pre-built app layouts</li>
											<li>Incredible Flexibility</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<ul class="features-list">
											<li>Boxed & Full Layouts</li>
											<li>Based on Bootstrap 4</li>
											<li>Developer Friendly </li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="search-with-suggestions-w">
			<div class="search-with-suggestions-modal">
				<div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search..." type="text">
					<div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
					<!-- </input> -->
				</div>
				<div class="search-suggestions-group">
					<div class="ssg-header">
						<div class="ssg-icon">
							<div class="os-icon os-icon-box"></div>
						</div>
						<div class="ssg-name">Projects</div>
						<div class="ssg-info">24 Total</div>
					</div>
					<div class="ssg-content">
						<div class="ssg-items ssg-items-boxed"><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/company6.png')?>)"></div>
								<div class="item-name">Integ<span>ration</span> with API</div>
							</a><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(img/company7.png)"></div>
								<div class="item-name">Deve<span>lopm</span>ent Project</div>
							</a></div>
					</div>
				</div>
				<div class="search-suggestions-group">
					<div class="ssg-header">
						<div class="ssg-icon">
							<div class="os-icon os-icon-users"></div>
						</div>
						<div class="ssg-name">Customers</div>
						<div class="ssg-info">12 Total</div>
					</div>
					<div class="ssg-content">
						<div class="ssg-items ssg-items-list"><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar1.jpg')?>)"></div>
								<div class="item-name">John Ma<span>yer</span>s</div>
							</a><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar2.jpg')?>)"></div>
								<div class="item-name">Th<span>omas</span> Mullier</div>
							</a><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar3.jpg')?>)"></div>
								<div class="item-name">Kim C<span>olli</span>ns</div>
							</a></div>
					</div>
				</div>
				<div class="search-suggestions-group">
					<div class="ssg-header">
						<div class="ssg-icon">
							<div class="os-icon os-icon-folder"></div>
						</div>
						<div class="ssg-name">Files</div>
						<div class="ssg-info">17 Total</div>
					</div>
					<div class="ssg-content">
						<div class="ssg-items ssg-items-blocks"><a class="ssg-item" href="#">
								<div class="item-icon"><i class="os-icon os-icon-file-text"></i></div>
								<div class="item-name">Work<span>Not</span>e.txt</div>
							</a><a class="ssg-item" href="#">
								<div class="item-icon"><i class="os-icon os-icon-film"></i></div>
								<div class="item-name">V<span>ideo</span>.avi</div>
							</a><a class="ssg-item" href="#">
								<div class="item-icon"><i class="os-icon os-icon-database"></i></div>
								<div class="item-name">User<span>Tabl</span>e.sql</div>
							</a><a class="ssg-item" href="#">
								<div class="item-icon"><i class="os-icon os-icon-image"></i></div>
								<div class="item-name">wed<span>din</span>g.jpg</div>
							</a></div>
						<div class="ssg-nothing-found">
							<div class="icon-w"><i class="os-icon os-icon-eye-off"></i></div><span>No files were found.
								Try changing your query...</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="layout-w">
			<!--------------------
            START - Mobile Menu
            -------------------->
			<div class="menu-mobile menu-activated-on-click color-scheme-dark">
				<div class="mm-logo-buttons-w"><a class="mm-logo" href="index.html"><img src="<?=site_url('assets/img/logo.png')?>">
						<span>IMAS</span></a>
					<div class="mm-buttons">
						<div class="content-panel-open">
							<div class="os-icon os-icon-grid-circles"></div>
						</div>
						<!-- <div class="mobile-menu-trigger">
                            <div class="os-icon os-icon-hamburger-menu-1"></div>
                        </div> -->
					</div>
				</div>
				<!-- <div class="menu-and-user">
                    <div class="logged-user-w">
                        <div class="avatar-w"><img alt="" src="<?=site_url('assetsimg/avatar1.jpg')?>"></div>
                        <div class="logged-user-info-w">
                            <div class="logged-user-name">Maria Gomez</div>
                            <div class="logged-user-role">Administrator</div>
                        </div>
                    </div>
                    <ul class="main-menu">
                        <li class="has-sub-menu"><a href="index.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layout"></div>
                                </div><span>Dashboard</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Dashboard 1</a></li>
                                <li><a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a></li>
                                <li><a href="apps_support_dashboard.html">Dashboard 3</a></li>
                                <li><a href="apps_projects.html">Dashboard 4</a></li>
                                <li><a href="apps_bank.html">Dashboard 5</a></li>
                                <li><a href="layouts_menu_top_image.html">Dashboard 6</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="layouts_menu_top_image.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-layers"></div>
                                </div><span>Menu Styles</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="layouts_menu_side_full.html">Side Menu Light</a></li>
                                <li><a href="layouts_menu_side_full_dark.html">Side Menu Dark</a></li>
                                <li><a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_pipeline.html">Side &amp; Top Dark</a></li>
                                <li><a href="apps_projects.html">Side &amp; Top</a></li>
                                <li><a href="layouts_menu_side_mini.html">Mini Side Menu</a></li>
                                <li><a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a></li>
                                <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                                <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                                <li><a href="layouts_menu_right.html">Right Menu</a></li>
                                <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                                <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                                <li><a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a></li>
                                <li><a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a></li>
                                <li><a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a></li>
                                <li><a href="layouts_menu_side_compact_click.html">Menu Inside Click</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="apps_bank.html">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-package"></div>
                                </div><span>Applications</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="apps_email.html">Email Application</a></li>
                                <li><a href="apps_support_dashboard.html">Support Dashboard</a></li>
                                <li><a href="apps_support_index.html">Tickets Index</a></li>
                                <li><a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_projects.html">Projects List</a></li>
                                <li><a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="apps_full_chat.html">Chat Application</a></li>
                                <li><a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_chat.html">Popup Chat</a></li>
                                <li><a href="apps_pipeline.html">CRM Pipeline</a></li>
                                <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_calendar.html">Calendar</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-file-text"></div>
                                </div><span>Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="misc_invoice.html">Invoice</a></li>
                                <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="misc_charts.html">Charts</a></li>
                                <li><a href="auth_login.html">Login</a></li>
                                <li><a href="auth_register.html">Register</a></li>
                                <li><a href="auth_lock.html">Lock Screen</a></li>
                                <li><a href="misc_pricing_plans.html">Pricing Plans</a></li>
                                <li><a href="misc_error_404.html">Error 404</a></li>
                                <li><a href="misc_error_500.html">Error 500</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-life-buoy"></div>
                                </div><span>UI Kit</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a></li>
                                <li><a href="uikit_alerts.html">Alerts</a></li>
                                <li><a href="uikit_grid.html">Grid</a></li>
                                <li><a href="uikit_progress.html">Progress</a></li>
                                <li><a href="uikit_popovers.html">Popover</a></li>
                                <li><a href="uikit_tooltips.html">Tooltips</a></li>
                                <li><a href="uikit_buttons.html">Buttons</a></li>
                                <li><a href="uikit_dropdowns.html">Dropdowns</a></li>
                                <li><a href="uikit_typography.html">Typography</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-mail"></div>
                                </div><span>Emails</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="emails_welcome.html">Welcome Email</a></li>
                                <li><a href="emails_order.html">Order Confirmation</a></li>
                                <li><a href="emails_payment_due.html">Payment Due</a></li>
                                <li><a href="emails_forgot.html">Forgot Password</a></li>
                                <li><a href="emails_activate.html">Activate Account</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-users"></div>
                                </div><span>Users</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="users_profile_big.html">Big Profile</a></li>
                                <li><a href="users_profile_small.html">Compact Profile</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-edit-32"></div>
                                </div><span>Forms</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="forms_regular.html">Regular Forms</a></li>
                                <li><a href="forms_validation.html">Form Validation</a></li>
                                <li><a href="forms_wizard.html">Form Wizard</a></li>
                                <li><a href="forms_uploads.html">File Uploads</a></li>
                                <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-grid"></div>
                                </div><span>Tables</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="tables_regular.html">Regular Tables</a></li>
                                <li><a href="tables_datatables.html">Data Tables</a></li>
                                <li><a href="tables_editable.html">Editable Tables</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">
                                <div class="icon-w">
                                    <div class="os-icon os-icon-zap"></div>
                                </div><span>Icons</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                                <li><a href="icon_fonts_feather.html">Feather Icons</a></li>
                                <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                                <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                                <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                                <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                                <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                                <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                                <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                                <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                                <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                                <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                                <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                                <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                                <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                                <li><a href="icon_fonts_light_admin.html">Light Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="mobile-menu-magic">
                        <h4>Light Admin</h4>
                        <p>Clean Bootstrap 4 Template</p>
                        <div class="btn-w"><a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin"
                                target="_blank">Purchase Now</a></div>
                    </div>
                </div> -->
			</div>
			<!--------------------
            END - Mobile Menu
            -------------------->
			<!--------------------
            START - Main Menu
            -------------------->
			<!-- <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-bright sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
                <div class="logo-w"><a class="logo" href="index.html">
                        <div class="logo-element"></div>
                        <div class="logo-label">IMAS</div>
                    </a></div>
                <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..."
                        type="text"></div>
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="sub-header"><span>Layouts</span></li>
                    <li class="selected has-sub-menu"><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Dashboard</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Dashboard</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layout"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">Hot</strong></a></li>
                                    <li><a href="apps_support_dashboard.html">Dashboard 3</a></li>
                                    <li><a href="apps_projects.html">Dashboard 4</a></li>
                                    <li><a href="apps_bank.html">Dashboard 5</a></li>
                                    <li><a href="layouts_menu_top_image.html">Dashboard 6</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="layouts_menu_top_image.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Menu Styles</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Menu Styles</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-layers"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="layouts_menu_side_full.html">Side Menu Light</a></li>
                                    <li><a href="layouts_menu_side_full_dark.html">Side Menu Dark</a></li>
                                    <li><a href="layouts_menu_side_transparent.html">Side Menu Transparent <strong
                                                class="badge badge-danger">New</strong></a></li>
                                    <li><a href="apps_pipeline.html">Side &amp; Top Dark</a></li>
                                    <li><a href="apps_projects.html">Side &amp; Top</a></li>
                                    <li><a href="layouts_menu_side_mini.html">Mini Side Menu</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="layouts_menu_side_mini_dark.html">Mini Menu Dark</a></li>
                                    <li><a href="layouts_menu_side_compact.html">Compact Side Menu</a></li>
                                    <li><a href="layouts_menu_side_compact_dark.html">Compact Menu Dark</a></li>
                                    <li><a href="layouts_menu_right.html">Right Menu</a></li>
                                    <li><a href="layouts_menu_top.html">Top Menu Light</a></li>
                                    <li><a href="layouts_menu_top_dark.html">Top Menu Dark</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="layouts_menu_top_image.html">Top Menu Image <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="layouts_menu_sub_style_flyout.html">Sub Menu Flyout</a></li>
                                    <li><a href="layouts_menu_sub_style_flyout_dark.html">Sub Flyout Dark</a></li>
                                    <li><a href="layouts_menu_sub_style_flyout_bright.html">Sub Flyout Bright</a></li>
                                    <li><a href="layouts_menu_side_compact_click.html">Menu Inside Click</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="sub-header"><span>Options</span></li>
                    <li class=" has-sub-menu"><a href="apps_bank.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-package"></div>
                            </div><span>Applications</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Applications</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-package"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="apps_email.html">Email Application</a></li>
                                    <li><a href="apps_support_dashboard.html">Support Dashboard</a></li>
                                    <li><a href="apps_support_index.html">Tickets Index</a></li>
                                    <li><a href="apps_crypto.html">Crypto Dashboard <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="apps_projects.html">Projects List</a></li>
                                    <li><a href="apps_bank.html">Banking <strong class="badge badge-danger">New</strong></a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="apps_full_chat.html">Chat Application</a></li>
                                    <li><a href="apps_todo.html">To Do Application <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="misc_chat.html">Popup Chat</a></li>
                                    <li><a href="apps_pipeline.html">CRM Pipeline</a></li>
                                    <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="misc_calendar.html">Calendar</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>Pages</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Pages</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-file-text"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="misc_invoice.html">Invoice</a></li>
                                    <li><a href="rentals_index_grid.html">Property Listing <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="misc_charts.html">Charts</a></li>
                                    <li><a href="auth_login.html">Login</a></li>
                                    <li><a href="auth_register.html">Register</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="auth_lock.html">Lock Screen</a></li>
                                    <li><a href="misc_pricing_plans.html">Pricing Plans</a></li>
                                    <li><a href="misc_error_404.html">Error 404</a></li>
                                    <li><a href="misc_error_500.html">Error 500</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-life-buoy"></div>
                            </div><span>UI Kit</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">UI Kit</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-life-buoy"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="uikit_modals.html">Modals <strong class="badge badge-danger">New</strong></a></li>
                                    <li><a href="uikit_alerts.html">Alerts</a></li>
                                    <li><a href="uikit_grid.html">Grid</a></li>
                                    <li><a href="uikit_progress.html">Progress</a></li>
                                    <li><a href="uikit_popovers.html">Popover</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="uikit_tooltips.html">Tooltips</a></li>
                                    <li><a href="uikit_buttons.html">Buttons</a></li>
                                    <li><a href="uikit_dropdowns.html">Dropdowns</a></li>
                                    <li><a href="uikit_typography.html">Typography</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="sub-header"><span>Elements</span></li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-mail"></div>
                            </div><span>Emails</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Emails</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-mail"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="emails_welcome.html">Welcome Email</a></li>
                                    <li><a href="emails_order.html">Order Confirmation</a></li>
                                    <li><a href="emails_payment_due.html">Payment Due</a></li>
                                    <li><a href="emails_forgot.html">Forgot Password</a></li>
                                    <li><a href="emails_activate.html">Activate Account</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-users"></div>
                            </div><span>Users</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Users</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-users"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="users_profile_big.html">Big Profile</a></li>
                                    <li><a href="users_profile_small.html">Compact Profile</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-edit-32"></div>
                            </div><span>Forms</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Forms</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-edit-32"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="forms_regular.html">Regular Forms</a></li>
                                    <li><a href="forms_validation.html">Form Validation</a></li>
                                    <li><a href="forms_wizard.html">Form Wizard</a></li>
                                    <li><a href="forms_uploads.html">File Uploads</a></li>
                                    <li><a href="forms_wisiwig.html">Wisiwig Editor</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-grid"></div>
                            </div><span>Tables</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Tables</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-grid"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="tables_regular.html">Regular Tables</a></li>
                                    <li><a href="tables_datatables.html">Data Tables</a></li>
                                    <li><a href="tables_editable.html">Editable Tables</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class=" has-sub-menu"><a href="#">
                            <div class="icon-w">
                                <div class="os-icon os-icon-zap"></div>
                            </div><span>Icons</span>
                        </a>
                        <div class="sub-menu-w">
                            <div class="sub-menu-header">Icons</div>
                            <div class="sub-menu-icon"><i class="os-icon os-icon-zap"></i></div>
                            <div class="sub-menu-i">
                                <ul class="sub-menu">
                                    <li><a href="icon_fonts_simple_line_icons.html">Simple Line Icons</a></li>
                                    <li><a href="icon_fonts_feather.html">Feather Icons</a></li>
                                    <li><a href="icon_fonts_themefy.html">Themefy Icons</a></li>
                                    <li><a href="icon_fonts_picons_thin.html">Picons Thin</a></li>
                                    <li><a href="icon_fonts_dripicons.html">Dripicons</a></li>
                                    <li><a href="icon_fonts_eightyshades.html">Eightyshades</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="icon_fonts_entypo.html">Entypo</a></li>
                                    <li><a href="icon_fonts_font_awesome.html">Font Awesome</a></li>
                                    <li><a href="icon_fonts_foundation_icon_font.html">Foundation Icon Font</a></li>
                                    <li><a href="icon_fonts_metrize_icons.html">Metrize Icons</a></li>
                                    <li><a href="icon_fonts_picons_social.html">Picons Social</a></li>
                                    <li><a href="icon_fonts_batch_icons.html">Batch Icons</a></li>
                                </ul>
                                <ul class="sub-menu">
                                    <li><a href="icon_fonts_dashicons.html">Dashicons</a></li>
                                    <li><a href="icon_fonts_typicons.html">Typicons</a></li>
                                    <li><a href="icon_fonts_weather_icons.html">Weather Icons</a></li>
                                    <li><a href="icon_fonts_light_admin.html">Light Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="side-menu-magic">
                    <h4>TDA</h4>
                    <p>Technology Depository Agency</p>
                    <div class="btn-w"><a class="btn btn-white btn-rounded" href="https://tda.my"
                            target="_blank">Visit Us</a></div>
                </div>
            </div> -->
			<!--------------------
            END - Main Menu
            -------------------->
			<div class="content-w">
				<!--------------------
                START - Top Bar
                -------------------->
				<div class="top-bar color-scheme-light">
					<div class="logo-w">
						<a class="logo" href="index.html">
							<div class="logo-element"></div>
							<div class="logo-label">IMAS</div>
						</a>
					</div>
					<div class="fancy-selector-w">
						<div class="fancy-selector-current">
							<div class="fs-main-info">
								<div class="fs-name">TUNNELING AND UNDERGROUND WORKS (MMC GAMUDA)</div>
								<div class="fs-sub"><span>PROJECTS :</span><strong>05</strong></div>
							</div>
							<div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div>
						</div>
						<div class="fancy-selector-options">
							<div class="fancy-selector-option">
								<div class="fs-main-info">
									<div class="fs-name">10 X 6-CAR ELECTRIC TRAIN SETS (ETS)</div>
									<div class="fs-sub"><span>PROJECTS :</span><strong>11</strong></div>
								</div>
							</div>
							<div class="fancy-selector-option active">
								<div class="fs-main-info">
									<div class="fs-name">Server Product</div>
									<div class="fs-sub"><span>PROJECTS :</span><strong>03</strong></div>
								</div>
							</div>
							<div class="fancy-selector-option">
								<div class="fs-main-info">
									<div class="fs-name">Compute Engine</div>
									<div class="fs-sub"><span>PROJECTS :</span><strong>06</strong></div>
								</div>
							</div>
						</div>
					</div>
					<div class="top-menu-controls">
						<!--------------------
                        START - Messages Link in secondary top menu
                        -------------------->
						<div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-mail-14"></i>
							<div class="new-messages-count">12</div>
							<div class="os-dropdown light message-list">
								<ul>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar1.jpg"></div>
											<div class="message-content">
												<h6 class="message-from">John Mayers</h6>
												<h6 class="message-title">Account Update</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar2.jpg"></div>
											<div class="message-content">
												<h6 class="message-from">Phil Jones</h6>
												<h6 class="message-title">Secutiry Updates</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar3.jpg"></div>
											<div class="message-content">
												<h6 class="message-from">Bekky Simpson</h6>
												<h6 class="message-title">Vacation Rentals</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar4.jpg"></div>
											<div class="message-content">
												<h6 class="message-from">Alice Priskon</h6>
												<h6 class="message-title">Payment Confirmation</h6>
											</div>
										</a></li>
								</ul>
							</div>
						</div>
						<!--------------------
                        END - Messages Link in secondary top menu
                        -------------------->
						<!--------------------
                        START - Settings Link in secondary top menu
                        -------------------->
						<div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i class="os-icon os-icon-ui-46"></i>
							<div class="os-dropdown">
								<div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
								<ul>
									<li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-49"></i><span>Profile
												Settings</span></a></li>
									<li><a href="users_profile_small.html"><i class="os-icon os-icon-grid-10"></i><span>Billing
												Info</span></a></li>
									<li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My
												Invoices</span></a></li>
									<li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-15"></i><span>Cancel
												Account</span></a></li>
								</ul>
							</div>
						</div>
						<!--------------------
                        END - Settings Link in secondary top menu
                        -------------------->
						<!--------------------
                        START - User avatar and menu in secondary top menu
                        -------------------->
						<div class="logged-user-w">
							<div class="logged-user-i">
								<div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.jpg')?>"></div>
								<div class="logged-user-menu color-style-bright">
									<div class="logged-user-avatar-info">
										<div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.jpg')?>"></div>
										<div class="logged-user-info-w">
											<div class="logged-user-name">Maria Gomez</div>
											<div class="logged-user-role">Administrator</div>
										</div>
									</div>
									<div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
									<ul>
										<li><a href="apps_email.html"><i class="os-icon os-icon-mail-01"></i><span>Incoming
													Mail</span></a></li>
										<li><a href="users_profile_big.html"><i class="os-icon os-icon-user-male-circle2"></i><span>Profile
													Details</span></a></li>
										<li><a href="users_profile_small.html"><i class="os-icon os-icon-coins-4"></i><span>Billing
													Details</span></a></li>
										<li><a href="#"><i class="os-icon os-icon-others-43"></i><span>Notifications</span></a></li>
										<li><a href="<?=site_url('logout')?>"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
									</ul>
								</div>
							</div>
						</div>
						<!--------------------
                        END - User avatar and menu in secondary top menu
                        -------------------->
					</div>
					<!--------------------
                    END - Top Menu Controls
                    -------------------->
				</div>
				<!--------------------
                END - Top Bar
                -------------------->
				<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
				<div class="content-i">
					<div class="content-box">
						<div class="row pt-4">
							<div class="col-sm-12">
								<!--START - Recent Ticket Comments-->
								<div class="element-wrapper">
									<div class="os-tabs-w">
										<div class="os-tabs-controls">
											<ul class="nav nav-tabs">
												<li class="nav-item"><a class="nav-link active show no-loader content-panel-hide" data-toggle="tab" href="#tab_overview"><strong>PROGRAMME OVERVIEW</strong></a></li>
												<li class="nav-item"><a class="nav-link no-loader content-panel-view" data-toggle="tab" href="#tab_projects"><strong>PROJECTS</strong></a></li>
												<li class="nav-item"><a class="nav-link no-loader content-panel-hide" data-toggle="tab" href="#tab_activity"><strong>ACTIVITY</strong></a></li>
											</ul>
											<ul class="nav nav-pills smaller d-none d-md-flex">
												<li class="nav-item">
													<a class="btn btn-primary btn-block" data-target=".onboarding-modal" data-toggle="modal" href="#"><i class="os-icon os-icon-plus-circle"></i><span>New
															Project</span></a>
												</li>
											</ul>
										</div>
										<div class="tab-content">
											<div class="tab-pane active show" id="tab_overview">
												<div class="element-box-tp">
													<div class="support-index">
														<div class="support-ticket-content-w">
															<div class="support-ticket-content">
																<div class="support-ticket-content-header">
																	<h4 class="ticket-header">TUNNELING AND UNDERGROUND WORKS (MMC GAMUDA)</h4>
																	<a class="back-to-index" href="#"><i class="os-icon os-icon-arrow-left5"></i><span>Back</span></a><a
																	 class="show-ticket-info" href="#"><span>Show Details</span><i class="os-icon os-icon-documents-03"></i></a>
																</div>
																<hr>
																<h6 class="d-block text-right">Ref.Code: <span class="text-primary">TDA/PRG/MPT/2011/23-45/GT/MY</span></h6>
																<div class="ticket-thread">
																	<div class="ticket-reply">
																		<div class="ticket-reply-info"><div class="text-primary"><span>Programme Description : </span></div></div>
																		<div class="ticket-reply-content">
																			<p>Procurement of 9.5km underground tunnelling works involving the design and construction of seven
																				underground stations and associated structures between Semantan north portal and Maluri south
																				portal.</p>
																		</div>
																		<div class="ticket-attachments">
																			<a class="attachment" href="#">
																				<i class="os-icon os-icon-ui-51"></i><span>Programme-detail.pdf</span>
																			</a>
																		</div>
																		<div class="row">
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info"><div><span class="text-primary">Procuring Agency : </span><b>Ministry of Transport (MOT)</b></div></div>
																			</div>
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info"><div><span class="text-primary">Sector : </span><b>Land Transport</b></div></div>
																			</div>
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info">
																				<div>
																					<span class="text-primary">ICP Provider : </span>
																					<dl class="dl-horizontal">
																						<dt>Name</dt>
																						<dd> MMC GAMUDA KVMRT (T) SDN BHD</dd>
																						<dt>Address</dt>
																						<dd> Level 3A-3, Corporate Building (Block E) Pusat Komersial Southgate No.2, Jalan Chan Sow Lin, Off, Jalan Dua, 55200 Kuala Lumpur</dd>
																						<dt>Contact Details</dt>
																						<dd> Ting Sheng Chong <br>03-2385 8000<br>ting_sheng@mmc-gamuda.my</dd>
																					</dl>
																					</div>
																				</div>
																			</div>
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info"><div><span class="text-primary">Programme Start Date : </span><b>Jan 24th, 2011</b></div></div>
																			</div>
																		</div>
																		
																	</div>
																	<fieldset class="form-group">
																		<legend><span>Project(s) Summary</span></legend>
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="form-group"><label for=""> First Name</label><input class="form-control" placeholder="First Name"
																					 type="text"></div>
																			</div>
																			<div class="col-sm-6">
																				<div class="form-group"><label for="">Last Name</label><input class="form-control" placeholder="Last Name"
																					 type="text"></div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-sm-6">
																				<div class="form-group"><label for=""> Date Picker</label>
																					<div class="date-input"><input class="single-daterange form-control" placeholder="Date of birth"
																						 type="text" value="04/12/1978"></div>
																				</div>
																			</div>
																			<div class="col-sm-6">
																				<div class="form-group"><label for="">Twitter Username</label>
																					<div class="input-group">
																						<div class="input-group-prepend">
																							<div class="input-group-text">@</div>
																						</div><input class="form-control" placeholder="Twitter Username" type="text">
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="form-group"><label> Example textarea</label><textarea class="form-control" rows="3"></textarea></div>
																	</fieldset>
																</div>
															</div>
															<div class="support-ticket-info"><a class="close-ticket-info" href="#"><i class="os-icon os-icon-ui-23"></i></a>
																<div class="customer">
																	<h4 class="customer-name">RM 8.2 Billion</h4>
																	<div class="customer-tickets">Procurement Value</div>
																</div>
																<h5 class="info-header">Programme Details</h5>
																<div class="info-section text-center">
																	<div class="label">Created: <strong class="ml-1">Jan 24th, 2011</strong></div>
																	<div class="label">Type: <div class="badge badge-success ml-1">ICP Programme</div></div>
																</div>
																<h5 class="info-header">Projects Details</h5>
																<div class="info-section">
																	<ul class="users-list as-tiles">
                                                                        <li><a class="author with-avatar" href="#">
                                                                            <div class="avatar font-2p4">01</div><span>New</span>
                                                                                </a>
                                                                        </li>
																		<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">02</div><span>Approved</span>
																			</a></li>
																		<li><a class="author with-avatar" href="#">
                                                                        <div class="avatar font-2p4">01</div><span>In Progress</span>
																			</a></li>
																		<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">01</div><span>Completed</span>
																			</a></li>
																		
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab_projects">
												<div class="element-box-tp">
													<div class="table-responsive">
														<table class="table table-padded">
															<thead>
																<tr>
																	<th>#</th>
																	<th width="30%">Name</th>
																	<th>Type</th>
																	<th>Total ICV (Mil)</th>
																	<th class="text-center">Objective</th>
																	<th>Progress</th>
																	<th>Status</th>
																	<th>Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td class="text-center">1</td>
																	<td>
																		<div class="text-primary"><b>Tunneling Training Academy (TTA graduates)</b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font">CPCF-11-MW2</b></div>
																		</div>
																	</td>
																	<td>Indirect</td>
																	<td><strong>RM 132 Mil</strong></td>
																	<td>Traning/Human Capital Development</td>
																	<td class="text-center">-</td>
																	<td class="nowrap"><span class="badge badge-secondary">New</span></td>
																	<td class="row-actions">
																		<a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cpcf-11-mw2')?>"><i class="os-icon os-icon-grid-10"></i></a>
																		<a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">2</td>
																	<td>
																		<div class="text-primary"><b>Data Acquisition</b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font">CGMR-90-IP2</b></div>
																		</div>
																	</td>
																	<td>Indirect</td>
																	<td><strong>RM 84 Mil</strong></td>
																	<td>Technology Transfer(s)</td>
																	<td class="text-center">-</td>
																	<td class="nowrap"><span class="badge badge-warning">Proposed</span></td>
																	<td class="row-actions">
																		<a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2')?>"><i class="os-icon os-icon-grid-10"></i></a>
																		<a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">3</td>
																	<td>
																		<div class="text-primary"><b>Development of Variable Density (VD) Tunnel Boring Machine (TBM)</b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font">CGMR-90-IP2</b></div>
																		</div>
																	</td>
																	<td>Direct</td>
																	<td><strong>RM 177 Mil</strong></td>
																	<td>Investment</td>
																	<td class="text-center">-</td>
																	<td class="nowrap"><span class="badge badge-warning">Proposed</span></td>
																	<td class="row-actions">
																		<a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2')?>"><i class="os-icon os-icon-grid-10"></i></a>
																		<a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">4</td>
																	<td>
																		<div class="text-primary"><b>Steel Fibre Reinforced Concrete (SFRC) Tunnel Linings</b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font">CMR-22-IDS</b></div>
																		</div>
																	</td>
																	<td>Direct</td>
																	<td><strong>RM 104.7 Mil</strong></td>
																	<td><span>Localization/Subcontracting</span></td>
																	<td class="text-center">-</td>
																	<td class="nowrap"><span class="badge badge-primary">In Progress</span></td>
																	<td class="row-actions">
																		<a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2')?>"><i class="os-icon os-icon-grid-10"></i></a>
																		<a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
																	</td>
																</tr>
																<tr>
																	<td class="text-center">5</td>
																	<td>
																		<div class="text-primary"><b>Production of TBM Parts in Malaysia</b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font">CET-32-ICD</b></div>
																		</div>
																	</td>
																	<td>Direct</td>
																	<td><strong>RM 204.68 Mil</strong></td>
																	<td><span>Localization/Subcontracting</span></td>
																	<td class="text-center">34%</td>
																	<td class="nowrap"><span class="badge badge-success">Approved</span></td>
																	<td class="row-actions">
																		<a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2')?>"><i class="os-icon os-icon-grid-10"></i></a>
																		<a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab_activity">
												<div class="timed-activities padded">
													<div class="timed-activity">
														<div class="ta-date"><span>21st Jan, 2017</span></div>
														<div class="ta-record-w">
															<div class="ta-record">
																<div class="ta-timestamp"><strong>11:55</strong> am</div>
																<div class="ta-activity">Created a post called <a href="#">Register new symbol</a> in Rogue</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>2:34</strong> pm</div>
																<div class="ta-activity">Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a>
																	category</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>7:12</strong> pm</div>
																<div class="ta-activity">Added <a href="#">John Silver</a> as a friend</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:39</strong> pm</div>
																<div class="ta-activity">Started following user <a href="#">Ben Mosley</a></div>
															</div>
														</div>
													</div>
													<div class="timed-activity">
														<div class="ta-date"><span>3rd Feb, 2017</span></div>
														<div class="ta-record-w">
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:32</strong> pm</div>
																<div class="ta-activity">Added <a href="#">John Silver</a> as a friend</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>5:14</strong> pm</div>
																<div class="ta-activity">Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a>
																	category</div>
															</div>
														</div>
													</div>
													<div class="timed-activity">
														<div class="ta-date"><span>21st Jan, 2017</span></div>
														<div class="ta-record-w">
															<div class="ta-record">
																<div class="ta-timestamp"><strong>11:55</strong> am</div>
																<div class="ta-activity">Created a post called <a href="#">Register new symbol</a> in Rogue</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>2:34</strong> pm</div>
																<div class="ta-activity">Commented on story <a href="#">How to be a leader</a> in <a href="#">Financial</a>
																	category</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:39</strong> pm</div>
																<div class="ta-activity">Started following user <a href="#">Ben Mosley</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--END - Recent Ticket Comments-->
							</div>
						</div>
					</div>
					<!--------------------
                    START - Sidebar
                    -------------------->
					<div class="content-panel compact color-scheme-dark">
						<div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
						<div class="element-wrapper">
							<div class="element-actions actions-only"><a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
							<h6 class="element-header">Search</h6>
							<div class="element-box-tp">
								<div class="element-search autosuggest-search-activator">
									<input placeholder="Start typing to search..." type="text">
								</div>
							</div>
						</div>
						<div class="element-wrapper">
							<div class="element-actions actions-only"><a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
							<h6 class="element-header">Status</h6>
							<div class="element-box-tp">
								<div class="el-buttons-list">
									<div class="toggled-buttons">
										<a class="btn btn-toggled on" href="#">New (1)</a>
										<a class="btn btn-toggled on" href="#">Proposed (2)</a>
										<a class="btn btn-toggled on" href="#">Approved (1)</a>
										<a class="btn btn-toggled on" href="#">Declined</a>
										<a class="btn btn-toggled on" href="#">In Progress (1)</a>
										<a class="btn btn-toggled on" href="#">Completed</a>
									</div>
								</div>
							</div>
						</div>
						<div class="element-wrapper">
							<div class="element-actions actions-only"><a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
							<h6 class="element-header">Period</h6>
							<div class="element-box-tp">
								<form action="#">
									<div class="row">
										<div class="col-6">
											<div class="form-group"><label for="">From</label>
												<select class="form-control">
													<option>All</option>
													<option>2015</option>
													<option>2016</option>
													<option>2017</option>
													<option>2018</option>
													<option>2019</option>
												</select>
											</div>
										</div>
										<div class="col-6">
											<div class="form-group"><label for="">To</label>
												<select class="form-control">
													<option>All</option>
													<option>2019</option>
													<option>2020</option>
													<option>2021</option>
													<option>2022</option>
													<option>2023</option>
													<option>2024</option>
													<option>2025</option>
													<option>2026</option>
													<option>2027</option>
													<option>2028</option>
												</select>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<!--------------------
                        START - Support Agents
                        -------------------->
						<!-- <div class="element-wrapper">
                            <div class="element-actions actions-only"><a class="element-action element-action-fold" href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
                            <h6 class="element-header">Programme Type</h6>
                            <div class="element-box-tp">
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Economic Enhancement Programme (EEP)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Offset (Direct/Indirect)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Counter Trade</label>
                                    </div>              
                                </div>
                            </div>
                        </div> -->
						<!--------------------
                        END - Support Agents
                        -------------------->
						<!--------------------
                        START - Recent Activity
                        -------------------->
						<div class="element-wrapper">
							<h6 class="element-header">Procurement Value</h6>
							<div class="element-box-tp">
								<div class="activity-boxes-w">
									<div class="activity-box-w">
										<div class="activity-time">HIGH</div>
										<div class="activity-box">
											<div class="activity-info">
												<div class="activity-role"><strong class="font-p72"> Above 1 Bil <span class="ls-1">(1)</span></strong></div>
											</div>
										</div>
									</div>
									<div class="activity-box-w">
										<div class="activity-time"></div>
										<div class="activity-box">
											<div class="activity-info">
												<div class="activity-role"><strong class="font-p72">500 Mil - 1 Bil <span class="ls-1">(3)</span></strong></div>
											</div>
										</div>
									</div>
									<div class="activity-box-w">
										<div class="activity-time">LOW</div>
										<div class="activity-box">
											<div class="activity-info">
												<div class="activity-role"><strong class="font-p72">100 Mil - 500 MIl <span class="ls-1">(1)</span></strong></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--------------------
                        END - Recent Activity
                        -------------------->
					</div>
					<!--------------------
                    END - Sidebar
                    -------------------->
				</div>
			</div>
		</div>
		<div class="display-type"></div>
	</div>
	<script src="<?=site_url('assets/js/vendors/jquery/dist/jquery.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/moment/moment.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/chart.js/dist/Chart.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/select2/dist/js/select2.full.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/jquery-bar-rating/dist/jquery.barrating.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/ckeditor/ckeditor.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap-validator/dist/validator.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/dropzone/dist/dropzone.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/editable-table/mindmup-editabletable.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/fullcalendar/dist/fullcalendar.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/tether/dist/js/tether.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/slick-carousel/slick/slick.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/util.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/alert.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/button.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/carousel.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/collapse.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/dropdown.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/modal.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/tab')?>.js"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/tooltip.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap/js/dist/popover.js')?>"></script>
	<script src="<?=site_url('assets/js/demo_customizerce5a.js?version=4.4.1')?>"></script>
	<script src="<?=site_url('assets/js/app.js')?>"></script>
	<script type ="text/javascript">
		$(document).on("change","#checkSix",function(){
			if(this.checked) {
				$("#objectiveDes").attr("hidden",false);
			}else{
				$("#objectiveDes").attr("hidden",true);
			}
		});
	</script>
</body>

</html>
