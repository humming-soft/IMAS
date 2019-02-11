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
					<?=form_open('programmes/'.$p_ref.'/create','id="proj_cu_f"')?>
					<div class="onboarding-slider-w">
						<div class="onboarding-slide">
							<div class="onboarding-content with-gradient text-center">
								<h4 class="onboarding-title">Propose New Project</h4>
								<div class="onboarding-text">Propose new project to claim your ICV. Please complete the basic information about the project.</div>
								<div class="row text-left">
									<div class="col-sm-12 col-md-12">
										<div class="form-group">
											<label for="">Programme Name</label>
											<b class="font d-block"><?=$programme[0]->prog_name?></b>
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
														<input class="form-control" placeholder="Enter Project Title/Name.." name="proj_name" type="text">
														<div class="error-proj_name form-text with-errors"></div>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group">
														<label for="">Reference Number</label>
														<input class="form-control" name="proj_ref_no" placeholder="Enter Reference No.." type="text">
														<div class="error-proj_ref_no form-text with-errors"></div>
													</div>
												</div>
												<div class="col-sm-12 col-md-6">
													<div class="form-group"><label for="">Project Type</label>
														<select class="form-control" name="proj_type">
															<option value="">--Select--</option>
															<?php foreach($proj_types as $proj_type){ ?>
                                                            <option value="<?=$proj_type->proj_type_id?>"><?=$proj_type->proj_type?></option>
                                                            <?php } ?>
														</select>
														<div class="error-proj_type form-text with-errors"></div>
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
								<h4 class="onboarding-title">Project Information</h4>
								<div class="onboarding-text">Please add the Project Objective(s) and Project Description below.</div>
								<div class="row text-left">
									<div class="col-sm-12">
										<div class="form-group"><label for="">Project Objective (s)</label></div>
									</div>
									<?php foreach($proj_objetives as $proj_objetive){ ?>
										<div class="col-sm-6 text-left">
											<div class="form-check pb-2"><label class="form-check-label"><input class="form-control form-check-input" name="proj_obj[]" value="<?=$proj_objetive->obj_id?>" type="checkbox" id="checkOne"><?=$proj_objetive->obj_name?></label></div>									
										</div>
									<?php } ?>
									<div class="col-sm-12 text-left">
										<div class="form-check"><label class="form-check-label"><input class="form-control form-check-input" name="proj_obj[]" value="0" type="checkbox" id="checkSix">Others</label></div>
										<input class="form-control" id="objectiveDes" name="proj_obj_other" hidden placeholder="Please describe here.." type="text">
										<div class="error-proj_obj_other form-text with-errors"></div>
										<div class="error-proj_obj form-text with-errors"></div>
									</div>
								</div>
								<div class="row text-left mt-3">
									<input type="hidden" name="prog_id" value="<?=$programme[0]->prog_id?>"/>
									<div class="col-sm-12">
										<div class="form-group"><label for="">Project Description</label>
											<textarea rows="5" class="form-control" name="proj_desc" placeholder="Enter Project Description.."></textarea>
											<div class="error-proj_desc form-text with-errors"></div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-content with-gradient text-center">
								<h4 class="onboarding-title">Project Information</h4>
								<div class="onboarding-text">Please add the ICP Recipient Information below.</div>
								<div class="row">
									<div class="col-sm-12 text-left">
										<div class="pb-2 b-b"><span class="text-primary"><b>ICP RECIPIENT</b></div>
										<div class="form-group pt-2"><label for="">Name</label>
											<input class="form-control" name="proj_rec_name" placeholder="Enter Recipient Name.." type="text">
											<div class="error-proj_rec_name form-text with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 text-left">
										<div class="form-group">
											<label for="">Address</label>
											<input class="form-control mt-1" name="proj_rec_addr_line1" placeholder="Address line 1" type="text">
											<div class="error-proj_rec_addr_line1 form-text with-errors"></div>
											<input class="form-control mt-1" name="proj_rec_addr_line2" placeholder="Address line 2" type="text">
											<div class="error-proj_rec_addr_line2 form-text with-errors"></div>
											<input class="form-control mt-1" name="proj_rec_addr_line3" placeholder="Address line 3" type="text">
										</div>
									</div>
									<div class="col-sm-6 text-left">
										<div class="form-group">
											<label for="">Contact Details</label>
											<input class="form-control mt-1" name="proj_rec_cont_name" placeholder="Enter Contact Name.." type="text">
											<div class="error-proj_rec_cont_name form-text with-errors"></div>
											<input class="form-control mt-1" name="proj_rec_cont_no" placeholder="Enter Contact Number.." type="text">
											<div class="error-proj_rec_cont_no form-text with-errors"></div>
											<input class="form-control mt-1" name="proj_rec_cont_email" placeholder="Enter Contact E-mail.." type="text">
											<div class="error-proj_rec_cont_email form-text with-errors"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="onboarding-slide">
							<div class="onboarding-content with-gradient text-center">
								<h4 class="onboarding-title">Project Information</h4>
								<div class="onboarding-text">Please add the ICP Recipient Information below.</div>
								<div class="row">
									<div class="col-sm-12 text-left pb-2">
										<div class="pb-2 b-b"><span class="text-primary"><b>ICP PROVIDER</b></div>
									</div>
									<div class="col-sm-8 text-left">
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
											<button class="btn btn-primary" type="submit"><i class="os-icon os-icon-navigation"></i> Save</button>
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
		<div aria-hidden="true" class="onboarding-modal modal fade animated" id="m-d-pg" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
			<div class="modal-dialog modal-centered" role="document">
				<div class="modal-content">
					<div class="modal-header faded smaller">
						<div class="modal-title"><strong>Confirmation</strong></div><button aria-label="Close" class="close"
							data-dismiss="modal" type="button"><span aria-hidden="true">
								&times;</span></button>
					</div>
					<?=form_open('programmes/delete','id="prog_d_f"')?>	
					<div class="modal-body">						
						<div>Deleting Programme (<?=$programme[0]->prog_name?>) will remove all the associated projects. Continue?</div>								
					</div>
					<div class="modal-footer buttons-on-right">
						<button class="btn btn-danger" type="submit">Delete</button>
						<input type="hidden" name="prog_id" value="<?=$programme[0]->prog_id?>" />
						<button class="btn btn-link" data-dismiss="modal" type="button"> Cancel</button>
					</div>
					<?=form_close()?>		
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
			</div>
			<div class="content-w">
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
								<div class="fs-sub"><span>PROJECTS :</span><strong><?=str_pad($programme[0]->no_proj, 2, "0", STR_PAD_LEFT)?></strong></div>
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
										<div class="fs-sub"><span>PROJECTS :</span><strong><?=str_pad($prog->no_proj, 2, "0", STR_PAD_LEFT)?></strong></div>
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
						<?php if(isset($message) && !empty($message)){ ?>
							<div
								class="alert <?=$type == 1 ? " alert-success" : "alert-danger" ; ?> alert-dismissible">
								<button aria-label="Close" class="close" data-dismiss="alert" type="button">
									<span aria-hidden="true"> ×</span>
								</button>
								<?=$message; ?>
							</div>
						<?php } ?>
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
													<a class="btn btn-primary btn-block" data-target="#m-c-pj" data-toggle="modal" href="#"><i class="os-icon os-icon-plus-circle"></i><span>New
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
																<div class="d-block btn-group text-right"><a class="btn btn-primary" data-target="#m-e-pg" data-toggle="modal" href="#"><i class="os-icon os-icon-edit"></i></a><a class="btn btn-danger" data-target="#m-d-pg" data-toggle="modal" href="#"><i class="os-icon os-icon-ui-15"></i></a></div>
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
																	<div class="label">Status: <div class="badge badge-outline-primary ml-1"><?=$programme[0]->prog_progress_status?></div></div>
																</div>
																<h5 class="info-header">Programme Progress</h5>
																<div class="info-section">
																	<div class="fancy-progress-with-label">
																		<div class="fpl-label">0%</div>
																		<div class="fpl-progress-w">
																			<div class="fpl-progress-i" style="width: 0%;"></div>
																		</div>
																	</div>
																</div>
																<h5 class="info-header">Projects Details (<?=str_pad($programme[0]->no_proj, 2, "0", STR_PAD_LEFT)?>)</h5>
																<div class="info-section">
																	<ul class="users-list as-tiles">
																		<?php foreach($programme[0]->no_proj_status as $status_count){ ?>
																			<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4"><?=str_pad($status_count->count, 2, "0", STR_PAD_LEFT)?></div><span><?=$status_count->proj_progress_status?></span>
																					</a>
																			</li>
																			<!-- Must Remove In Production -->
																			<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">00</div><span>Approved</span>
																					</a>
																			</li>
																			<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">00</div><span>In Progress</span>
																					</a>
																			</li>
																			<li><a class="author with-avatar" href="#">
																				<div class="avatar font-2p4">00</div><span>Completed</span>
																					</a>
																			</li>
																		<?php } ?>
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
														<table class="table table-padded table-togglable">
															<thead>
																<tr>
																	<th>#</th>
																	<th data-toggle="true">Name</th>
																	<th data-hide="phone">Type</th>
																	<th data-hide="phone">Total ICV</th>
																	<th class="text-center" data-hide="phone">Objective</th>
																	<th data-hide="phone">Progress</th>
																	<th data-hide="phone">Status</th>
																	<th data-hide="phone">View</th>
																</tr>
															</thead>
															<tbody>
															<?php $n = 1; foreach($projects as $project) { ?>
																<tr>
																	<td class="text-center">#<?=$n?></td>
																	<td>
																		<div class="text-primary"><b><?=$project->proj_name?></b></div>
																		<div class="d-block">
																			<div class="label text-dark">Ref.No. : <b class="font"><?=$project->proj_ref_no?></b></div>
																		</div>
																	</td>
																	<td><?=$project->proj_type?></td>
																	<td class="text-center"><strong>-</strong></td>
																	<td>
																		<?php $obj_count = count($project->proj_objs);
																			for($x= 0; $x < $obj_count; $x++){ 
																			if($obj_count >2 && $x >0){ ?>																			
																			<div class="d-block">-<?=$project->proj_objs[$x]->proj_obj?><a class="ml-1" href="<?=site_url($this->uri->uri_string().'/'.$project->id_encoded)?>">[<?=$obj_count-2?>+]</a>
																		<?php }else{ ?>
																			<div class="d-block">-<?=$project->proj_objs[$x]->proj_obj?></div>
																		<?php }} ?>
																	</td>
																	<td class="text-center">-</td>
																	<td class="nowrap"><span class="badge badge-secondary"><?=$project->proj_progress_status?></span></td>
																	<td class="row-actions">
																		<a href="<?=site_url($this->uri->uri_string().'/'.$project->id_encoded)?>"><i class="os-icon os-icon-grid-10"></i></a>
																	</td>
																</tr>
															<?php $n++; } ?>
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
	<script src="<?=site_url('assets/js/vendors/footable/footable.min.js')?>"></script>
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
