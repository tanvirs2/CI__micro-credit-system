<?php

class LoginModel extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
            // Your own constructor code
    }

    public function checkUserInfo($data)
    {
        $this->db->select('*');
        $this->db->where('email', $data['email']);
        $this->db->where('password', $data['password']);
        $result = $this->db->get('login')->result_array();
        return $result;
    }
    
}