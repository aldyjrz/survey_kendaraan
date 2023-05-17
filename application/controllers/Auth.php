
<?php defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_users');
     }

    function login()
    {
        if (isset($_POST['submit'])) {

            // proses login disini
            $username   =   $this->input->post('username');
            $password   =   $this->input->post('password');
            $hasil      =   $this->Model_users->login($username, $password);
            if ($hasil == 1) {

                $ceckk      =  $this->Model_users->ceck($username, $password)->result();
                // echo $ceckk[0]->id_cabang;
                // die;

                // update last login
                $this->db->where('username', $username);
                $this->db->update('users', array('last_login' => date('Y-m-d H:i:s')));
                // $this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
                $session = array(
                    'id_user'  => $ceckk[0]->id_user,
                    'username'  => $username,
                    'nama_lengkap'  => $ceckk[0]->nama_lengkap,
                    'id_cabang'  => $ceckk[0]->id_cabang,
                    'level'  => $ceckk[0]->level,
                    'status_login' => 'oke',
                );
                $this->session->set_userdata($session);
                if ($$ceckk[0]->id_cabang == 0) {
                    redirect('admin/dashboard');
                } else {
                    redirect('dashboard');
                }
            } else {
                redirect('auth/login');
            }
        } else {
            //$this->load->view('form_login2');
            chek_session_login();
            $this->load->view('form_login');
        }
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
