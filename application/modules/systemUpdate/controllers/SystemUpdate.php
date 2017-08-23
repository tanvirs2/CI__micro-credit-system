<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: System Update Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 23-Aug
*/

class SystemUpdate extends MX_Controller  
{
	public function __construct()
	{				
		$this->load->library('dbAutoload');					
	}
	
	public function index()
	{
		$this->load->view('systemUpdate');
	}
}
