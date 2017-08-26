<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Dashboard Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 26-Aug
*/

class Members extends MX_Controller  
{
    public function __construct()
	{			
        if(empty($_SESSION['userInfo']))
		{
            $this->session->set_flashdata('error', 'Please input email & password.');
			redirect(base_url());
		}	
    }


    public function index() 
	{
        $data['title'] = 'Members';
        $data['allContents'] = $this->load->view('membersContent','',true);      
		$this->loadAllContent($data);	
    }    

    public function loadAllContent($data)
    {
        $data['adminHeaderSrc'] = $this->load->view('admin/adminHeaderSrc','',true);
		$data['adminHeader']    = $this->load->view('admin/adminHeader','',true);
		$data['adminSidebar']   = $this->load->view('admin/adminSidebar','',true);             
		$data['adminFooter']    = $this->load->view('admin/adminFooter','',true);
        $data['adminFooterSrc'] = $this->load->view('admin/adminFooterSrc','',true);
        $this->load->view('admin/adminMaster',$data);
    }

}