<?php
class Model_kerusakan extends CI_Model{
    
    
  
    
    function insert($data)
    {
        return $this->db->insert('tbl_kerusakan',$data);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_kerusakan',$id);
      return  $this->db->update('tbl_kerusakan',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_kerusakan',$id);
        $this->db->delete('tbl_kerusakan');
    }
  
    function getAll()
    {
        return $this->db->get('tbl_kerusakan');
    }
    
    function getDataById($id)
    {
        $param  =   array('id_kerusakan'=>$id);
        return $this->db->get_where('tbl_kerusakan',$param);
    }
}