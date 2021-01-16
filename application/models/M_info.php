<?php 
 
class M_info extends CI_Model{
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    function hapus_data($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
      }
      function update_data($where,$data){
      
        $this->db->update('tb_info',$data,$where);
    }
     
}
