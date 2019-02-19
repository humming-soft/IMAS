<!--------------------
START - Breadcrumbs
-------------------->
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="http://localhost/imas/programmes"><i
                class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="http://localhost/imas/programmes/tda-pod-mot-54-2015-802">TUNNELING
            AND UNDERGROUND WORKS (MMC GAMUDA)</a></li>
    <li class="breadcrumb-item"><span>Development of Variable Density (VD) Tunnel Boring Machine (TBM)</span></li>
</ul>
<!--------------------
END - Breadcrumbs
-------------------->
<div class="content-panel-toggler"><i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span></div>
<div class="content-i">
    <div class="content-box p-0">
        <div class="app-email-w">
            <div class="app-email-i"><!--------------------

--------------------><!--------------------
START - Email Messages List
-------------------->
                <div class="ae-list-w">
                    <div class="ael-head">
                        <div class="actions-left"><select>
                                <option>Sort by date</option>
                            </select></div>
                        <div class="actions-right"><a href="#"><i class="os-icon os-icon-ui-37"></i></a><a href="#"><i
                                    class="os-icon os-icon-grid-18"></i></a></div>
                    </div>
                    <div class="ae-list">
                        <?php foreach($icv_milestone as $icv_milestone){  if($icv_milestone['order']==1){ ?>
                            <div class="ae-item active">
                                <div class="aei-content ">
                                    <h6 class="aei-title"> Milestone <?=$icv_milestone['order']?></h6>
                                    <div class="aei-sub-title"><?=$icv_milestone['milestone_start_date']?>  -  <?=$icv_milestone['milestone_end_date']?></div>
                                    <div class="aei-text"><?=$icv_milestone['milestone_text']?>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="ae-item ">
                                <div class="aei-content ">
                                    <h6 class="aei-title">Milestone <?=$icv_milestone['order']?></h6>
                                    <div class="aei-sub-title"><?=$icv_milestone['milestone_start_date']?>  -  <?=$icv_milestone['milestone_end_date']?></div>
                                    <div class="aei-text"><?=$icv_milestone['milestone_text']?>
                                    </div>
                                </div>
                            </div>
                        <?php } }?>
                    </div>
                    <a class="ae-load-more" href="#"><span>Load More Messages</span></a></div><!--------------------
END - Email Messages List
-------------------->
                <div class="ae-content-w"><!--------------------
START - Email Content Header
-------------------->
                    <div class="aec-head">
                        <div class="actions-left">
                            <a class="highlight" href="#"><i class="os-icon os-icon-ui-02"></i></a>
                        </div>
                        <div class="actions-right">
                            <div class="aeh-actions">
                                <a href="#"><i class="os-icon os-icon-ui-44"></i></a>
                                <a class="separate" href="#"><i class="os-icon os-icon-ui-15"></i></a>
                                <a href="#"><i class="os-icon os-icon-common-07"></i></a>
                                <a href="#"><i class="os-icon os-icon-mail-19"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="element-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group"><label for="">Total Non MLC</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">RM</div>
                                        </div>
                                        <input class="form-control" readonly id="sumNonMLC" value="0.00" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group"><label for="">Total MLC</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">RM</div>
                                        </div>
                                        <input class="form-control" readonly id="sumMLC" value="0.00" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group"><label for="">Total ICV</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">RM</div>
                                        </div>
                                        <input class="form-control" readonly id="totalICV" value="0.00" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ae-content" style="height:1000px">
                        <div class="older-pack">
                            <div class="aec-full-message-w">
                                <div class="aec-full-message">
                                    <div class="message-head">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="onboarding-title">Land Available for Shoplots Jln Tun Tun Razak</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for=""> Timeline /Completion Period</label>
                                                    <b class="font d-block">01-Jan-19  -  01-May-19</b>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Evidences</label>
                                                    <b class="font d-block"><a href=""><i class="os-icon os-icon-upload"></i></a> <input type="file" value="Upload"></b>
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
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Material</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="5">&nbsp; &nbsp; &nbsp;Machinery</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Manpower</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
                            <div class="aec-full-message-w">
                                <div class="aec-full-message">
                                    <div class="message-head">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="onboarding-title">Instrumentation Installation</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for=""> Timeline /Completion Period</label>
                                                    <b class="font d-block">01-May-19  -  01-Aug-19</b>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Evidences</label>
                                                    <b class="font d-block"><a href=""><i class="os-icon os-icon-upload"></i></a> <input type="file" value="Upload"></b>
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
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Material</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="5">&nbsp; &nbsp; &nbsp;Machinery</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Manpower</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
                        <div class="aec-full-message-w show-pack">
                            <div class="more-messages" style="font-weight: bold">3 Activities</div>
                            <div class="aec-full-message-w">
                                <div class="aec-full-message">
                                    <div class="message-head">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h6 class="onboarding-title">Specific Ground Improvement Works/Grouting</h6>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for=""> Timeline /Completion Period</label>
                                                    <b class="font d-block">01-Dec-19  -  01-Apr-2020</b>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Evidences</label>
                                                    <b class="font d-block"><a href=""><i class="os-icon os-icon-upload"></i></a> <input type="file" value="Upload"></b>
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
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Material</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  colspan="5">&nbsp; &nbsp; &nbsp;Machinery</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5">&nbsp; &nbsp; &nbsp;Manpower</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control nonMLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control nonMLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control MLC" type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control MLCMultiplier" placeholder="Choose" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <input class="form-control" readonly type="text" value="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">RM</div>
                                                                </div>
                                                                <input class="form-control TotalRow" readonly type="text">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
            </div>
        </div>
    </div>
</div>
<div aria-hidden="true" class="onboarding-modal modal fade animated" id="multipilerModel1" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-centered" role="document">
        <div class="modal-content text-center">
            <div class="onboarding-slider-w">
                <!--  <div class="onboarding-slide">
                            <div class="onboarding-media"><img alt="" src="<?/*=site_url('assets/img/bigicon2.png')*/?>" width="200px"></div>
                            <div class="onboarding-content with-gradient">
                                <h4 class="onboarding-title">Example of onboarding screen!</h4>
                                <div class="onboarding-text">This is an example of a multistep onboarding screen, you
                                    can use it to introduce your customers to your app, or collect additional
                                    information from them before they start using your app.</div>
                            </div>
                        </div>-->
                <div class="onboarding-slide">
                    <div class="onboarding-media"><img alt="" src="img/bigicon5.png" width="200px"></div>
                    <div class="onboarding-content with-gradient">
                        <h4 class="onboarding-title">ICP Multiplier</h4>
                        <div class="onboarding-text">Direct offset</div>
                        <form>
                            <div class="row">
                                <div class="col-sm-12">
                                    <input type="hidden" id="hidMultiplierLocation">
                                    <div class="form-group"><label for="">Item</label><select class="form-control" id="item1">
                                            <option>Select</option>
                                            <option value="1">Professional Sevices local sourcing</option>
                                            <option value="2">Local Product</option>
                                            <option value="3">Plant Facility</option>
                                            <option value="4">Logistics</option>
                                        </select></div>
                                </div>
                                <div class="col-sm-12" hidden id="itemDesDiv1">
                                    <div class="form-group">
                                        <select class="form-control" id="itemdes1">
                                            <option value="-1">Select</option>
                                            <!--<option>Equity Investment</option>
                                            <option>Bank Gua</option>
                                            <option>Other</option>-->
                                        </select></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  data-dismiss="modal">Save</button>
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
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  data-dismiss="modal">Save</button>
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
                                    <button class="mr-2 mb-2 btn btn-primary" type="button"  data-dismiss="modal">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>                
    
  
   
   
   

    