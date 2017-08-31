<?php

class UsersModel extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
            // Your own constructor code
    }

    public function addMember($data) 
    {        
        $this->db->insert('members', $data);        
        $result = $this->db->insert_id();
        return $result;
    }
    
}