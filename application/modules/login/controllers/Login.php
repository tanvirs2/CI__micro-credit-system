<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Login Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 23-Aug
*/

class Login extends MX_Controller  
{
	public function __construct()
	{			
		//$this->dbLibaryFunction();
	}	

	public function index()
	{
		$this->load->view('login');
	}

	function loginCheck()
	{
		$data = $this->input->post();
		$this->load->model('loginModel');
		$data = $this->loginModel->checkUserInfo($data);
		dbugd($data);
	}

	public function dbLibaryFunction()
	{
		// Login Table		
		$params =  ['login'=>['id-in','name-v','email-v','password-v','userType-v','datetTime-v']];		
		$this->load->library('Logintable', $params);
	}
}
