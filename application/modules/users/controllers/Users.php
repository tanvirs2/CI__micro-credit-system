<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Dashboard Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 27-Aug
*/

class Users extends MX_Controller  
{
    protected $uType;
    
    public function __construct()
    {	
        		
        $this->checkSession();
        $this->uType = returnUserType($_SESSION['userInfo']['userType']);
        $this->load->model('UsersModel');        
    }    

    public function index() 
	{
        $this->activeMenu('Add Members');
        $data = ['Add Member','content','']; /* P1=TITLE|P2=PAGENAME|P3=PARAMITER */
		$this->loadAllContent($data);	
    }

    public function addMember() 
    {        
    
        $post = $this->input->post();
        $fileInfoult = $this->validationCheck($post);
        if($fileInfoult){
            /* LOAD FILE UPLOAD LIBRARY */
            $data = ['folder'=>'members','size'=>100,'width'=>300,'height'=>300];
            $config = $this->fileConfig($data);    
            $this->load->library('upload', $config);
            /* CHECK FILE ERROR WITH GIVEN CONFIG */    
            if ( ! $this->upload->do_upload('memImg')) {
                $error = array('error' => $this->upload->display_errors());
                $this->jsonMsgReturn(false,'File must below 100KB and Size: W132 X H170.And Only JPG Format.');

            } else {                
                $fileInfo = $this->upload->data();                
                $insertId = $this->UsersModel->addMember($post);
                if($fileInfoult){
                    $this->renameFile($fileInfo, 'member'.$insertId); 
                    $this->jsonMsgReturn(true,'Data inserted success.');                  
                } else {;
                    $this->jsonMsgReturn(false,'Data insert error.');
                }                           
            }        

        } else {
            $this->jsonMsgReturn(false, 'Please fillup all mendatory field.');
        }
        
    }
    
    public function memberList() 
    {
        $this->activeMenu('Member List');
        $data = ['Member List','memberList','']; 
        $this->loadAllContent($data);	
    }


    public function validationCheck($postData) 
    {
        $this->load->helper('form');        
        $this->load->library('form_validation');

        foreach($postData as $k => $each) {
            $this->form_validation->set_rules($k, 'Field', 'required');
        }
        if ($this->form_validation->run() == FALSE) {
                return false;
        } else {
                return true;
        }        
    }

    public function renameFile($fileInfo,$insertId) 
    {
        $file_path     = $fileInfo['file_path'];
        $file          = $fileInfo['full_path'];
        $file_ext      = $fileInfo['file_ext'];            
        $final_file_name = $insertId.$file_ext;   
        
        // here is the renaming functon
        rename($file, $file_path . $final_file_name);
    }


    public function fileConfig($data) 
    {
        $config['upload_path']          = './uploads/'.$data['folder'];
        $config['allowed_types']        = 'jpg';
        $config['max_size']             = $data['size'];
        $config['max_width']            = $data['width'];
        $config['max_height']           = $data['height'];
        return $config;
    }

    public function jsonMsgReturn($type, $msg) 
    {
        echo json_encode(['type'=>$type,'msg'=>$msg]);
    }
    

    


    






















    /* MENDATORY FUNCTOINS MUST NEED EVERY MODULES CONTROLLER */

    public function loadAllContent($dynamicContent)
    {
        /* LOAD DYNAMIC CONTENT */
        $data['title'] = $dynamicContent[0];
        $data['contents'] = $this->load->view($this->uType.'/'.$dynamicContent[1],$dynamicContent[2],true);
        /* LOAD TEMPLATE MAIN CONTENT */
        $data2['userType']      = $this->uType;
        $data['adminHeaderSrc'] = $this->load->view('templeteSrc/headerSrc',$data2,true);
		$data['adminHeader']    = $this->load->view('templeteSrc/header',$data2,true);
		$data['adminSidebar']   = $this->load->view('templeteSrc/sidebar',$data2,true);             
		$data['adminFooter']    = $this->load->view('templeteSrc/footer',$data2,true);
        $data['adminFooterSrc'] = $this->load->view('templeteSrc/footerSrc',$data2,true);
        $this->load->view('templeteSrc/master',$data);
    }

    public function activeMenu($data)
    {
        $_SESSION['menuOpen']   = $this->router->fetch_module();
        $_SESSION['menuActive'] = $data;
    }

    public function checkSession()
    {
        if(empty($_SESSION['userInfo']))
		{
            $this->session->set_flashdata('error', 'Please input email & password.');
			redirect(base_url());
        }	
    }

}