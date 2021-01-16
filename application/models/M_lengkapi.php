<?php 
 
class M_lengkapi extends CI_Model{
    function update_data($where,$data){
      
        $this->db->update('tb_alumni',$data,$where);
    }
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
}