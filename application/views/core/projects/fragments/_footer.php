        </div>
    </div>
    <div class="display-type"></div>
</div>
    <script src="<?=site_url('assets/js/vendors/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/moment/moment.js')?>"></script>
    <?php if(isset($support)){ ?>
    <?php if(in_array("select2",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/select2/dist/js/select2.full.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("validator",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/bootstrap-validator/dist/validator.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("daterangepicker",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <?php } ?>
    <?php if(in_array("rangeslider",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("dropzone",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/dropzone/dist/dropzone.js')?>"></script>
    <?php } ?>
    <?php if(in_array("datatable",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("fullcalendar",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/fullcalendar/dist/fullcalendar.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("scrollbar",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("repeater",$support)){ ?>
     <script src="<?=site_url('assets/js/vendors/repeater/jquery.repeater.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("slick",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/slick-carousel/slick/slick.min.js')?>"></script>
    <?php } ?>
    <?php if(in_array("gantt",$support)){ ?>
    <script src="<?=site_url('assets/js/vendors/gantt/dhtmlxgantt.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/gantt/ext/dhtmlxgantt_marker.js')?>"></script>
    <!-- <script src="<?=site_url('assets/js/vendors/gantt/ext/dhtmlxgantt_auto_scheduling.js')?>"></script> -->
    <script src="<?=site_url('assets/js/vendors/gantt/ext/dhtmlxgantt_undo.js')?>"></script>
    <script src="<?=site_url('assets/js/vendors/gantt/ext/dhtmlxgantt_fullscreen.js')?>"></script>
    <?php }} ?>
    <script src="<?=site_url('assets/js/vendors/tether/dist/js/tether.min.js')?>"></script>
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
    <script src="<?=site_url('assets/js/app.js')?>"></script>
    <?php if(isset($page_js)){ ?>
    <script src="<?=site_url('assets/js/pages/').$page_js.'.js'?>"></script>
    <?php } ?>
</body>
</html>