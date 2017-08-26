<?php defined('BASEPATH') OR exit('No direct script access allowed');

class AutoCreateModulesStyle {

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance(); 
        $path = "application/modules/";
        $files = directory_map($path);

        $files = str_replace('\\','',array_keys($files));
        //dbugd($files);

        if(!empty($files))
        {
            foreach($files as $each)
            {
                if (!is_dir('assets/modulesStyle/'.$each)) 
                {
                    mkdir('./assets/modulesStyle/'.$each, 0777, TRUE);

                    mkdir('./assets/modulesStyle/'.$each.'/css', 0777, TRUE);
                    mkdir('./assets/modulesStyle/'.$each.'/js', 0777, TRUE);
                }
            }

            if (is_dir('assets/modulesStyle/Array'))
            {
                rmdir('./assets/modulesStyle/Array');
            }
        }
        
    }


}