<?php
class Model_solusi extends CI_Model
{




    function insert($data)
    {
        return $this->db->insert('tbl_solusi', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_solusi', $id);
        return  $this->db->update('tbl_solusi', $data);
    }


    function delete($id)
    {
        $this->db->where('id_solusi', $id);
        $this->db->delete('tbl_solusi');
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_solusi');
        $this->db->join('tbl_penyebab', 'tbl_penyebab.kode_penyebab = tbl_solusi.kode_penyebab');
 
        $query = $this->db->get();
        return $query;
    }

    function getDataById($id)
    {
        $param  =   array('id_solusi' => $id);
        $this->db->select('*');
        $this->db->from('tbl_solusi');
        $this->db->join('tbl_penyebab', 'tbl_penyebab.kode_penyebab = tbl_solusi.kode_penyebab');
 
        $this->db->where($param);

        $query = $this->db->get();

        return $query;
    }
    
}
