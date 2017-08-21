<?php defined('BASEPATH') OR exit('No direct script access allowed');

class LoginTable {

    protected $ci;

    public function __construct($params)
    {
        /* LOAD INSTANCE AND DBFOREGE */
        $this->ci =& get_instance();    
        $this->ci->load->dbforge();
        
        /* STORE INPUT DATA */
        $table = $params['table'][0];
        $column = $params['col'];                    
               
        /* CHECK TABLE EXISTS */
        $check = $this->ci->db->table_exists($table);
        if(!$check):
            /* WHEN TABLE NOT FOUND */
            foreach($column as $k=>$each){
                $eachV = explode('-',$each);
                $this->up($eachV[0],$eachV[1],$table);
            }  
            $this->ci->dbforge->create_table($table);
        else:
            /* WHEN TABLE FOUND */
            $count = false;          
            $tableAtt = $this->ci->db->list_fields($table); /* LIST OF TABLE ATTRIBUTES */
            /* EXPLOAD INPUT ATTBUTE NAME AND TYPE */
            foreach($column as $k=>$each){
                $eachV = explode('-',$each);
                $eachValue[] = $eachV[0];
            } 

            /* IF INPUT ATTBUTE AND DATABASE ATTRBUTE COUNT EQULE */
            if(count($tableAtt) == count($eachValue)){
                $count = true;
            }           

            /* FOR DROP DATABASE ATTRUBUTE */
            if(count($tableAtt) > count($eachValue)):
                foreach($tableAtt as $k=>$each){
                    $checkEx = in_array($each,$eachValue);
                    if(!$checkEx){
                        $this->dropColumn($each, $table);
                    }
                }  
            else:
            /* FOR MODIFY AND ALTER ATTRBUTE */
                foreach($column as $k=>$each){
                    $dbAttributes = explode('-',$each);
                    $checkEx = in_array($dbAttributes[0],$tableAtt);
                    if(!$checkEx){
                        if($count){ /* MODIFY ATTRUBUTE */
                            $this->columnModify($dbAttributes[0],$dbAttributes[1],$table,$tableAtt[$k]);
                        }else{ /* ALTER AFTER NEW ATTRUBUTE */
                            $keys = $k - 1;
                            if($keys > 0){
                                $previousColumn = explode('-', $column[$keys]);
                                $this->columnAfter($dbAttributes[0],$dbAttributes[1],$table,$previousColumn[0]);                            
                            }else{
                                $this->columnAfterFirst($dbAttributes[0],$dbAttributes[1],$table);                            
                            }
                        }                    
                    }
                }    

            endif;                      
                    
        endif;
              
    }

    /* CREATE NEW TABLE AND ATTBUTES */
    public function up($param,$k,$table)
    {       
        $this->ci->dbforge->add_field(array(
            $param => $this->attributeType($k)
            
        ));
        if($k == 'in'){
            $this->ci->dbforge->add_key($param, TRUE);
        }        
    }   

    /* ALL ATTRUBUTES TYPES */
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
                'constraint' => 11,
                'null' => FALSE,          
            );
        }elseif($type == 'v'){
            $var = array(
                'type' => 'VARCHAR',
                'constraint' => '256',
                'null' => FALSE
            );
        }elseif($type == 't'){
            $var = array(
                'type' => 'TEXT',
                'null' => FALSE
            );
        }
        return $var;
    }
    
    /* ADD COLUMN AFTER PREVIOUS COLUMN */
    public function columnAfter($param,$k,$table,$column)
    {
        $attType = $this->attributeType($k);
        $createAtt = array_merge($attType, ['after' => $column]);
        $fields = array(
            $param => $createAtt
        );
        $this->ci->dbforge->add_column($table, $fields);
    }
    
    /* SET NEW COLUMN SERIAL FIRST IN TABLE */
    public function columnAfterFirst($param,$k,$table)
    {
        $attType = $this->attributeType($k);
        $createAtt = array_merge($attType, ['first' => TRUE]);
        $fields = array(
            $param => $createAtt
        );
        $this->ci->dbforge->add_column($table, $fields);
    }

    /* FOR TABLE COLUMN MODIFY */
    public function columnModify($param,$k,$table,$oldCol)
    {
        $attType = $this->attributeType($k);
        $createAtt = array_merge(['name' => $param], $attType);
        $fields = array(
            $oldCol => $createAtt
        );
        $this->ci->dbforge->modify_column($table, $fields);
    }

    /* FOR DROP COLUMN */
    public function dropColumn($param,$table)
    {
        $this->ci->dbforge->drop_column($table, $param);
    }

    /* FOR DROP TABLE */
    public function down($table)
    {
        $this->ci->dbforge->drop_table($table);
    }

}