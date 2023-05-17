<?php
class model_users extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('users',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    
    
    function getUser($username,$password)
    {
        return $this->db->get_where('users',array('username'=>$username,'password'=> md5($password)));
    }
    
    function getAll()
    {
        return $this->db->get('users');
    }
    
    function getUserById($id)
    {
        $param  =   array('id'=>$id);
        return $this->db->get_where('users',$param);
    }
}