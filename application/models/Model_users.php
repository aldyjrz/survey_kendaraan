<?php
class Model_users extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('tbl_users',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    function insert($data)
    {
        return $this->db->insert('tbl_users',$data);
    }
    
    function edit($data,$id)
    {
        $this->db->where('id_user',$id);
      return  $this->db->update('tbl_users',$data);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_user',$id);
        $this->db->delete('tbl_users');
    }
    function getUser($username,$password)
    {
        return $this->db->get_where('tbl_users',array('username'=>$username,'password'=> md5($password)));
    }
    
    function getAll()
    {
        return $this->db->get('tbl_users');
    }
    
    function getUserById($id)
    {
        $param  =   array('id_user'=>$id);
        return $this->db->get_where('tbl_users',$param);
    }
}