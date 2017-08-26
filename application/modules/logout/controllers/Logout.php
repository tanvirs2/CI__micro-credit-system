<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* 
	Module: Logout Module Section
	Author: Nihal IT
	Project: Micro-Credit
	Start: August 2017 
	Last Update: 26-Aug
*/

class Logout extends MX_Controller  
{
	public function __construct()
	{	

    }

    public function index()
    {
        unset($_SESSION['userInfo']);
        session_destroy();
        redirect(base_url());
    }
    


}