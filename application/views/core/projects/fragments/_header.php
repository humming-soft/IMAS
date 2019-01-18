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
    <?php if(isset($support)){ ?>
    <?php if(in_array("select2",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/select2/dist/css/select2.min.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("daterangepicker",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("dropzone",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/dropzone/dist/dropzone.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("datatable",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("fullcalendar",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/fullcalendar/dist/fullcalendar.min.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("scrollbar",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("slick",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/slick-carousel/slick/slick.css')?>" rel="stylesheet">
    <?php } ?>
    <?php if(in_array("gantt",$support)){ ?>
    <link href="<?=site_url('assets/js/vendors/gantt/dhtmlxgantt.css')?>" rel="stylesheet" type="text/css">
    <?php }} ?>
    <link href="<?=site_url('assets/css/core.css')?>" rel="stylesheet">
    <script type="text/javascript">
        var base_url = "<?=site_url()?>";
    </script>
</head>
<body class="menu-position-side menu-side-left full-screen with-content-panel">
    <div class="preloader-it">
		<div class="loader-pendulums"></div>
	</div>