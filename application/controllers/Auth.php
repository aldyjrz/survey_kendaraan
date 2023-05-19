
<?php defined('BASEPATH') or exit('No direct script access allowed');
/**
 *  @property Auth  $this->load
 */
class Auth extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        //LOAD MODEL DARI CONSTRUCTOR AUTH
        $this->load->model('Model_users');
    }


    //FUNGSI LOGIN
    function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            // proses login disini
            $username   =    $this->input->post('username', TRUE);
            $password   =   $this->input->post('password', TRUE);



            $getUser      =  $this->Model_users->getUser($username, $password)->result();
            if ($getUser != null) {



                //simpan session untuk pengecekan login dan memudahkan pengambilan data
                $session = array(
                    'id_user'  => $getUser[0]->id_user,
                    'username'  => $username,
                    'nama_lengkap'  => $getUser[0]->nama_lengkap,
                    'level'  => $getUser[0]->level,
                    'status_login' => 'oke',
                );
                
                $this->session->set_userdata($session);

                //jika level admin, maka ke dashboard
                if ($getUser[0]->level == "admin") {
                    redirect('admin/Home');
                } else {
                    redirect('Home');
                }

                //jika user tidak ditemukan
            } else {
                $this->session->set_flashdata("message", "User Tidak ditemukan!!");
                redirect('auth/login');
            }

            //jika request method bukan POST makan tampilkan auth-login
        } else {
            $data = array(
                'title' => "Survey Kendaraan - LOGIN"
            );

            $this->load->view('auth-login', $data);
        }
    }


    function logout()
    {
        $this->session->sess_destroy();
        redirect('auth/login');
    }
}
