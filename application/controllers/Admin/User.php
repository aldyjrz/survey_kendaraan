<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_users');
		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Survey Kendaraan"
		);

		$data['record'] = $this->Model_users->getAll()->result();
		$this->load->view('user/list', $data);
	}


	public function tambah()
	{

		$now = date("Y-m-d H:i:s");

		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$nama = $this->input->post("nama", TRUE);
			$username = $this->input->post("username", TRUE);
			$password = $this->input->post("password", TRUE);
			$level = $this->input->post("level", TRUE);
			$email = $this->input->post("email", TRUE);

			$data = array(
				"nama" => $nama,
				"username" => $username,
				"password" => md5($password),
				"level" => $level,
				"email" => $email,
				"created_date" => $now
			);
			if ($this->Model_users->insert($data)) {
				redirect("admin/User");
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$this->load->view('user/add', $data);
		}
	}

	public function edit($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$nama = $this->input->post("nama", TRUE);
			$username = $this->input->post("username", TRUE);
			$id_user = $this->input->post("id_user", TRUE);
			$level = $this->input->post("level", TRUE);
			$email = $this->input->post("email", TRUE);

			$data = array(
				"nama" => $nama,
				"username" => $username,
				"level" => $level,
				"email" => $email,
				"modified_date" => $now
			);
			if ($this->Model_users->edit($data, $id_user)) {
				$this->session->set_flashdata("message", "Update berhasil");
				redirect("admin/User/edit/" . $id_user);
			} else {
				$this->session->set_flashdata("message", "Update Gagal");
				redirect("admin/User/edit/" . $id_user);
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_users->getUserById($id)->result();

			$this->load->view('user/edit', $data);
		}
	}
	public function edit_pass($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$old_password = md5($this->input->post("old_password", TRUE));
			$new_password = md5($this->input->post("new_password", TRUE));
			$id_user = $this->input->post("id_user", TRUE);

			$cek = $this->Model_users->getUserById($id_user)->result();
			echo $cek[0]->password;
			echo "<br>";
			echo $old_password;
 			if ($cek[0]->password == $old_password) {

				$data = array(
					"password" => $new_password,

					"modified_date" => $now
				);
				if ($this->Model_users->edit($data, $id_user)) {
					$this->session->set_flashdata("message", "Update Password berhasil");
					redirect("admin/User/edit/" . $id_user);
				} else {
					$this->session->set_flashdata("message", "Update Password Gagal");
					
					redirect("admin/User/edit/" . $id_user);
				}
			} else {
				$this->session->set_flashdata("message", "Password lama tidak sesuai, masukan kembali password lama");
				redirect("admin/User/edit/" . $id_user);
			}
		}
	}


	public function delete($id)
	{

		$this->Model_users->delete($id);

		redirect("admin/User");
	}
}
