<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginTable {

    public function __construct($params)
    {
        $CI =& get_instance();        
        $CI->load->dbforge();
        $table = $params['table'][0];
        $column = $params['col'];                    
               
        $check = $CI->db->table_exists($table);
        if(!$check):

            foreach($column as $k=>$each){
                $eachV = explode('-',$each);
                $this->up($eachV[0],$eachV[1],$table);
            }  
            $CI->dbforge->create_table($table);
        else:

            $tableAtt = $CI->db->list_fields($table);
            foreach($column as $k=>$each){
                $dbAttributes = explode('-',$each);
                $checkEx = in_array($dbAttributes[0],$tableAtt);
                if(!$checkEx){
                    $keys = $k - 1;
                    if($keys > 0){
                        $previousColumn = explode('-', $column[$keys]);
                        $this->columnAfter($dbAttributes[0],$dbAttributes[1],$table,$previousColumn[0]);                            
                    }else{
                        $this->columnAfterFirst($dbAttributes[0],$dbAttributes[1],$table);                            
                    }
                }
            }                        
                    
        endif;
              
    }

    public function up($param,$k,$table)
    {     
        $CI =& get_instance();   
        $CI->dbforge->add_field(array(
            $param => $this->attributeType($k)
            
        ));
        if($k == 'in'){
            $CI->dbforge->add_key($param, TRUE);
        }        
    }   

    public function attributeType($type)
    {
        if($type == 'in'){
            $var = array(
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE                
            );
        }elseif($type == 'i'){
            $var = array(
                'type' => 'INT',
                'constraint' => 11             
            );
        }elseif($type == 'v'){
            $var = array(
                'type' => 'VARCHAR',
                'constraint' => '256'
            );
        }elseif($type == 't'){
            $var = array(
                'type' => 'TEXT'
            );
        }
        return $var;
    }
    
    public function columnAfter($param,$k,$table,$column)
    {
        $CI =& get_instance();  

        $array = $this->attributeType($k);
        foreach($array as $k=>$each) {
			$arr[] = "'$k'".'=>'."'$each'".',';
        }
        $finalArr = rtrim(implode($arr),",");

        $fields = array(
            $param => array($finalArr, 'after' => $column)
        );
        $CI->dbforge->add_column($table, $fields);
    }
    
    public function columnAfterFirst($param,$k,$table)
    {
        $CI =& get_instance(); 

        $array = $this->attributeType($k);
        foreach($array as $k=>$each) {
			$arr[] = "'$k'".'=>'."'$each'".',';
        }
        $finalArr = rtrim(implode($arr),","); 

        $fields = array(
            $param => array($finalArr, 'first' => TRUE)
        );
        $CI->dbforge->add_column($table, $fields);
    }

    public function down($table)
    {
        $CI =& get_instance(); 
        $CI->dbforge->drop_table($table);
    }

}