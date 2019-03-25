
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="http://localhost/imas/programmes"><i class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="http://localhost/imas/programmes/tda-pod-mot-54-2015-802">TUNNELING
            AND UNDERGROUND WORKS (MMC GAMUDA)</a></li>
    <li class="breadcrumb-item"><span>Development of Variable Density (VD) Tunnel Boring Machine (TBM)</span></li>
</ul>
<!--------------------
END - Breadcrumbs
-------------------->
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">

        <div class="row">
            <div class="col-lg-12">
                <div class="padded-lg"><!--START - Projects list-->

                </div>
            </div>
        </div>
        <?= form_open('programmes/' . $p_ref . '/' . $projectId . '/icv_calculation/claim_icv', 'id="icv_cal_claim"') ?>
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">PROJECT DELIVARABLES</h6>
                    <div class="projects-list">
                        <div class="project-box">
                            <div class="project-info">
                                <?php if(sizeof($icv_project) > 0) { foreach($icv_project as $icv_project) { ?>

                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="el-tablo highlight">
                                                    <div class="text-primary"><b>Total Non MLC</b></div>
                                                    <div><b> RM <?=$icv_project['p_nonmlc']?></b></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="el-tablo highlight">
                                                    <div class="text-primary"><b>Total MLC</b></div>
                                                    <div><b> RM <?=$icv_project['p_mlc']?></b></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-sm-5 offset-sm-2">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="el-tablo highlight">
                                                    <div class="text-primary"><b>Project Total ICV</b></div>
                                                    <div>RM <b class="totalIcv"> <?=$icv_project['p_total']?> </b></div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="el-tablo highlight">
                                                    <div class="text-primary"><b>Claimed ICV</b></div>
                                                    <div>RM <label class="totalClamed"> <?=$icv_project['p_claimed']?></label> </div>
                                                    <input type="hidden" name="totalClamedV" value=" <?=$icv_project['p_claimed']?>" id="totalClamedV"/>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="el-tablo highlight">
                                                    <div class="text-primary"><b>Balance ICV</b></div>
                                                    <div>RM <label class="balanceClamed"> <?=$icv_project['p_balance']?></label> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } } else { ?>
                                    <div class="row align-items-center">
                                        <div class="col-sm-5">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="el-tablo highlight">
                                                        <div class="text-primary"><b>Total Non MLC</b></div>
                                                        <div><b>0</b></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="el-tablo highlight">
                                                        <div class="text-primary"><b>Total MLC</b></div>
                                                        <div><b>0</b></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-5 offset-sm-2">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="el-tablo highlight">
                                                        <div class="text-primary"><b>Project Total ICV</b></div>
                                                        <div><label class="totalIcv">0</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="el-tablo highlight">
                                                        <div class="text-primary"><b>Claimed ICV</b></div>
                                                        <div><label class="totalClamed" >0</label></div>
                                                        <input type="hidden" name="totalClamedV" value=" " id="totalClamedV"/>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="el-tablo highlight">
                                                        <div class="text-primary"><b>Balance ICV</b></div>
                                                        <div><label class="balanceClamed" >0</label></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="element-box" style="background-color: #f2f4f8;">
                        <div class="table-responsive">
                            <table class="table table-padded table-togglable deliverables" >
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th data-toggle="true">Milestone</th>
                                    <th data-hide="phone">Duration</th>
                                    <th data-hide="phone">Total ICV</th>
                                    <th data-hide="phone">Remarks</th>
                                    <th class="text-center" data-hide="phone ">Claimed</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $n = 1; foreach($icv_milestone as $icv_milestone){?>
                                  <tr>
                                        <td > <?=$n?></td>
                                        <td><div class="text-primary"><b><?=$icv_milestone['milestone_text']?></b></div></td>
                                        <td><?=$icv_milestone['milestone_start_date']?>  -  <?=$icv_milestone['milestone_end_date']?></td>
                                        <td ><b>RM <label class="tdIcv"><strong><?=$icv_milestone['milestone_icv']?> </strong></label></b></td>
                                        <td><div class="form-group">
                                                <input type="hidden" name="mileID[]" value=" <?=$icv_milestone['milestone_id']?>" id="mileID"/>
                                                <textarea class="form-control" rows="1" id="icvRemark" name="icvRemark[]"><?=$icv_milestone['milestone_remarks']?></textarea>
                                        </td>
                                       <?php if($icv_milestone['milestone_claim_status'] == "1") {?>
                                           <td class="nowrap text-center" >
                                               <div class="form-check">
                                                   <input class="form-check-input icvCheck" type="checkbox" id="icvClaimed"  checked value="<?=$icv_milestone['milestone_id']?>" name="icvClamed[]">
                                               </div>
                                           </td>
                                       <?php } else { ?>
                                           <td class="nowrap text-center" >
                                               <div class="form-check">
                                                   <input class="form-check-input icvCheck" type="checkbox" id="icvClaimed" value="<?=$icv_milestone['milestone_id']?>" name="icvClamed[]">
                                               </div>
                                           </td>
                                       <?php } ?>
                                    </tr>
                                <?php $n++; } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-12 text-right">
                            <div class="form-buttons-w">
                                <button class="btn btn-primary" type="submit"><i class="os-icon os-icon-navigation"></i> Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= form_close() ?>
    </div>
</div>
<script type="text/javascript">document.addEventListener('DOMContentLoaded', function() {App.initMenu();App.initContentMenuToggle();App.initDropdown();App.initElementActions();App.initContentPanelTrigger()});</script>