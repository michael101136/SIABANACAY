 <!-- MESSAGE BOX-->
            
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->  
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-remove-row">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-times"></span> Remove <strong>Data</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to remove this row?</p>                    
                        <p>Press Yes if you sure.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-success btn-lg mb-control-yes">Yes</button>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->        
        
        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?php echo base_url(); ?>assets/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?php echo base_url(); ?>assets/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                      

    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        
        <!-- START THIS PAGE PLUGINS-->        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/icheck/icheck.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/tableExport.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jquery.base64.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/html2canvas.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/jspdf.js"></script>
    	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tableexport/jspdf/libs/base64.js"></script> 

            <!--fromulario-->  
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

        <!-- END THIS PAGE PLUGINS-->  
        
        <!-- START TEMPLATE -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/settings.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/plugins.js"></script>        
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/actions.js"></script> 


        <script src="<?php echo base_url(); ?>assets/Admin/Alquiler/alquiler.js"></script>
        <script src="<?php echo base_url(); ?>assets/Admin/Alquiler/cuartel.js"></script>     
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->                 
    </body>
</html>






