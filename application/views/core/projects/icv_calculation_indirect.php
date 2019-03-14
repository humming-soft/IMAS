<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes')?>"><i class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes/'.$this->uri->segment(0))?>"><?=$programme[0]->prog_name?></a></li>
    <li class="breadcrumb-item"><span><?=$project[0]->proj_name?></span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box p-0">
        <div class="app-email-w">
            <div class="app-email-i">
                <div class="ae-content-w">
                    <?=form_open('programmes/'.$p_ref.'/'.$projectId.'/icv_calculation/add','id="icv_cal_l"')?>
                    <div class="element-box">
                        <div class="col-sm-12 text-right">
                            <div class="form-buttons-w">
                                <button class="btn btn-primary" type="submit"><i class="os-icon os-icon-navigation"></i> Save</button>
                            </div>
                        </div>
                        <div class="row">
                            <?php if(sizeof($icv_project) > 0) { foreach($icv_project as $icv_project) { ?>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total Non MLC</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="sumNonMLC" name="sumNonMLC" value="<?=$icv_project['p_nonmlc']?>" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total MLC</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="sumMLC"  name="sumMLC" value="<?=$icv_project['p_mlc']?>" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total ICV</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="totalICV"  name="totalICV" value="<?=$icv_project['p_total']?>" type="text">
                                        </div>
                                    </div>
                                </div>
                            <?php } } else { ?>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total Non MLC</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="sumNonMLC" name="sumNonMLC" value="0.00" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total MLC</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="sumMLC"  name="sumMLC" value="0.00" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4">
                                    <div class="form-group"><label for="">Total ICV</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">RM</div>
                                            </div>
                                            <input class="form-control" readonly id="totalICV"  name="totalICV" value="0.00" type="text">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="ae-content" >
                        <?php foreach($icv_milestone as $icv_milestone){?>
                        <div class="element-wrapper"  style="padding-bottom: 0rem; !important">
                            <div class="element-box">
                                <h6 class="element-box-header"><?=$icv_milestone['milestone_text']?></h6>
                                 <label for=""> Timeline /Completion Period : - </label>
                                <b class="font d-block"><?=$icv_milestone['milestone_start_date']?>  -  <?=$icv_milestone['milestone_end_date']?></b>
                            </div>
                        </div>
                        <?php foreach($icv_milestone['activities'] as $act){?>
                                <div class="aec-full-message-w" style="margin-left: 10%; margin-bottom: 8px; !important">
                                    <div class="aec-full-message">
                                        <div class="message-head">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <h6 class="onboarding-title"><?=$act['activity_text']?></h6>
                                                    <div class="form-group">
                                                        <b class="font d-block"><?=$act['activity_start_date']?>  -  <?=$act['activity_end_date']?></b>
                                                        <input class="form-control"  value="<?=$act['activity_id']?> " id=milestoneID name=milestoneID[] type="hidden">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Evidences</label>
                                                        <b class="font d-block"><a href=""><i class="os-icon os-icon-upload"></i></a> <input type="file" name="files[<?=$act['activity_id']?>][]" multiple value="Upload"></b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="message-content">
                                            <div class="row">
                                                <table class="tabIcv">
                                                    <thead>
                                                    <tr class="text-center">
                                                        <th>NV Non MLC</th>
                                                        <th>Multiplier</th>
                                                        <th>1 + μ</th>
                                                        <th>NV MLC</th>
                                                        <th>Multiplier</th>
                                                        <th>1 + μ</th>
                                                        <th>Total</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">RM</div>
                                                                    </div>
                                                                    <input class="form-control nonMLC" value="<?=$act['nonmlc']?>"  id="nonMLC" name="nonMlC[]" type="text">
                                                                    <input class="form-control mileName" value="<?=$act['activity_text']?>"  type="hidden">
                                                                    <input class="form-control mileID" value="<?=$act['activity_id']?>"  type="hidden">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input class="form-control nonMLCMultiplier" value="<?=$act['nonmlcMul']?>" id="nonMLCMUL" name="nonMlCMUL[]" readonly type="text" value="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td >
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input class="form-control muValue" value="<?=$act['nonmlcMu']?>" id="nonMLCMU" name="nonMlCMU[]" readonly type="text" value="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">RM</div>
                                                                    </div>
                                                                    <input class="form-control MLC" value="<?=$act['mlc']?>"  id="MLC" name="MlC[]" type="text">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input class="form-control MLCMultiplier" value="<?=$act['mlcMul']?>" id="MLCMUL" name="MlCMUL[]" placeholder="Choose" readonly type="text" value="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td >
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <input class="form-control muValueMlc" id="MLCMU" value="<?=$act['mlcMu']?>" name="MlCMU[]" readonly type="text" value="">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">RM</div>
                                                                    </div>
                                                                    <input class="form-control TotalRow" value="<?=$act['total']?>" id="totalRow" name="totalRow[]" readonly type="text">
                                                                </div>
                                                            </div>
                                                        </td>
                                                      <!--  <td>
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <button class="btn btn-outline-info" data-target="#exampleModal1" data-toggle="modal" type="button">(μ) Entitlement(s)</button>
                                                                </div>
                                                            </div>
                                                        </td>-->
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             <?php } ?>
                            <?php } ?>
                        <div class="col-sm-12 text-right">
                            <div class="form-buttons-w">
                                <button class="btn btn-primary" type="button"><i class="os-icon os-icon-navigation"></i> Save</button>
                            </div>
                        </div>

                    </div>
                    <?=form_close()?>
                </div>
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="modelMu" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <div class="onboarding-slider-w">
                <div class="onboarding-slide">
                    <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="400px"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">Criteria for (μ) entitlement</h4>
                        <div class="onboarding-text">Criteria must contain one of the factors ( <strong>RMK </strong>or <strong>CORRIDOR</strong> or <strong>OBJECTIVE</strong>) </div>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">NKEA</label>
                                        <select class="form-control" id="nkea">
                                            <option>Select</option>
                                            <?php foreach($benefitsNkea as $benefitsNkea){ ?>
                                                <option value="<?=$benefitsNkea->benefits_nkea_id?>"> <?=$benefitsNkea->benefits_nkea_text?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">Focusing Corridors</label>
                                        <select class="form-control" id="focus">
                                            <option>Select</option>
                                            <?php foreach($benefitsFocusArea as $benefitsFocusArea){ ?>
                                                <option value="<?=$benefitsFocusArea->benefits_focusing_area_id?>"> <?=$benefitsFocusArea->benefits_focusing_area_text?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">Offset Objectives</label>
                                        <select class="form-control" id="offset">
                                            <option>Select</option>
                                            <?php foreach($benefitsOffsets as $benefitsOffsets){ ?>
                                                <option value="<?=$benefitsOffsets->benefits_offset_id?>"> <?=$benefitsOffsets->benefits_offset_text?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  id="muValueSave" data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="multipilerModelNonMLC" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <div class="onboarding-slider-w">
                <div class="onboarding-slide">
                    <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">ICP Multiplier</h4>
                        <div class="onboarding-text">Direct offset</div>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">Item</label><select class="form-control" id="nonMlcItem">
                                            <option>Select</option>
                                            <?php foreach($icv_multiplier_nonMLC as $nonmlcM){ ?>
                                            <option value="<?=$nonmlcM->mul_id?>"> <?=$nonmlcM->mul_text?></option>
                                            <?php } ?>
                                        </select></div>
                                </div>
                                <div class="col-sm-12" hidden id="nonMlcitemDesDiv">
                                    <div class="form-group">
                                        <select class="form-control" id="nonMlcItemDes">
                                            <option value="-1">Select</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="mr-2 mb-2 btn btn-info" type="button"  data-dismiss="modal">Cancel</button>
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  data-dismiss="modal">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="multipilerModelMLC" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <div class="onboarding-slider-w">
                <div class="onboarding-slide">
                    <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">MLC Multiplier</h4>
                        <div class="onboarding-text">Direct offset</div>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">Item</label><select class="form-control" id="MlcItem">
                                            <option>Select</option>
                                            <?php foreach($icv_multiplier_MLC as $mlcM){ ?>
                                                <option value="<?=$mlcM->mul_id?>"> <?=$mlcM->mul_text?></option>
                                            <?php } ?>
                                        </select></div>
                                </div>
                                <div class="col-sm-12" hidden id="mlcitemDesDiv">
                                    <div class="form-group">
                                        <select class="form-control" id="MlcItemDes">
                                            <option>Select</option>
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="mr-2 mb-2 btn btn-info" type="button"  data-dismiss="modal">Cancel</button>
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  data-dismiss="modal">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="muValusModel" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <div class="element-box"><h5 class="form-header">Non MLC (μ) Entitlement(s)</h5>
                <div class="table-responsive">
                    <table class="table table-lightborder nonmlcTab">
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-right">
                    <button class="mr-2 mb-2 btn btn-info" type="button"  data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

   
   
   

    