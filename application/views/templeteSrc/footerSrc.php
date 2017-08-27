<!-- BEGIN CORE PLUGINS -->
<script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url();?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url();?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="<?php echo base_url();?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<!-- START----DYNAMIC GET JS FILE FOR EACH USER -->
<?php
    $path = APPPATH.'modules/';
    $files = directory_map($path);
    $allModules = str_replace('\\','',array_keys($files));
    $code = '';
    foreach ($allModules as $key => $each) {
        $path = APPPATH.'modules/'.$each.'/views/'.$userType.'/src/jsComponent.php';                        
        if (is_file($path)) {
            include_once($path);   
        }                    
    }
?>
<!-- END----DYNAMIC GET JS FILE FOR EACH USER -->