<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Dashboard Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 24-Aug
*/

class Dashboard extends MX_Controller  
{
    public function __construct()
	{			
		//$this->dbLibaryFunction();
    }
    
    public function index()
	{
        $data['title'] = 'Dashboard';
        $data['allContents'] = $this->load->view('dashboardContent','',true);     
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