<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Login Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 
*/

class Login extends MX_Controller  
{
	public function __construct()
	{
		$this->dbLibaryFunction();
	}	

	public function index()
	{
		$this->load->view('login');
	}

	public function dbLibaryFunction()
	{
		// Login Table
		$params =  ['table'=>['login'], 'col'=>['datetime-v','id-in','name-v','email-v','test-i','password-v','userType-v']];		
		$this->load->library('Logintable', $params);
	}
}
