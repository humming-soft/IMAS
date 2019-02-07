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
	<link href="<?=site_url('assets/js/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/js/vendors/slick-carousel/slick/slick.css')?>" rel="stylesheet">
	<link href="<?=site_url('assets/css/core.css')?>" rel="stylesheet">
	<script type="text/javascript">var base_url = "<?=site_url()?>";</script>
</head>

<body class="menu-position-side menu-side-left full-screen with-content-panel">
	<div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>
	<div class="all-wrapper with-side-panel solid-bg-all content-panel-hidden">
		<div aria-hidden="true" id="m-e-pg" class="onboarding-modal modal fade animated" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-lg modal-centered" role="document">
                <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span class="close-label">Close</span><span
                            class="os-icon os-icon-close"></span></button>
                    <?=form_open('programmes/update','id="prog_c_f"')?>
                    <div class="onboarding-slider-w">
                        <div class="onboarding-slide">
                            <div class="onboarding-content with-gradient text-center">
                                <h4 class="onboarding-title">Edit Programme</h4>
                                <div class="onboarding-text">Edit Selected ICP Programme.</div>

                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span>Basic Information</span></legend>
                                            <div class="row text-left">
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Programme Name</label>
                                                        <input class="form-control" name="prog_name"
                                                            placeholder="Enter ICP Programme Title/Name.." value="<?=$programme[0]->prog_name?>" type="text">
                                                        <div class="error-prog_name form-text with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for=""> Programme Description</label>
                                                        <textarea rows="5" name="prog_desc" class="form-control"
                                                            placeholder="Enter Programme Description.."><?=$programme[0]->prog_desc?></textarea>
                                                        <div class="error-prog_desc form-text with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="onboarding-slide">
                            <div class="onboarding-content with-gradient text-center">
                                <h4 class="onboarding-title">Programme Information</h4>
                                <div class="onboarding-text">Edit Selected ICP Programme.</div>

                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span>Procurement Information</span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for=""> Procurement Value</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <?php foreach($currency as $c){ ?>
																	<input type="hidden" name="currency_code" value="<?=$programme[0]->currency_code_id?>" />
																	<input type="hidden" name="prog_id" value="<?=$programme[0]->prog_id?>" />
																	<div class="input-group-text"> <?=$programme[0]->cur_code_name?></div>
                                                                <?php } ?>
                                                            </div>
                                                            <input class="form-control" name="proc_value"
                                                                placeholder="Enter Procurement Value.." type="text" value="<?=ltrim($programme[0]->proc_value, 'RM')?>">
                                                            <div class="input-group-append">
                                                                <select class="form-control" name="currency_scale">
                                                                    <?php foreach($cscale as $scale){ ?>
                                                                    <option value="<?=$scale->cur_scale_id?>" <?=($scale->cur_scale_id == $programme[0]->currency_scale_id) ? 'selected': '' ?>><?=$scale->cur_scale_name?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="error-proc_value form-text with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Procuring Agency</label>
                                                        <select class="form-control" id="s_agny" name="proc_agency">
                                                            <?php foreach($agencies as $agency){ ?>
                                                            <option value="<?=$agency->proc_agcy_id?>" <?=($agency->proc_agcy_id == $programme[0]->proc_agency_id) ? 'selected': '' ?>> <?=$agency->proc_agcy_name?> </option>
                                                            <?php } ?>
                                                        </select>
                                                        <div class="error-proc_agency form-text with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Sector</label>
                                                        <select class="form-control" id="s_sctr" name="proc_sector">
                                                            <option value="">--Select--</option>
															<?php foreach($sectors as $sector_id=>$sector_name){ ?>
                                                            <option value="<?=$sector_id?>" <?=($sector_id == $programme[0]->proc_sector_id) ? 'selected': '' ?>> <?=$sector_name?> </option>
                                                            <?php } ?>
                                                        </select>
                                                        <div class="error-proc_sector form-text with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="onboarding-slide">
                            <div class="onboarding-content with-gradient text-center">
                                <h4 class="onboarding-title">Programme Information</h4>
                                <div class="onboarding-text">Edit Selected ICP Programme.</div>
                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span>Schedule Information</span></legend>
                                            <div class="row text-left">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Programme Start Date (Planned)</label>
                                                        <input class="form-control start_date" name="prog_start_date" value="<?=date('d-M-Y', strtotime($programme[0]->prog_start_date))?>"
                                                            readonly placeholder="Enter ICP Programme Title/Name.."
                                                            type="text">
                                                        <div class="error-prog_start_date form-text with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Programme End Date (Planned)</label>
                                                        <input class="form-control end_date" name="prog_end_date" value="<?=date('d-M-Y', strtotime($programme[0]->prog_end_date))?>"
                                                            readonly placeholder="Enter ICP Programme Title/Name.."
                                                            type="text">
                                                        <div class="error-prog_end_date form-text with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="col-sm-12 text-right">
                                            <div class="form-buttons-w">
                                                <button class="btn btn-grey" data-dismiss="modal" type="button"><i
                                                        class="os-icon os-icon-x"></i> Cancel</button>
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="os-icon os-icon-navigation"></i> Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
		<div aria-hidden="true" id="m-c-pj" class="onboarding-modal modal fade animated" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
			<div class="modal-dialog modal-lg modal-centered" role="document">
				<div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
						 class="close-label">Close</span><span class="os-icon os-icon-close"></span></button>
					<div class="onboarding-slider-w">
						<div class="onboarding-slide">
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Propose New Project</h4>
								<div class="onboarding-text">Propose new project to claim your ICV. Please complete the basic information about the project.</div>
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
										<fieldset class="form-group mt-2">
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
														<input class="form-control" placeholder="Enter Reference No.." type="text">
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
											<!-- <div class="row">
												<div class="col-sm-12 col-md-12">
													<div class="form-group"><label for="">Project Type</label>
														<select class="form-control">
															<option>--Select--</option>
															<option>Direct</option>
															<option>Indirect</option>
														</select>
													</div>
												</div>
											</div> -->
										</fieldset>
									</div>
								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Project Information</h4>
								<div class="onboarding-text">Please add the Project Objective(s) and Project Description below.</div>
								<div class="row text-left">
									<div class="col-sm-12">
										<div class="form-group"><label for="">Project Objective (s)</label></div>
									</div>
									<div class="col-sm-4 text-left">
										<div class="form-check pb-2"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkOne">Localization/Subcontracting</label></div>
										<div class="form-check"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkTwo">Technology Transfer(s)</label></div>
									</div>
									<div class="col-sm-3 text-left">
										<div class="form-check pb-2"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkThree">Market Access</label></div>
										<div class="form-check"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkFour">Investments</label></div>
									</div>
									<div class="col-sm-5 text-left">
										<div class="form-check pb-2"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkFive">Training/Human Capital Development</label></div>
										<div class="form-check"><label class="form-check-label"><input class="form-control form-check-input" type="checkbox" id="checkSix">Others</label></div>
										<input class="form-control" id="objectiveDes" hidden placeholder="Please describe below.." type="text">
									</div>
								</div>
								<div class="row text-left mt-3">
									<div class="col-sm-12">
										<div class="form-group"><label for="">Project Description</label>
											<textarea rows="5" class="form-control" placeholder="Enter Project Description.."></textarea>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
							<div class="onboarding-content with-gradient">
								<h4 class="onboarding-title">Project Information</h4>
								<div class="onboarding-text">Please add the ICP Recipient Information below.</div>
								<div class="row">
									<div class="col-sm-6 text-left">
										<div class="pb-2 b-b"><span class="text-primary"><b>ICP RECIPIENT</b></div>
										<div class="form-group"><label for="">Name</label>
											<input class="form-control" placeholder="Enter Recipient Name.." type="text">
										</div>
										<div class="form-group">
											<label for="">Address</label>
											<textarea rows="3" class="form-control" placeholder="Enter Recipient Address.."></textarea>
										</div>
										<div class="form-group">
											<label for="">Contact Details</label>
											<input class="form-control mt-1" placeholder="Enter Contact Name.." type="text">
											<input class="form-control mt-1" placeholder="Enter Contact Number.." type="text">
											<input class="form-control mt-1" placeholder="Enter Contact E-mail.." type="text">
										</div>
									</div>
									<div class="col-sm-6 text-left">
										<div class="pb-2 b-b"><span class="text-primary"><b>ICP PROVIDER</b></div>
										<div class="form-group">
											<label for="">Name</label>
											<b class="font d-block">MMC GAMUDA KVMRT (T) SDN BHD<span class="small"> (Generated)</span></b>
										</div>
										<div class="form-group">
											<label for="">Address</label>
											<b class="font d-block">Level 3A-3, Corporate Building (Block E) Pusat Komersial Southgate No.2, Jalan Chan Sow Lin, Off, Jalan Dua, 55200 Kuala Lumpur<span class="small"> (Generated)</span></b>
										</div>
										<div class="form-group">
											<label for="">Contact Details</label>
											<b class="font d-block">Ting Sheng Chong<br> 03-2385 8000<br> ting_sheng@mmc-gamuda.my<span class="small"> (Generated)</span></b>
										</div>
									</div>
									<div class="col-sm-12 text-right">
										<div class="form-buttons-w">
											<button class="btn btn-grey"  data-dismiss="modal" type="button"><i class="os-icon os-icon-x"></i> Cancel</button>
											<button class="btn btn-primary" type="button"><i class="os-icon os-icon-navigation"></i> Save</button>
										</div>
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
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar1.png')?>)"></div>
								<div class="item-name">John Ma<span>yer</span>s</div>
							</a><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar2.png')?>)"></div>
								<div class="item-name">Th<span>omas</span> Mullier</div>
							</a><a class="ssg-item" href="users_profile_big.html">
								<div class="item-media" style="background-image: url(<?=site_url('assets/img/avatar3.png')?>)"></div>
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
                        <div class="avatar-w"><img alt="" src="<?=site_url('assetsimg/avatar1.png')?>"></div>
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
								<div class="fs-name"><?=$programme[0]->prog_name?></div>
								<div class="fs-sub"><span>PROJECTS :</span><strong>00</strong></div>
							</div>
							<div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div>
						</div>
						<div class="fancy-selector-options">
							<?php foreach ($programmes as $prog) { ?>
								<?php $words = explode(" ", $prog->proc_agcy_name);
									$acronym = "";

									foreach ($words as $w) {
									$acronym .= strtolower($w[0]);
								} ?>
								<a href="<?=site_url('programmes/tda-prog-'.$acronym.'-'.str_pad($prog->proc_sector_id, 2, "0", STR_PAD_LEFT).'-'.$prog->prog_id.'-'.date('Y', strtotime($prog->created_at)))?>" class="fancy-selector-option <?=($prog->prog_id == $programme[0]->prog_id) ? 'active': ''?>">
									<div class="fs-main-info">
										<div class="fs-name"><?=$prog->prog_name?></div>
										<div class="fs-sub"><span>PROJECTS :</span><strong>00</strong></div>
									</div>
								</a>
							<?php  } ?>
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
											<div class="user-avatar-w"><img alt="" src="img/avatar1.png"></div>
											<div class="message-content">
												<h6 class="message-from">John Mayers</h6>
												<h6 class="message-title">Account Update</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar2.png"></div>
											<div class="message-content">
												<h6 class="message-from">Phil Jones</h6>
												<h6 class="message-title">Secutiry Updates</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar3.png"></div>
											<div class="message-content">
												<h6 class="message-from">Bekky Simpson</h6>
												<h6 class="message-title">Vacation Rentals</h6>
											</div>
										</a></li>
									<li><a href="#">
											<div class="user-avatar-w"><img alt="" src="img/avatar4.png"></div>
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
								<div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.png')?>"></div>
								<div class="logged-user-menu color-style-bright">
									<div class="logged-user-avatar-info">
										<div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.png')?>"></div>
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
				<!--------------------
				START - Breadcrumbs
				-------------------->
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes')?>"><i class="os-icon os-icon-home"></i></a></li>
					<li class="breadcrumb-item"><span><?=$programme[0]->prog_name?></span></li>
				</ul>
				<!--------------------
				END - Breadcrumbs
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
													<a class="btn btn-primary btn-block" data-target="#m-e-pj" data-toggle="modal" href="#"><i class="os-icon os-icon-plus-circle"></i><span>New
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
																	<h4 class="ticket-header"><?=$programme[0]->prog_name?></h4>
																	<a class="back-to-index" href="#"><i class="os-icon os-icon-arrow-left5"></i><span>Back</span></a><a
																	 class="show-ticket-info" href="#"><span>Show Details</span><i class="os-icon os-icon-documents-03"></i></a>
																</div>
																<hr>
																<div class="d-block btn-group text-right"><a class="btn btn-primary" data-target="#m-e-pg" data-toggle="modal" href="#"><i class="os-icon os-icon-edit"></i></a><a class="btn btn-danger" href="#"><i class="os-icon os-icon-ui-15"></i></a></div>
																<div class="ticket-thread">
																	<div class="ticket-reply">
																		<div class="ticket-reply-info"><div class="text-primary"><span>Programme Description : </span></div></div>
																		<div class="ticket-reply-content">
																			<p><?=$programme[0]->prog_desc?></p>
																		</div>
																		<div class="ticket-attachments">
																			<a class="attachment" href="#">
																				<i class="os-icon os-icon-ui-51"></i><span>Programme-detail.pdf</span>
																			</a>
																		</div>
																		<div class="row">
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info"><div><span class="text-primary">Procuring Agency : </span><b><?=$programme[0]->proc_agcy_name?></b></div></div>
																			</div>
																			<div class="col-sm-12 col-md-6">
																				<div class="ticket-reply-info"><div><span class="text-primary">Sector : </span><b><?=$programme[0]->proc_agcy_sec_name?></b></div></div>
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
																				<div class="ticket-reply-info"><div><span class="text-primary">Programme Start Date (Planned) : </span><b><?=date('jS, F Y', strtotime($programme[0]->prog_start_date))?></b></div></div>
																				<div class="ticket-reply-info"><div><span class="text-primary">Programme End Date (Planned) : </span><b><?=date('jS, F Y', strtotime($programme[0]->prog_end_date))?></b></div></div>
																			</div>
																		</div>
																		
																	</div>
																</div>
															</div>
															<div class="support-ticket-info"><a class="close-ticket-info" href="#"><i class="os-icon os-icon-ui-23"></i></a>
																<div class="customer">
																	<h4 class="customer-name"><?=$programme[0]->proc_value?> <?=$programme[0]->cur_scale_name?></h4>
																	<div class="customer-tickets">Procurement Value</div>
																</div>
																<h5 class="info-header">Programme Details</h5>
																<div class="info-section text-center">
																	<div class="label">Created On: <strong class="ml-1"><?=date('jS, F Y', strtotime($programme[0]->created_at))?></strong></div>
																	<div class="label">Created By: <strong class="ml-1">-</strong></div>
																	<div class="label">Type: <div class="badge badge-success ml-1">ICP Programme</div></div>
																</div>
																<h5 class="info-header">Projects Details (00)</h5>
																<div class="info-section">
																	<ul class="users-list as-tiles">
                                                                        <li><a class="author with-avatar" href="#">
                                                                            <div class="avatar font-2p4">00</div><span>New</span>
                                                                                </a>
                                                                        </li>
																		<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">00</div><span>Approved</span>
																			</a></li>
																		<li><a class="author with-avatar" href="#">
                                                                        <div class="avatar font-2p4">00</div><span>In Progress</span>
																			</a></li>
																		<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">00</div><span>Completed</span>
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
																	<td class="text-center"><strong>-</strong></td>
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
																		<!-- <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a> -->
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
																		<!-- <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a> -->
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
																		<!-- <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a> -->
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
																		<!-- <a class="danger" href="#"><i class="os-icon os-icon-ui-15"></i></a> -->
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
																<div class="ta-activity">Uploaded Evidence of Activity for <a href="#">Production of TBM Parts in Malaysia</a></div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>2:34</strong> pm</div>
																<div class="ta-activity">Updated ICV Calculation for <a href="#">Production of TBM Parts in Malaysia</a></div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>7:12</strong> pm</div>
																<div class="ta-activity">Status of the project <a href="#">Steel Fibre Reinforced Concrete (SFRC) Tunnel Linings</a> changed from <span class="badge badge-info">PROPOSED</span> to <span class="badge badge-success">APPROVED</span></div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:39</strong> pm</div>
																<div class="ta-activity">Schedule A Approved for <a href="#">Steel Fibre Reinforced Concrete (SFRC) Tunnel Linings</a></div>
															</div>
														</div>
													</div>
													<div class="timed-activity">
														<div class="ta-date"><span>3rd Feb, 2017</span></div>
														<div class="ta-record-w">
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:32</strong> pm</div>
																<div class="ta-activity">Updated ICV Calculation for <a href="#">Production of TBM Parts in Malaysia</a></div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>5:14</strong> pm</div>
																<div class="ta-activity">TDA <a href="#">Commented</a> on the project <a href="#">Production of TBM Parts in Malaysia</a>
																	category</div>
															</div>
														</div>
													</div>
													<div class="timed-activity">
														<div class="ta-date"><span>21st Jan, 2017</span></div>
														<div class="ta-record-w">
															<div class="ta-record">
																<div class="ta-timestamp"><strong>11:55</strong> am</div>
																<div class="ta-activity">Schedule A Submitted for the project <a href="#">Production of TBM Parts in Malaysia</a></div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>2:34</strong> pm</div>
																<div class="ta-activity">Added project benefits for<a href="#">Steel Fibre Reinforced Concrete (SFRC) Tunnel Linings</a> 
																	category</div>
															</div>
															<div class="ta-record">
																<div class="ta-timestamp"><strong>9:39</strong> pm</div>
																<div class="ta-activity">Initiated A Project called <a href="#">Steel Fibre Reinforced Concrete (SFRC) Tunnel Linings</a> under Programme 
																<a href="#">TUNNELING AND UNDERGROUND WORKS (MMC GAMUDA)</a>
																</div>
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
                            <h6 class="element-header">Programme Type</h6>
                            <div class="element-box-tp">
                                <div class="col-sm-12">
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" name="cb01" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Economic Enhancement Programme (EEP)</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" name="cb02" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Direct Offset</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" name="cb03" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">Indirect Offset</label>
                                    </div>              
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
												<div class="activity-role"><strong class="font-p72">500 Mil - 1 Bil <span class="ls-1"></span></strong></div>
											</div>
										</div>
									</div>
									<div class="activity-box-w">
										<div class="activity-time"></div>
										<div class="activity-box">
											<div class="activity-info">
												<div class="activity-role"><strong class="font-p72">1 Mil - 99 Bil <span class="ls-1">(1)</span></strong></div>
											</div>
										</div>
									</div>
									<div class="activity-box-w">
										<div class="activity-time">LOW</div>
										<div class="activity-box">
											<div class="activity-info">
												<div class="activity-role"><strong class="font-p72">100 Mil - 500 MIl <span class="ls-1">(3)</span></strong></div>
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
    <script src="<?=site_url('assets/js/vendors/pikaday/pikaday.min.js')?>"></script>
	<script src="<?=site_url('assets/js/vendors/bootstrap-validator/dist/validator.min.js')?>"></script>
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
	<script src="<?=site_url('assets/js/customizer.js')?>"></script>
	<script src="<?=site_url('assets/js/app.js')?>"></script>
	<?php if(isset($page_js)){ ?>
    	<script src="<?=site_url('assets/js/pages/').$page_js.'.js'?>"></script>
    <?php } ?>
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
