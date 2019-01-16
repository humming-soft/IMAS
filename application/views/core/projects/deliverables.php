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
    <div class="all-wrapper with-side-panel solid-bg-all">
        <div class="search-with-suggestions-w">
            <div class="search-with-suggestions-modal">
                <div class="element-search"><input class="search-suggest-input" placeholder="Start typing to search..."
                        type="text">
                    <div class="close-search-suggestions"><i class="os-icon os-icon-x"></i></div></input>
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
                <div class="menu-and-user">
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
                </div>
            </div>
            <!--------------------
            END - Mobile Menu
            -------------------->
            <!--------------------
            START - Main Menu
            -------------------->
            <div class="menu-w selected-menu-color-light menu-activated-on-hover menu-has-selected-link color-scheme-dark color-style-bright sub-menu-color-bright menu-position-side menu-side-left menu-layout-compact sub-menu-style-over">
                <div class="logo-w"><a class="logo" href="index.html">
                        <div class="logo-element"></div>
                        <div class="logo-label">IMAS</div>
                    </a></div>
                <!-- <div class="menu-actions">
                    <div class="top-icon"><a href="<?=site_url('programmes')?>"><div class="icon-w"><i class="os-icon os-icon-home"> HOME</i></a></div></div>
                </div> -->
                <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..."
                        type="text"></div>
                <h1 class="menu-page-header">Page Header</h1>
                <ul class="main-menu">
                    <li class="selected"><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-home"></div>
                            </div><span>Home</span>
                        </a>
                    </li>
                    <li class="selected"><a href="index.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layout"></div>
                            </div><span>Overview</span>
                        </a>
                    </li>
                    <li class=""><a href="layouts_menu_top_image.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-layers"></div>
                            </div><span>Benefits</span>
                        </a>
                    </li>
                    <li class="sub-header"><span>ICP Value</span></li>
                    <li class=""><a href="apps_bank.html">
                            <div class="icon-w">
                                <div class="os-icon os-icon-package"></div>
                            </div><span>Gantt Chart</span>
                        </a>
                    </li>
                    <li class=""><a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2/deliverables')?>">
                            <div class="icon-w">
                                <div class="os-icon os-icon-file-text"></div>
                            </div><span>Delivarables</span>
                        </a>
                    </li>
                    <li class=""><a href="<?=site_url('programmes/tda-pod-mot-54-2015-802/cgmr-90-ip2/icv_calculation')?>">
                            <div class="icon-w">
                                <div class="os-icon os-icon-life-buoy"></div>
                            </div><span>ICV Calculation</span>
                        </a>
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
            </div>
            <!--------------------
            END - Main Menu
            -------------------->
            <div class="content-w">
                <!--------------------
                START - Top Bar
                -------------------->
                <div class="top-bar color-scheme-light">
                    <!--------------------
                    START - Top Menu Controls
                    -------------------->
                    <ul class="main-menu d-none-mob">
                        <!-- <li class="sub-header"><span>Layouts</span></li> -->
                        <li class="sub-header top-icon os-dropdown-trigger toggle-menu-style"><i class="os-icon os-icon-menu"></i></li>
                    </ul>
                    <div class="fancy-selector-w">
						<div class="fancy-selector-current">
							<div class="fs-main-info">
								<div class="fs-name">Development of Variable Density (VD) Tunnel Boring Machine (TBM)</div>
								<div class="fs-sub"><span>TOTAL ICV :</span><strong>RM 132 Mil</strong></div>
							</div>
							<div class="fs-selector-trigger"><i class="os-icon os-icon-arrow-down4"></i></div>
						</div>
						<div class="fancy-selector-options">
							<div class="fancy-selector-option">
								<div class="fs-main-info">
									<div class="fs-name">CMS Product</div>
									<div class="fs-sub"><span>New Tickets:</span><strong>32</strong></div>
								</div>
							</div>
							<div class="fancy-selector-option active">
								<div class="fs-main-info">
									<div class="fs-name">Server Product</div>
									<div class="fs-sub"><span>New Tickets:</span><strong>17</strong></div>
								</div>
							</div>
							<div class="fancy-selector-option">
								<div class="fs-main-info">
									<div class="fs-name">Compute Engine</div>
									<div class="fs-sub"><span>New Tickets:</span><strong>11</strong></div>
								</div>
							</div>
						</div>
					</div>
                    <div class="top-menu-controls">
                        <div class="element-search autosuggest-search-activator"><input placeholder="Start typing to search..."
                                type="text"></div>
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
                                        <li><a href="#"><i class="os-icon os-icon-signs-11"></i><span>Logout</span></a></li>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.html">Products</a></li>
                    <li class="breadcrumb-item"><span>Laptop with retina screen</span></li>
                </ul>
                <!--------------------
                END - Breadcrumbs
                -------------------->
                <div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
                <div class="content-i">
                    <div class="content-box">



                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <h6 class="element-header">ICV Calculation</h6>
                                    <div class="element-box-tp">
                                        <!--------------------
                                        START - Controls Above Table
                                        -------------------->
                                        <div class="controls-above-table">
                                            <div class="row">
                                                <div class="col-sm-6"><a class="btn btn-sm btn-secondary" href="#">Download
                                                        CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a
                                                        class="btn btn-sm btn-danger" href="#">Delete</a></div>
                                                <div class="col-sm-6">
                                                    <form class="form-inline justify-content-sm-end"><input class="form-control form-control-sm rounded bright"
                                                            placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                                                            <option selected="selected" value="">Select Status</option>
                                                            <option value="Pending">Pending</option>
                                                            <option value="Active">Active</option>
                                                            <option value="Cancelled">Cancelled</option>
                                                        </select></form>
                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------
                                        END - Controls Above Table
                                        ------------------          -->
                                        <!--------------------
                                        START - Table with actions
                                        ------------------  -->
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-lg table-v2 table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <th>
                                                            No.
                                                        </th>
                                                        <th>
                                                            Description
                                                        </th>
                                                        <th>
                                                            Milestone
                                                        </th>
                                                        <th>
                                                            Remarks
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            1
                                                        </td>
                                                        <td>
                                                            Project Initiation
                                                        </td>
                                                        <td>
                                                            2019-Feb-28
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea  class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            2
                                                        </td>
                                                        <td>
                                                            Project Setup
                                                        </td>
                                                        <td>
                                                            2019-Mar-15
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            3
                                                        </td>
                                                        <td>
                                                            Planning
                                                        </td>
                                                        <td>
                                                            2019-May-02
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea   class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            4
                                                        </td>
                                                        <td>
                                                            Implementation
                                                        </td>
                                                        <td>
                                                            2020-Mar-03
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea  class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            5
                                                        </td>
                                                        <td>
                                                            Testing
                                                        </td>
                                                        <td>
                                                            2020-Jun-04
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea   class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            6
                                                        </td>
                                                        <td>
                                                            Training
                                                        </td>
                                                        <td>
                                                            2020-Sep-05
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea  class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            7
                                                        </td>
                                                        <td>
                                                            Commissioning
                                                        </td>
                                                        <td>
                                                            2020-Dec-31
                                                        </td>
                                                        <td>
                                                            <div class="col-md-8">
                                                                <textarea  class="form-control"></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    </tbody>

                                                </table>
                                        </div>
                                        <!--------------------
                                        END - Table with actions
                                        ------------------            -->
                                        <!--------------------
                                        START - Controls below table
                                        ------------------  -->
                                        <div class="controls-below-table">
                                            <div class="table-records-info">Showing records 1 - 5</div>
                                            <div class="table-records-pages">
                                                <ul>
                                                    <li><a href="#">Previous</a></li>
                                                    <li><a class="current" href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                    <li><a href="#">4</a></li>
                                                    <li><a href="#">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--------------------
                                        END - Controls below table
                                        -------------------->
                                    </div>
                                </div>
                            </div>
                        </div>
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
        $(document).on("change","#item",function(){
            $('#itemDesDiv').removeAttr('hidden');
            if($('#item').val() == 1){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="5">Equity Investment</option><option value="4">Bank Guarantee</option><option value="3">Project Fiv=nacing</option><option value="3">Principal Guarantee for SBLC</option>');
            }
            if($('#item').val() == 2){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append(' <option value="4">IPR transfer and Commercialization through JV/Partnership with local company</option> <option value="4">Technology Commercialization and roll out/Start up company</option> <option value="4">Tools/equipment, laboratory and workshop setup</option> <option value="4">Training and skil development cources</option> <option value="4">IPR development and sharing</option> <option value="3">Technology adaption to local environment and conditions</option> <option value="3">Transfer and resident of ToT project team assignment to OEMs</option> <option value="3">Subject Matter experts to local recipient assignment</option> <option value="3">Drawing,manuals and training documentations for recipient</option>');
            }
            if($('#item').val() == 3){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="N/A">Captive Market Access</option><option value="N/A">Market Access Assistance</option><option value="N/A">Globel Supply chain participation</option><option value="4">Organization International Certification</option>');
            }
            if($('#item').val() == 4){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="4">Technical Transfer ,skils and competency development for prefessional services</option><option value="4">On Job Traing</option><option value="3">Knowledge Transfer and skil development</option><option value="2">Non Technical transfer and Skil Development</option><option value="2">Training and skils development courses general</option><option value="1">Higher learning placement programe</option><option value="1">Higher value job creation</option>');
            }
            if($('#item').val() == 5){
                $('#itemdes').find('option').not(':first').remove();
                $('#itemdes').append('<option value="1">Incidental</option><option value="1">Others</option>');
            }
        });
        $(document).on("change","#item1",function(){
            $('#itemDesDiv1').removeAttr('hidden');
            if($('#item1').val() == 1){
                $('#itemdes1').find('option').not(':first').remove();
                $('#itemdes1').append('<option value="5">Equity Investment</option><option value="4">Bank Guarantee</option><option value="3">Project Fiv=nacing</option><option value="3">Principal Guarantee for SBLC</option>');
            }
            if($('#item1').val() == 2){
                $('#itemdes1').find('option').not(':first').remove();
                $('#itemdes1').append(' <option value="4">IPR transfer and Commercialization through JV/Partnership with local company</option> <option value="4">Technology Commercialization and roll out/Start up company</option> <option value="4">Tools/equipment, laboratory and workshop setup</option> <option value="4">Training and skil development cources</option> <option value="4">IPR development and sharing</option> <option value="3">Technology adaption to local environment and conditions</option> <option value="3">Transfer and resident of ToT project team assignment to OEMs</option> <option value="3">Subject Matter experts to local recipient assignment</option> <option value="3">Drawing,manuals and training documentations for recipient</option>');
            }
            if($('#item1').val() == 3){
                $('#itemdes1').find('option').not(':first').remove();
                $('#itemdes1').append('<option value="N/A">Captive Market Access</option><option value="N/A">Market Access Assistance</option><option value="N/A">Globel Supply chain participation</option><option value="4">Organization International Certification</option>');
            }
            if($('#item1').val() == 4){
                $('#itemdes1').find('option').not(':first').remove();
                $('#itemdes1').append('<option value="4">Technical Transfer ,skils and competency development for prefessional services</option><option value="4">On Job Traing</option><option value="3">Knowledge Transfer and skil development</option><option value="2">Non Technical transfer and Skil Development</option><option value="2">Training and skils development courses general</option><option value="1">Higher learning placement programe</option><option value="1">Higher value job creation</option>');
            }
            if($('#item1').val() == 5){
                $('#itemdes1').find('option').not(':first').remove();
                $('#itemdes1').append('<option value="1">Incidental</option><option value="1">Others</option>');
            }
        });
        $(document).on("click",".viewDeliver",function(){
            $('#multipilerModel3').modal('show');
        });
        $(document).on("click",".viewAttachments",function(){
            $('#multipilerModel4').modal('show');
        });

        $(document).on("click",".multipilerModel",function(){
            $('#multipilerModel').modal('show');
           /* $source = $(this).find('input[type=text]');*/
            $sourcenon = $(this).closest("tr").find('.nonMLCM');
            $rowSum = $(this).closest("tr").find('.rowSUM');
            $source2 = $(this).closest("tr").find('.nonMLC').val();
            $source = $(this).closest("tr").find('.MLCM').val();
            $source3 = $(this).closest("tr").find('.mlc').val();
        });
        $('#multipilerModel').on('hidden.bs.modal', function () {
            $sourcenon.val($(this).find('#itemdes').val());
            var totalICV= $("#columnSumICV").val();
            var totalMLC = $("#columnSumMLC").val();
            var totalSum = $("#columnSumTotalICV").val();
            if(isNaN($source2)){
                var nonMLC =  0.00;
            }else{
                var nonMLC =  $source2;
            }

            var mult =  $sourcenon.val();
            if(!isNaN( mult)){
                var totalCurrentICV=parseInt(totalICV) + ( parseInt(nonMLC) * parseInt(mult) ) ;
                $("#columnSumICV").val(totalCurrentICV);
                var valueOne= $sourcenon .val();
                var valueTWo= $source2;
                if($source == ""){
                    valueFour = 0;
                }else{
                    var valueFour= $source;
                }
                if($source3 == ""){
                    var valueThree= 0;
                }else{
                    var valueThree= $source3;
                }

                var final= ((parseInt(valueOne) * parseInt(valueTWo)) + (parseInt(valueFour) * parseInt(valueThree)));
                $rowSum.val(final);

            }
            var sum = 0;
            $(".rowSUM").each(function(){
                sum += +$(this).val();
            });
            $("#columnSumTotalICV").val(sum);

        });
        $(document).on("click",".multipilerModel1",function(){
            $('#multipilerModel1').modal('show');
            /* $source = $(this).find('input[type=text]');*/
            $source = $(this).closest("tr").find('.MLCM');
            $source3 = $(this).closest("tr").find('.mlc').val();
            $sourcenon = $(this).closest("tr").find('.nonMLCM').val();
            $rowSum = $(this).closest("tr").find('.rowSUM');
            $source2 = $(this).closest("tr").find('.nonMLC');
        });

        $('#multipilerModel1').on('hidden.bs.modal', function () {
            $source.val($(this).find('#itemdes1').val());
            var totalICV= $("#columnSumICV").val();
            var totalMLC = $("#columnSumMLC").val();
            var totalSum = $("#columnSumTotalICV").val();
            if(isNaN($source3)){
                var mlc =  0.00;
            }else{
                var mlc =  $source3;
            }
            var mult =  $source.val();
            if(!isNaN( mult)){

                if($source2.val() == ""){
                    var valueTWo= 0;
                }else{
                    var valueTWo= $source2.val();
                }

                var valueFour= $(this).find('#itemdes1').val();
                var valueThree= $source3;
                if($sourcenon =="" ){
                    var valueOne= 0;
                }else{
                    var valueOne= $sourcenon;
                }
                var totalCurrentMLC=parseInt(totalMLC) + ( parseInt(mlc) * parseInt(mult) ) ;
                $("#columnSumMLC").val(totalCurrentMLC);
                var final= ((parseInt(valueOne) * parseInt(valueTWo)) + (parseInt(valueFour) * parseInt(valueThree)));
                $rowSum.val(final);

            }
            var sum = 0;
            $(".rowSUM").each(function(){
                sum += +$(this).val();
            });
            $("#columnSumTotalICV").val(sum);
           /* var v1 = $("#columnSumTotalICV").val();
            var v2 = $rowSum .val();
            var totalCureentICV =  parseInt(v1) + parseInt(v2);
            $("#columnSumTotalICV").val(totalCureentICV);*/

        });
    </script>
</body>
</html>