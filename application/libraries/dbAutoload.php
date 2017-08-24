<?php defined('BASEPATH') OR exit('No direct script access allowed');
require BASEPATH."helpers/directory_helper".EXT;

class DbAutoload {

    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance(); /* CI CREATE INSTANCE */

        /* GET ALL DBtABLES FILES */
        $libraries = directory_map(APPPATH."libraries/dbTables", TRUE);
        foreach($libraries as $library)
		{			
            if($library !== 'index.html' && $library !== 'index.php' && ! is_array($library)) 
            {		
                $files['libraries'][] = strtolower($library);
                $filesname[] = pathinfo(strtolower($library), PATHINFO_FILENAME);
			}
        }

        /* GET ALL DATABASE TABLES */
        $check = $this->ci->db->list_tables();
        /* GET DIFFENENCE BITWEEN DATABASE TABLE AND FILES TABLE */
        $tableDifferent = array_diff($filesname, $check);

        /* IF UPDATE URL VALID */
        $validUri = $this->ci->uri->segment(2);        
        if ($validUri == 'system-update')
        {
            foreach($files['libraries'] as $each) 
            {
                $path = APPPATH."libraries/dbTables/".$each;
                $fileContents[] = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            }

            $output = array_slice($fileContents[0], 2);
            
            foreach ($fileContents as $key => $value) 
            {            
                $seed = array_slice($value, 2);
                $attribute[$value[0]] = [explode(',',$value[1]), $seed];            
            }   
            

            $this->ci->load->library('logintable', $attribute);
            /* SHOW MESSAGE COMPLETE UPDATE PROCESS */            
            $this->ci->load->view('systemupdatemessages/systemUpdateSuccess');                       
                       
        } else {
            /* STOP SCRIPT WHEN NEED UPDATE */
            if(!empty($tableDifferent)) 
            {   
                $this->ci->load->view('systemupdatemessages/systemUpdateNeed');  
            }
        }
        
        
	
    }

}
