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
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div aria-hidden="true" class="onboarding-modal modal fade animated" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-lg modal-centered" role="document">
                <div class="modal-content text-center"><button aria-label="Close" class="close" data-dismiss="modal"
                        type="button"><span class="close-label"><?=$this->lang->line('btn_close')?></span><span
                            class="os-icon os-icon-close"></span></button>
                    <?=form_open_multipart('programmes/create','id="prog_c_f" data-toggle="validator"')?>
                    <div class="onboarding-slider-w">
                        <div class="onboarding-slide">

                            <div class="onboarding-content with-gradient text-center">
                                <h4 class="onboarding-title"><?=$this->lang->line('prog_create_header_label')?></h4>
                                <div class="onboarding-text"><?=$this->lang->line('prog_create_subheader_label')?></div>

                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span><?=$this->lang->line('prog_create_p1_leg_label')?></span></legend>
                                            <div class="row text-left">
                                                <div class="col-sm-8 col-md-8">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cpn_label')?></label>
                                                        <input class="form-control" name="prog_name" minlength="5" maxlength="100"
                                                            placeholder="<?=$this->lang->line('prog_cpn_ph_label')?>" type="text" required>
                                                        <div class="error-prog_name form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 col-md-4">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cpd_label1')?></label>
                                                        <input type="file" class="" id="prog_image" name="prog_image">
                                                        <div class="error-prog_name form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for=""><?=$this->lang->line('prog_cpd_label')?></label>
                                                        <textarea rows="5" name="prog_desc" class="form-control" required minlength="5" maxlength="220"
                                                            placeholder="<?=$this->lang->line('prog_cpd_ph_label')?>"></textarea>
                                                        <div class="error-prog_desc form-text help-block with-errors"></div>
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
                                <h4 class="onboarding-title"><?=$this->lang->line('prog_create_header_label')?></h4>
                                <div class="onboarding-text"><?=$this->lang->line('prog_create_subheader_label')?></div>

                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span><?=$this->lang->line('prog_create_p2_leg_label')?></span></legend>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group"><label for=""><?=$this->lang->line('prog_cpv_label')?></label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <?php foreach($currency as $c){ ?>
																	<input type="hidden" name="currency_code" value="<?=$c->cur_code_id?>" />
																	<div class="input-group-text"> <?=$c->cur_code_name?></div>
                                                                <?php } ?>
                                                            </div>
                                                            <input class="form-control" name="proc_value" pattern="^\d*\.?\d*$" required 
                                                                placeholder="<?=$this->lang->line('prog_cpv_ph_label')?>" type="text">
                                                            <div class="input-group-append">
                                                                <select class="form-control" name="currency_scale">
                                                                    <?php foreach($cscale as $scale){ ?>
                                                                    <option value="<?=$scale->cur_scale_id?>"><?=$scale->cur_scale_name?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="error-proc_value form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row text-left">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cpa_label')?></label>
                                                        <select class="form-control" id="s_agny" name="proc_agency" required>
                                                            <option value=""><?=$this->lang->line('prog_cp_select_label')?></option>
                                                            <?php foreach($agencies as $agency){ ?>
                                                            <option value="<?=$agency->proc_agcy_id?>">
                                                                <?=$agency->proc_agcy_name?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                        <div class="error-proc_agency form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cps_label')?></label>
                                                        <select class="form-control" id="s_sctr" name="proc_sector"
                                                            disabled required data-validate="true">
                                                            <option value=""><?=$this->lang->line('prog_cp_select_label')?></option>
                                                        </select>
                                                        <div class="error-proc_sector form-text help-block with-errors"></div>
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
                            <h4 class="onboarding-title"><?=$this->lang->line('prog_create_header_label')?></h4>
                                <div class="onboarding-text"><?=$this->lang->line('prog_create_subheader_label')?></div>
                                <div class="row text-left">
                                    <div class="col-sm-12 col-md-12">
                                        <fieldset class="form-group mt-2">
                                            <legend><span><?=$this->lang->line('prog_create_p3_leg_label')?></span></legend>
                                            <div class="row text-left">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cpsd_label')?></label>
                                                        <input class="form-control start_date" name="prog_start_date" required
                                                            readonly placeholder="<?=$this->lang->line('prog_cpsd_ph_label')?>"
                                                            type="text">
                                                        <div class="error-prog_start_date form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for=""><?=$this->lang->line('prog_cped_label')?></label>
                                                        <input class="form-control end_date" name="prog_end_date" required
                                                            readonly placeholder="<?=$this->lang->line('prog_cped_ph_label')?>"
                                                            type="text">
                                                        <div class="error-prog_end_date form-text help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="col-sm-12 text-right">
                                            <div class="form-buttons-w">
                                                <button class="btn btn-grey" data-dismiss="modal" type="button"><i
                                                        class="os-icon os-icon-x"></i> <?=$this->lang->line('btn_close')?></button>
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="os-icon os-icon-navigation"></i> <?=$this->lang->line('btn_submit')?></button>
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
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search..."
                        type="text">
                    <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div>
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
                                <div class="item-media"
                                    style="background-image: url(<?=site_url('assets/img/company6.png')?>)"></div>
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
                                <div class="item-media"
                                    style="background-image: url(<?=site_url('assets/img/avatar1.png')?>)"></div>
                                <div class="item-name">John Ma<span>yer</span>s</div>
                            </a><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media"
                                    style="background-image: url(<?=site_url('assets/img/avatar2.png')?>)"></div>
                                <div class="item-name">Th<span>omas</span> Mullier</div>
                            </a><a class="ssg-item" href="users_profile_big.html">
                                <div class="item-media"
                                    style="background-image: url(<?=site_url('assets/img/avatar3.png')?>)"></div>
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
                <div class="mm-logo-buttons-w"><a class="mm-logo" href="index.html"><img
                            src="<?=site_url('assets/img/logo.png')?>">
                        <span>IMAS</span></a>
                    <div class="mm-buttons">
                        <div class="content-panel-open">
                            <div class="os-icon os-icon-grid-circles"></div>
                        </div>
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
                    <div class="top-menu-controls">
                        <div class="messages-notifications os-dropdown-trigger os-dropdown-position-left"><i
                                class="os-icon os-icon-mail-14"></i>
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
                        <div class="top-icon top-settings os-dropdown-trigger os-dropdown-position-left"><i
                                class="os-icon os-icon-ui-46"></i>
                            <div class="os-dropdown">
                                <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
                                <ul>
                                    <li><a href="users_profile_small.html"><i
                                                class="os-icon os-icon-ui-49"></i><span>Profile
                                                Settings</span></a></li>
                                    <li><a href="users_profile_small.html"><i
                                                class="os-icon os-icon-grid-10"></i><span>Billing
                                                Info</span></a></li>
                                    <li><a href="users_profile_small.html"><i class="os-icon os-icon-ui-44"></i><span>My
                                                Invoices</span></a></li>
                                    <li><a href="users_profile_small.html"><i
                                                class="os-icon os-icon-ui-15"></i><span>Cancel
                                                Account</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="logged-user-w">
                            <div class="logged-user-i">
                                <div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.png')?>"></div>
                                <div class="logged-user-menu color-style-bright">
                                    <div class="logged-user-avatar-info">
                                        <div class="avatar-w"><img alt="" src="<?=site_url('assets/img/avatar1.png')?>">
                                        </div>
                                        <div class="logged-user-info-w">
                                            <div class="logged-user-name">Maria Gomez</div>
                                            <div class="logged-user-role">Administrator</div>
                                        </div>
                                    </div>
                                    <div class="bg-icon"><i class="os-icon os-icon-wallet-loaded"></i></div>
                                    <ul>
                                        <li><a href="apps_email.html"><i
                                                    class="os-icon os-icon-mail-01"></i><span>Incoming
                                                    Mail</span></a></li>
                                        <li><a href="users_profile_big.html"><i
                                                    class="os-icon os-icon-user-male-circle2"></i><span>Profile
                                                    Details</span></a></li>
                                        <li><a href="users_profile_small.html"><i
                                                    class="os-icon os-icon-coins-4"></i><span>Billing
                                                    Details</span></a></li>
                                        <li><a href="#"><i
                                                    class="os-icon os-icon-others-43"></i><span>Notifications</span></a>
                                        </li>
                                        <li><a href="<?=site_url('logout')?>"><i
                                                    class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
                </div>
                <div class="content-i">
                    <div class="content-box">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-actions">

<!-- ANCY START TOGGLER-->
                                        <div class="floated-colors-btn second-floated-btn">
                                            <span class="listGrid">Grid</span>
                                            <div class="os-toggler-w">
                                                <div class="os-toggler-i">
                                                    <a href="./list"><div class="os-toggler-pill"></div></a>
                                                </div>
                                            </div>
                                            <span class="listGrid">List</span></div>


<!-- ANCY END TOGGLER-->
                                        <form class="form-inline justify-content-sm-end btn-block">
                                            <a class="btn btn-primary" data-target=".onboarding-modal" data-toggle="modal" href="#"><i class="os-icon os-icon-plus-circle"></i><span><?=$this->lang->line('prog_create_new_label')?></span></a>
											<!-- <a class="btn btn-success" href="#"><i class="os-icon os-icon-sliders"></i><span> Filter</span></a> -->
                                        </form>
                                        <!-- <div class="btn-group btn-group-sm">
											<a href="#" class="btn btn-primary">List</a>
											<a href="#" class="btn btn-outline-primary">Grid</a>
										</div> -->
                                    </div>
                                    <h6 class="element-header text-uppercase"><?=$this->lang->line('prog_header_label')?></h6>
                                    <!-- <div class="centered-load-more-link text-right"><a href="#" class="content-panel-open"><span>Show Filter</span><i class="os-icon os-icon-documents-03"></i></a></div> -->
                                    <?php if(isset($message) && !empty($message)){ ?>
                                    <div
                                        class="alert <?=$type == 1 ? " alert-success" : "alert-danger" ; ?> alert-dismissible">
                                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                                            <span aria-hidden="true"> ×</span>
                                        </button>
                                        <?=$message; ?>
                                    </div>
                                    <?php } ?>
                                    <div class="row">
                                        <?php if(count($programmes)> 0){
											foreach($programmes as $programme){ ?>
                                        <div class="col-sm-6">
                                            <div class="element-box-tp">
                                                <div class="post-box">
                                                    <div class="post-content">
                                                        <h6 class="post-title">
                                                            <?=$programme->prog_name?>
                                                        </h6>
                                                        <div class="post-text pt-3">
                                                            <?=$programme->prog_desc?>
                                                        </div>
                                                        <div class="row pb-2">
                                                            <div class="col-6 b-r b-b">
                                                                <div
                                                                    class="el-tablo centered padded-v-big highlight bigger">
                                                                    <div class="label"><?=$this->lang->line('prog_proc_label')?></div>
                                                                    <div class="value pv_pi">
                                                                        <?=$programme->proc_value?>
                                                                        <?=$programme->cur_scale_name?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 b-b">
                                                                <div
                                                                    class="el-tablo centered padded-v-big highlight bigger">
                                                                    <div class="label"><?=$this->lang->line('prog_prj_ident_label')?></div>
                                                                    <div class="value pv_pi"><?=str_pad($programme->no_proj, 2, "0", STR_PAD_LEFT)?></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row pb-2">
                                                            <div class="col-sm-12 col-md-12">
                                                                <div class="os-progress-bar danger">
                                                                    <div class="bar-labels">
                                                                        <div class="bar-label-left"><span
                                                                                class="font-p9"><?=$this->lang->line('prog_progress_label')?></span></div>
                                                                        <div class="bar-label-right"><span
                                                                                class="text-success font-p9">0%</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="bar-level-1" style="width: 100%">
                                                                        <div class="bar-level-3 height-1"
                                                                            style="width: 0%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="post-foot b-t pt-2">
                                                            <div class="post-tags">
                                                            <?=$this->lang->line('prog_status_label')?> :
                                                                <div class="badge badge-outline-primary">
                                                                    <?=$programme->prog_progress_status?>
                                                                </div>
                                                            </div>
															<?php $words = explode(" ", $programme->proc_agcy_name);
																$acronym = "";

																foreach ($words as $w) {
																$acronym .= strtolower($w[0]);
															} ?>
                                                            <a class="btn btn-primary"
                                                                href="<?=site_url('programmes/tda-prog-'.$acronym.'-'.str_pad($programme->proc_sector_id, 2, "0", STR_PAD_LEFT).'-'.$programme->prog_id.'-'.date('Y', strtotime($programme->created_at)))?>"><span><?=$this->lang->line('prog_detail_label')?></span><i
                                                                    class="os-icon os-icon-arrow-2-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }}else{ ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="350px" viewBox="0 0 959.88 716.16">
                                            <g id="Layer_2" data-name="Layer 2">
                                                <g id="Layer_1-2" data-name="Layer 1">
                                                    <image width="256" height="191" transform="scale(3.75)" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQAAAAC/CAYAAAARmQJyAAAACXBIWXMAAAL0AAAC9AGAraxVAAA8MmlUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS42LWMwNjcgNzkuMTU3NzQ3LCAyMDE1LzAzLzMwLTIzOjQwOjQyICAgICAgICAiPgogICA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPgogICAgICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgICAgICAgICB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgICAgICAgICAgeG1sbnM6cGhvdG9zaG9wPSJodHRwOi8vbnMuYWRvYmUuY29tL3Bob3Rvc2hvcC8xLjAvIgogICAgICAgICAgICB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIKICAgICAgICAgICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIj4KICAgICAgICAgPHhtcDpDcmVhdG9yVG9vbD5BZG9iZSBQaG90b3Nob3AgQ0MgMjAxNSAoV2luZG93cyk8L3htcDpDcmVhdG9yVG9vbD4KICAgICAgICAgPHhtcDpDcmVhdGVEYXRlPjIwMTktMDItMDVUMTQ6MTc6MDkrMDg6MDA8L3htcDpDcmVhdGVEYXRlPgogICAgICAgICA8eG1wOk1vZGlmeURhdGU+MjAxOS0wMi0wNVQxOToxMjoxNSswODowMDwveG1wOk1vZGlmeURhdGU+CiAgICAgICAgIDx4bXA6TWV0YWRhdGFEYXRlPjIwMTktMDItMDVUMTk6MTI6MTUrMDg6MDA8L3htcDpNZXRhZGF0YURhdGU+CiAgICAgICAgIDxkYzpmb3JtYXQ+aW1hZ2UvcG5nPC9kYzpmb3JtYXQ+CiAgICAgICAgIDxwaG90b3Nob3A6Q29sb3JNb2RlPjM8L3Bob3Rvc2hvcDpDb2xvck1vZGU+CiAgICAgICAgIDxwaG90b3Nob3A6VGV4dExheWVycz4KICAgICAgICAgICAgPHJkZjpCYWc+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8cGhvdG9zaG9wOkxheWVyTmFtZT5OTyBQUk9HQU1NRVMgRk9VTkQhPC9waG90b3Nob3A6TGF5ZXJOYW1lPgogICAgICAgICAgICAgICAgICA8cGhvdG9zaG9wOkxheWVyVGV4dD5OTyBQUk9HQU1NRVMgRk9VTkQhPC9waG90b3Nob3A6TGF5ZXJUZXh0PgogICAgICAgICAgICAgICA8L3JkZjpsaT4KICAgICAgICAgICAgPC9yZGY6QmFnPgogICAgICAgICA8L3Bob3Rvc2hvcDpUZXh0TGF5ZXJzPgogICAgICAgICA8eG1wTU06SW5zdGFuY2VJRD54bXAuaWlkOmI5ZWFmYmNiLWRjOTUtNDI0OS1hMDNjLTJmYjRmMzI0ODE0ZDwveG1wTU06SW5zdGFuY2VJRD4KICAgICAgICAgPHhtcE1NOkRvY3VtZW50SUQ+YWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOmU1MTQwYjJmLTI5MzYtMTFlOS1iNmExLTg3MTJlZTNlMDI0NjwveG1wTU06RG9jdW1lbnRJRD4KICAgICAgICAgPHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD54bXAuZGlkOmViM2RlYTQyLTZmNDctYWM0Zi1hMjdmLWIyMDY4ZTg0YmIzMjwveG1wTU06T3JpZ2luYWxEb2N1bWVudElEPgogICAgICAgICA8eG1wTU06SGlzdG9yeT4KICAgICAgICAgICAgPHJkZjpTZXE+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPmNyZWF0ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0Omluc3RhbmNlSUQ+eG1wLmlpZDplYjNkZWE0Mi02ZjQ3LWFjNGYtYTI3Zi1iMjA2OGU4NGJiMzI8L3N0RXZ0Omluc3RhbmNlSUQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTktMDItMDVUMTQ6MTc6MDkrMDg6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChXaW5kb3dzKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgICAgIDxyZGY6bGkgcmRmOnBhcnNlVHlwZT0iUmVzb3VyY2UiPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6YWN0aW9uPmNvbnZlcnRlZDwvc3RFdnQ6YWN0aW9uPgogICAgICAgICAgICAgICAgICA8c3RFdnQ6cGFyYW1ldGVycz5mcm9tIGFwcGxpY2F0aW9uL3ZuZC5hZG9iZS5waG90b3Nob3AgdG8gaW1hZ2UvcG5nPC9zdEV2dDpwYXJhbWV0ZXJzPgogICAgICAgICAgICAgICA8L3JkZjpsaT4KICAgICAgICAgICAgICAgPHJkZjpsaSByZGY6cGFyc2VUeXBlPSJSZXNvdXJjZSI+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDphY3Rpb24+c2F2ZWQ8L3N0RXZ0OmFjdGlvbj4KICAgICAgICAgICAgICAgICAgPHN0RXZ0Omluc3RhbmNlSUQ+eG1wLmlpZDpiOWVhZmJjYi1kYzk1LTQyNDktYTAzYy0yZmI0ZjMyNDgxNGQ8L3N0RXZ0Omluc3RhbmNlSUQ+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDp3aGVuPjIwMTktMDItMDVUMTk6MTI6MTUrMDg6MDA8L3N0RXZ0OndoZW4+CiAgICAgICAgICAgICAgICAgIDxzdEV2dDpzb2Z0d2FyZUFnZW50PkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE1IChXaW5kb3dzKTwvc3RFdnQ6c29mdHdhcmVBZ2VudD4KICAgICAgICAgICAgICAgICAgPHN0RXZ0OmNoYW5nZWQ+Lzwvc3RFdnQ6Y2hhbmdlZD4KICAgICAgICAgICAgICAgPC9yZGY6bGk+CiAgICAgICAgICAgIDwvcmRmOlNlcT4KICAgICAgICAgPC94bXBNTTpIaXN0b3J5PgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpYUmVzb2x1dGlvbj43NTYwMC8xMDAwMDwvdGlmZjpYUmVzb2x1dGlvbj4KICAgICAgICAgPHRpZmY6WVJlc29sdXRpb24+NzU2MDAvMTAwMDA8L3RpZmY6WVJlc29sdXRpb24+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjM8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDxleGlmOkNvbG9yU3BhY2U+NjU1MzU8L2V4aWY6Q29sb3JTcGFjZT4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjI1NjwvZXhpZjpQaXhlbFhEaW1lbnNpb24+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4xOTE8L2V4aWY6UGl4ZWxZRGltZW5zaW9uPgogICAgICA8L3JkZjpEZXNjcmlwdGlvbj4KICAgPC9yZGY6UkRGPgo8L3g6eG1wbWV0YT4KICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAg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" />
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="w-100 text-center text-muted no-data"><?=$this->lang->line('prog_none')?></div>
                                        <a class="w-100 centered-load-more-link" href="#"
                                            data-target=".onboarding-modal" data-toggle="modal"><i
                                                class="os-icon os-icon-plus-circle"></i><span><?=$this->lang->line('prog_add_new_label')?></span></a>
                                        <?php } ?>
                                    </div>
                                    <!-- <a class="centered-load-more-link" href="#"><span>Load More Programmes</span></a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(count($programmes)> 0){ ?>
                    <div class="content-panel compact color-scheme-dark">
                        <div class="content-panel-close"><i class="os-icon os-icon-close"></i></div>
                        <div class="element-wrapper">
                            <div class="element-actions actions-only"><a class="element-action element-action-fold"
                                    href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
                            <h6 class="element-header">Search</h6>
                            <div class="element-box-tp">
                                <div class="element-search autosuggest-search-activator">
                                    <input placeholder="Start typing to search..." type="text">
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <div class="element-actions actions-only"><a class="element-action element-action-fold"
                                    href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
                            <h6 class="element-header">Status</h6>
                            <div class="element-box-tp">
                                <div class="el-buttons-list">
                                    <div class="toggled-buttons">
                                        <a class="btn btn-block btn-toggled on" href="#">New (1)</a>
                                        <a class="btn btn-block btn-toggled on" href="#">In Progress (2)</a>
                                        <a class="btn btn-block btn-toggled on" href="#">Completed (2)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="element-wrapper">
                            <div class="element-actions actions-only"><a class="element-action element-action-fold"
                                    href="#"><i class="os-icon os-icon-minus-circle"></i></a></div>
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
                        <div class="element-wrapper">
                            <h6 class="element-header">Procurement Value</h6>
                            <div class="element-box-tp">
                                <div class="activity-boxes-w">
                                    <div class="activity-box-w">
                                        <div class="activity-time">HIGH</div>
                                        <div class="activity-box">
                                            <div class="activity-info">
                                                <div class="activity-role"><strong class="font-p72"> Above 1 Bil <span
                                                            class="ls-1">(1)</span></strong></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time"></div>
                                        <div class="activity-box">
                                            <div class="activity-info">
                                                <div class="activity-role"><strong class="font-p72">500 Mil - 1 Bil
                                                        <span class="ls-1">(3)</span></strong></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="activity-box-w">
                                        <div class="activity-time">LOW</div>
                                        <div class="activity-box">
                                            <div class="activity-info">
                                                <div class="activity-role"><strong class="font-p72">100 Mil - 500 MIl
                                                        <span class="ls-1">(1)</span></strong></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
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
    <script src="<?=site_url('assets/js/app.min.js')?>"></script>
    <script src="<?=site_url('assets/js/app.js')?>"></script>
    <?php if(isset($page_js)){ ?>
    <script src="<?=site_url('assets/js/pages/').$page_js.'.min.js'?>"></script>
    <?php } ?>
    <script type="text/javascript">document.addEventListener('DOMContentLoaded', function() {Dashboard.init();App.initMenu();App.initColorToggler(base_url);App.initContentMenuToggle();App.initDropdown();App.initElementActions();App.initContentPanelTrigger();App.initModal('<?=$this->lang->line('prog_create_prev')?>','<?=$this->lang->line('prog_create_next')?>')});
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#fileToUpload').on('click', function() {
            readURL(this);
        });

    </script>
</html>