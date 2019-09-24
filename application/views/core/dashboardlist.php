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

<body class="menu-position-side menu-side-left full-screen with-content-panel programmelistview">
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
                                            <div class="os-toggler-w on">
                                                <div class="os-toggler-i">
                                                   <a href="./"><div class="os-toggler-pill"></div></a>
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
                                    <div class="row"><!-- list view is started -->
                                        <div class="tab-pane" id="tab_projects">
                                            <div class="element-box-tp">
                                                <div class="table-responsive">
                                                    <table class="table table-padded table-togglable">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th data-toggle="true">Programme Name</th>
                                                            <th data-hide="phone">Owner</th>
                                                            <th data-hide="phone">Start Date</th>
                                                            <th class="text-center">Duration</th>
                                                            <th data-hide="phone">Procurement Value</th>
                                                            <th data-hide="phone">Obligated ICV</th>
                                                            <th data-hide="phone">Status</th>
                                                            <th data-hide="phone">View</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $n = 1; foreach($programmes as $programme){ ?>
                                                            <tr>
                                                                <td class="text-center">#<?=$n?></td>
                                                                <td>
                                                                    <div class="text-primary"><b> <?=$programme->prog_name?></b></div>
                                                                  <div class="d-block  ">
                                                                        <div class="label text-dark  ellips "><b>Desc : </b><?=$programme->prog_desc?></div>
                                                                    </div>
                                                                </td>
                                                                <td><?=$programme->proc_agcy_name?> </td>
                                                                <td class="text-center"><?php  echo   date("d-M-Y", strtotime($programme->prog_start_date));?> </td>
                                                                <td> <div class="d-block">
                                                                    <?php $date1 = strtotime($programme->prog_start_date);
                                                                    $date2 = strtotime($programme->prog_end_date);
                                                                    $diff = abs($date2 - $date1);
                                                                    $days = floor($diff /  (60 * 60 * 24)); ?>
                                                                    <?php echo $days ." Days" ?></div>
                                                                </td>
                                                                <td class="text-center"><?=$programme->proc_value?></td>
                                                                <td class="text-center"></td>
                                                                <td class="nowrap"><span class="badge badge-secondary"><?=$programme->prog_progress_status?></span></td>
                                                                <td class="row-actions">
                                                                    <?php $words = explode(" ", $programme->proc_agcy_name);
                                                                    $acronym = "";

                                                                    foreach ($words as $w) {
                                                                        $acronym .= strtolower($w[0]);
                                                                    } ?>
                                                                    <a href="<?=site_url('programmes/tda-prog-'.$acronym.'-'.str_pad($programme->proc_sector_id, 2, "0", STR_PAD_LEFT).'-'.$programme->prog_id.'-'.date('Y', strtotime($programme->created_at)))?>"><i class="os-icon os-icon-grid-10"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php $n++; } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--list view is end -->
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