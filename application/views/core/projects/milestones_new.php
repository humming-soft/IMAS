
<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes')?>"><i class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes/'.$this->uri->segment(0))?>"><?=$programme[0]->prog_name?></a></li>
    <li class="breadcrumb-item"><span><?=$project[0]->proj_name ?> </span></li>
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
                    <div class="element-actions">
                        <a class="btn btn-primary btn-block" data-target=".onboarding-modal"
                            data-toggle="modal" href="#">
                            <i class="os-icon os-icon-plus-circle"></i><span>Edit</span>
                        </a>
                    </div>
                    <h6 class="element-header">PROJECT OVERVIEW</h6>
                    <?php if(!empty($message)){ ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                    aria-hidden="true"> &times;</span></button>
                            <strong><?=$message;?> </strong>
                        </div>
                    <?php } ?>

                    <div class="element-content">
                        <div class="element-wrapper pb-1">
                            <div class="element-box">
                                <div class="text-left">
                                </div>
                                <div class="text-right">
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="#"><i class="os-icon os-icon-refresh-ccw"></i></a>
                                        <a class="btn btn-grey" href="#"><i class="os-icon os-icon-log-out"></i></a>
                                        <a class="btn btn-grey" href="#"><i class="os-icon os-icon-plus-circle"></i></a>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-grey gantt-control" data-control="undo" href="#"><i class="os-icon os-icon-rotate-ccw"></i></a>
                                        <a class="btn btn-grey gantt-control" data-control="redo" href="#"><i class="os-icon os-icon-rotate-cw"></i></a>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-grey gantt-control" data-control="fullscreen" href="#"><i class="os-icon os-icon-maximize"></i></a>
                                    </div>

                                    <div class="btn-group">
                                        <a class="btn btn-grey gantt-control" data-control="zoom-in" href="#"><i class="os-icon os-icon-zoom-in"></i></a>
                                        <a class="btn btn-grey gantt-control" data-control="zoom-out" href="#"><i class="os-icon os-icon-zoom-out"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?=form_open('/icv_calculation/add','id="milestone_l"')?>
                        <div class="element-box">
                            <div class="row m-0">
                                <div class="col-12 col-md-12 col-lg-12">
                                    <div id="wbs_milestones" class="hs-gantt"></div>
                                </div>
                            </div>
                        </div>
                        <?=form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type ="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        Milestone.init(<?=$milestone; ?>,<?=$project[0]->proj_id; ?>);
    });
</script>