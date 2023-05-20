<?php
class Model_penyebab extends CI_Model
{




    function insert($data)
    {
        return $this->db->insert('tbl_penyebab', $data);
    }

    function edit($data, $id)
    {
        $this->db->where('id_penyebab', $id);
        return  $this->db->update('tbl_penyebab', $data);
    }


    function delete($id)
    {
        $this->db->where('id_penyebab', $id);
        $this->db->delete('tbl_penyebab');
    }

    function getAll()
    {
        $this->db->select('*');
        $this->db->from('tbl_penyebab');
        $this->db->join('tbl_gejala', 'tbl_penyebab.kode_gejala = tbl_gejala.kode_gejala');
 
        $query = $this->db->get();
        return $query;
    }

    function getDataById($id)
    {
        $param  =   array('id_penyebab' => $id);
        $this->db->select('*');
        $this->db->from('tbl_kerusakan');
        $this->db->join('tbl_penyebab', 'tbl_penyebab.kode_kerusakan = tbl_kerusakan.kode_kerusakan');
        $this->db->join('tbl_gejala', 'tbl_penyebab.kode_gejala = tbl_gejala.kode_gejala');

        $this->db->where($param);

        $query = $this->db->get();

        return $query;
    }
    function getDataByIdKerusakan($id)
    {
        $param  =   array('tbl_kerusakan.kode_kerusakan' => $id);
        $this->db->select('*');
        $this->db->from('tbl_kerusakan');
        $this->db->join('tbl_penyebab', 'tbl_penyebab.kode_kerusakan = tbl_kerusakan.kode_kerusakan');
        $this->db->where($param);

        $query = $this->db->get();

        return $query;
    }
}
