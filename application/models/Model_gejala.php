<?php
class Model_gejala extends CI_Model{
    
    
  
    
    function insert($data)
    {
        return $this->db->insert('tbl_gejala',$data);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_gejala',$id);
      return  $this->db->update('tbl_gejala',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_gejala',$id);
        $this->db->delete('tbl_gejala');
    }
  
    function getAll()
    {
        $query =   $this->db->query('select * from tbl_gejala  LEFT JOIN tbl_kerusakan  ON tbl_gejala.kode_kerusakan = tbl_kerusakan.kode_kerusakan LEFT JOIN tbl_penyebab  ON tbl_gejala.kode_penyebab = tbl_penyebab.kode_penyebab');
       
        return $query;
     }
    
    function    getDataById($id)
    {
        $param  =   array('id_gejala'=>$id);
        $this->db->select('*');
        $this->db->from('tbl_kerusakan');
        $this->db->join('tbl_gejala', 'tbl_gejala.kode_kerusakan = tbl_kerusakan.kode_kerusakan');
        $this->db->where($param);

        $query = $this->db->get();
        
        return $query;
    
    }
    function getDataByIdKerusakan($id)
    {
        $param  =   array('tbl_kerusakan.kode_kerusakan'=>$id);
        $this->db->select('*');
        $this->db->from('tbl_kerusakan');
        $this->db->join('tbl_gejala', 'tbl_gejala.kode_kerusakan = tbl_kerusakan.kode_kerusakan');
        $this->db->where($param);

        $query = $this->db->get();
        
        return $query;
    
    }
}