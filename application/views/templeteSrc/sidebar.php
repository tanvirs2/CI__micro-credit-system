<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-light <?php echo sideCollaps('sidebar');?>" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            
            <!-- START----DYNAMIC NAVBAR MENU FOR ALL USERS -->
            <?php 
                $code = '';
                $path = APPPATH.'modules/';
                $files = directory_map($path);
                $allModules = str_replace('\\','',array_keys($files));
                foreach ($allModules as $key => $each) {
                    for($k = 1; $k <= count($allModules); $k++) {
                        $path = APPPATH.'modules/'.$each.'/views/'.$userType.'/nav_'.$k.'.php';                        
                        if (is_file($path)) {
                            ob_start();
                                include_once($path);  
                            $code[$k] = ob_get_clean();                             
                        }
                    }                    
                }
                ksort($code);
                foreach ($code as $key => $value) {
                    echo $value;
                }
            ?>
            <!-- END----DYNAMIC NAVBAR MENU FOR ALL USERS -->

        </ul>
        <!-- END SIDEBAR MENU -->
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>