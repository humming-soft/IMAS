
<ul class="breadcrumb">
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes')?>"><i class="os-icon os-icon-home"></i></a></li>
    <li class="breadcrumb-item"><a class="text-primary" href="<?=site_url('programmes/'.$this->uri->segment(0))?>"><?=$programme[0]->prog_name?></a></li>
    <li class="breadcrumb-item"><span><?=$project[0]->proj_name?></span></li>
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
                    <h6 class="element-header">PROJECT OVERVIEW</h6>
                    <div class="element-content">
                        <div class="element-box-tp">
                            <div class="support-index">
                                <div class="support-ticket-content-w">
                                    <div class="support-ticket-content">
                                        <div class="support-ticket-content-header">
                                            <h4 class="ticket-header"><?=$project[0]->proj_name?></h4>
                                            <a class="back-to-index" href="#"><i class="os-icon os-icon-arrow-left5"></i><span>Back</span></a><a
                                                class="show-ticket-info" href="#"><span>Show more
                                                    Details</span><i class="os-icon os-icon-documents-03"></i></a>
                                        </div>
                                        <legend class="text-bright"><span>Programme Info</span></legend>
                                        <div class="ticket-thread">
                                            <div class="ticket-reply">
                                                <div class="row pb-3">
                                                    <div class="col-sm-12 col-md-12">
                                                        <div class="ticket-reply-info">
                                                            <div><span class="text-primary">Programme
                                                                    Name : </span><b><?=$programme[0]->prog_name?></b></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <legend class="text-bright"><span>Project Info</span></legend>
                                                <div class="col-sm-12 col-md-12">
                                                    <div class="ticket-reply-info">
                                                        <div><span class="text-primary">Project Ref.Number : </span><b><?=$project[0]->proj_ref_no?></b></div>
                                                    </div>
                                                </div>
                                                <div class="ticket-reply-info">
                                                    <div class="text-primary"><span>Project Description
                                                            : </span></div>
                                                </div>
                                                <div class="ticket-reply-content">
                                                    <p>Provide partnership platform with international
                                                        tunneling expert through joint development of
                                                        VD TBM and local involvement in TBM design
                                                        works.</p>
                                                    <p>Grooms Malaysian company to be ready in
                                                        venturing through local and international
                                                        tunneling projects in the future.</p>
                                                </div>
                                                <!-- <div class="ticket-attachments">
                                                    <a class="attachment" href="#">
                                                        <i class="os-icon os-icon-ui-51"></i><span>Programme-detail.pdf</span>
                                                    </a>
                                                </div> -->
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <div class="d-bold">
                                                                <span class="text-primary">Project
                                                                    Status : <span class="badge badge-primary">IN
                                                                        PROGRESS</span></span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <div class="d-inline-flex">
                                                                <span class="text-primary">Objectives :
                                                                </span>
                                                                <ul class="features-list">
                                                                    <li>Localization/Subcontracting</li>
                                                                    <li>Technology Transfer(s)</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <div><span class="text-primary">Current
                                                                    Revison : </span><b>01</b></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <div><span class="text-primary">Revision
                                                                    Date : </span><b>30-Dec-2011</b></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <span class="text-primary">ICP Provider :
                                                            </span>
                                                            <div class="ticket-reply-content field-highlight1 mt-2">
                                                                <dl class="dl-horizontal pt-2">
                                                                    <dt>Name</dt>
                                                                    <dd> MMC GAMUDA KVMRT (T) SDN BHD</dd>
                                                                    <dt>Address</dt>
                                                                    <dd> Level 3A-3, Corporate Building
                                                                        (Block E) Pusat Komersial
                                                                        Southgate No.2, Jalan Chan Sow
                                                                        Lin, Off, Jalan Dua, 55200
                                                                        Kuala Lumpur</dd>
                                                                    <dt>Contact Details</dt>
                                                                    <dd> Ting Sheng Chong <br>03-2385
                                                                        8000<br><a href="mailto:faizal@acreworks.com.my">ting_sheng@mmc-gamuda.my</a></dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-6">
                                                        <div class="ticket-reply-info">
                                                            <span class="text-primary">ICP Recipient :
                                                            </span>
                                                            <div class="ticket-reply-content field-highlight1 mt-2">
                                                                <dl class="dl-horizontal pt-2">
                                                                    <dt>Name</dt>
                                                                    <dd> ACREWORKS SDN BHD</dd>
                                                                    <dt>Address</dt>
                                                                    <dd> Level 3A-3, Corporate Building
                                                                        (Block E) Pusat Komersial
                                                                        Southgate No.2, Jalan Chan Sow
                                                                        Lin, Off, Jalan Dua, 55200
                                                                        Kuala Lumpur</dd>
                                                                    <dt>Contact Details</dt>
                                                                    <dd> Faizal Ahammed <br>03-2781
                                                                        9456<br><a href="mailto:faizal@acreworks.com.my">faizal@acreworks.com.my</a></dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <fieldset class="form-group">
                                                <legend><span>Milestone Summary</span></legend>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="token-bonus-ui">
                                                            <div class="bonus-bar">
                                                                <div class="bonus-base"><span class="bonus-base-title">Initiation</span>
                                                                    <span class="bonus-base-amount">Approval</span><span
                                                                        class="bonus-base-percent">12-JAN-2012</span></div>
                                                                <div class="bonus-extra">
                                                                    <div class="bonus-extra-item active"
                                                                        data-percent="10" style="width: 10%;"><span
                                                                            class="bonus-extra-amount">M1</span><span
                                                                            class="bonus-extra-percent">10%</span></div>
                                                                    <div class="bonus-extra-item active"
                                                                        data-percent="20" style="width: 20%;"><span
                                                                            class="bonus-extra-amount">M2</span><span
                                                                            class="bonus-extra-percent">30%</span></div>
                                                                    <div class="bonus-extra-item active"
                                                                        data-percent="20" style="width: 35%;"><span
                                                                            class="bonus-extra-amount">M3</span><span
                                                                            class="bonus-extra-percent">65%</span></div>
                                                                    <div class="bonus-extra-item"
                                                                        data-percent="20" style="width: 20%;"><span
                                                                            class="bonus-extra-amount">M4</span><span
                                                                            class="bonus-extra-percent">85%</span></div>
                                                                    <div class="bonus-extra-item"
                                                                        data-percent="30" style="width: 30%;"><span
                                                                            class="bonus-extra-amount">M5</span><span
                                                                            class="bonus-extra-percent">100%</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row pt-3">
                                                    <div class="col-sm-12">
                                                        <div class="token-overview-wrap">
                                                            <div class="token-overview">
                                                                <div class="row text-center">
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="token-bonus token-bonus-sale"><span
                                                                                class="token-overview-title">
                                                                                Total Milestone(s)</span><span
                                                                                class="token-overview-value bonus-on-sale">05</span></div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="token-bonus token-bonus-amount"><span
                                                                                class="token-overview-title">
                                                                                Completed Milestone(s)</span><span
                                                                                class="token-overview-value bonus-on-amount">03</span></div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="token-bonus token-bonus-amount"><span
                                                                                class="token-overview-title">
                                                                                Total Activitie(s)</span><span
                                                                                class="token-overview-value bonus-on-amount">24</span></div>
                                                                    </div>
                                                                    <div class="col-md-3 col-sm-6">
                                                                        <div class="token-bonus token-bonus-amount"><span
                                                                                class="token-overview-title">
                                                                                Completed Activitie(s)</span><span
                                                                                class="token-overview-value bonus-on-amount">16</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="note note-plane note-danger note-sm pdt-1x pl-0">
                                                                <p class="small float-right">M - Milestone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="d-block float-right">
                                                            <a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>View Detail</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="support-ticket-info"><a class="close-ticket-info" href="#"><i
                                                class="os-icon os-icon-ui-23"></i></a>
                                        <!-- <div class="todo-list pt-3 b-b">
                                            <a class="todo-item complete bg-success" href="#">
                                                <div class="text-white">
                                                    <div>Approved</div>
                                                </div>
                                                <div class="ti-icon text-white"><i class="os-icon os-icon-check"></i></div>
                                            </a>
                                        </div> -->
                                        <div class="customer pt-3">
                                            <h4 class="customer-name">RM 132 Million</h4>
                                            <div class="customer-tickets">Estimated Total ICV</div>
                                        </div>
                                        <h5 class="info-header">Project Details</h5>
                                        <div class="info-section text-center">
                                            <div class="label">Created: <strong class="ml-1">Jan 24th,
                                                    2011</strong></div>
                                            <div class="label">Type: <div class="badge badge-success ml-1">Indirect</div>
                                            </div>
                                        </div>
                                        <h5 class="info-header">Project Progress</h5>
                                        <div class="info-section">
                                            <div class="fancy-progress-with-label">
                                                <div class="fpl-label">65%</div>
                                                <div class="fpl-progress-w">
                                                    <div class="fpl-progress-i" style="width: 65%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="info-header">Documents</h5>
                                        <div class="info-section">
                                            <div class="ci-file-list list-doc">
                                                <ul>
                                                    <li><a href="#">Annual Revenue.pdf</a></li>
                                                    <li><a href="#">Expenses.xls</a></li>
                                                    <li><a href="#">Business Plan.doc</a></li>
                                                </ul>
                                                <a class="centered-load-more-link smaller" href="#"><span>Load
                                                        More..</span></a>
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