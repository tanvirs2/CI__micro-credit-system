<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
<link href="assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL STYLES -->
<link href="assets/global/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css" />
<link href="assets/global/css/plugins-md.min.css" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->
<!-- BEGIN THEME LAYOUT STYLES -->
<link href="assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
<link href="assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
<link href="assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="assets/favicon.ico" />
<!-- END THEME LAYOUT STYLES -->
<?php

$path = "assets/modulesStyle/".$this->router->fetch_module().'/css';
$files = directory_map($path);
if(!empty($files))
{
    foreach ($files as $key => $value) 
    {
            echo '<link href="'."assets/modulesStyle/".$this->router->fetch_module().'/css/'.$value.'" rel="stylesheet" type="text/css" />';        
    }
}

?>
