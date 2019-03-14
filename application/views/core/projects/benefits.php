<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes')?>"><i class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes/'.$this->uri->segment(0))?>"><?=$programme[0]->prog_name?></a></li>
    <li class="breadcrumb-item"><span><?=$project[0]->proj_name?></span></li>
</ul>
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-sm-12">
                <div class="element-wrapper">
                    <h6 class="element-header">PROJECT BENEFITS</h6>
                    <div class="element-content">
                        <?=form_open('programmes/'.$p_ref.'/'.$projectId.'/benefits/add','id="benefits_l"')?>
                        <div class="element-box">
                            <div class="table-responsive">
                                <div class="col-sm-12 text-right">
                                    <button data-toggle="modal" class="btn btn-primary" id="addrow"><i
                                            class="os-icon os-icon-plus-circle"></i> Add New
                                    </button>
                                </div>
                                <br>
                                <table class="table  table-v2" id="tabBenefits">
                                    <tbody>
                                    <tr>
                                        <th>NKEA</th>
                                        <th> Focusing Corridors</th>
                                        <th> Offset Objectives </th>
                                        <th></th>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control" name="nkea" id="nkea">
                                                    <option>--Select--</option>
                                                    <?php foreach($benefitsNkea as $benefitsNkea){ ?>
                                                        <option value="<?=$benefitsNkea->benefits_nkea_id?>"> <?=$benefitsNkea->benefits_nkea_text?></option>
                                                    <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="focusArea" id="focusArea">
                                                    <option>--Select--</option>
                                                    <?php foreach($benefitsFocusArea as $benefitsFocusArea){ ?>
                                                        <option value="<?=$benefitsFocusArea->benefits_focusing_area_id?>"> <?=$benefitsFocusArea->benefits_focusing_area_text?></option>
                                                    <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="offstes" id="offstes">
                                                    <option>--Select--</option>
                                                    <?php foreach($benefitsOffsets as $benefitsOffsets){ ?>
                                                        <option value="<?=$benefitsOffsets->benefits_offset_id?>"> <?=$benefitsOffsets->benefits_offset_text?></option>
                                                    <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <div class="col-sm-12">
                                                <span><span class="input-group-append"><button type="button" class="btn btn-danger btn-icon ml-2"><i class="os-icon os-icon-trash"></i></button></span>
                                                <span class="input-group-append"><button type="button" class="btn btn-info btn-icon ml-2"><i class="os-icon os-icon-pencil-12"></i></button></span></span>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="col-sm-12 text-right">
                                    <div class="form-buttons-w">
                                        <button class="btn btn-grey"  data-dismiss="modal" type="button"><i class="os-icon os-icon-x"></i> Cancel</button>
                                        <button class="btn btn-primary" type="submit"><i class="os-icon os-icon-navigation"></i> Save</button>
                                    </div>
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
<script type="text/javascript">document.addEventListener('DOMContentLoaded', function() {App.initMenu();App.initContentMenuToggle();App.initDropdown();App.initElementActions();App.initContentPanelTrigger()});</script>
