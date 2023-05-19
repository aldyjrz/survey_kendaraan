<?php

function chek_session()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    $level=$CI->session->userdata('level');

    if($session!='oke')
    {
        redirect('auth/login');
    }else{
       
    }
}
 
?>
