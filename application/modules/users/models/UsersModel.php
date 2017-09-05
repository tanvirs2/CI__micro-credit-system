<?php

class UsersModel extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
            // Your own constructor code
    }

    protected $table = 'members';

    public function addMember($data) 
    {        
        $this->db->insert($this->table, $data);        
        $result = $this->db->insert_id();
        return $result;
    }

    public function memberList() 
    {
        $result = $this->db->get($this->table)->result_array();
        return $result;
    }

    public function deleteMember($memId) 
    {
        $this->db->where('memId', $memId);
        $result = $this->db->delete($this->table);
        return $result;        
    }
    
}