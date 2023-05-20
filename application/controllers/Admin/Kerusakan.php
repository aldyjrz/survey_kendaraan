<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kerusakan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
			$this->load->model('Model_kerusakan');
		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Master Kerusakan - Survey Kendaraan"
		);

		$data['record'] = $this->Model_kerusakan->getAll()->result();
		$this->load->view('kerusakan/list', $data);
	}


	public function tambah()
	{

		$now = date("Y-m-d H:i:s");

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);
			$kerusakan = $this->input->post("kerusakan", TRUE);
 
			$data = array(
				"kode_kerusakan" => $kode_kerusakan,
				"kerusakan" => $kerusakan,
				"created_date" => $now
			);
			if ($this->Model_kerusakan->insert($data)) {
				redirect("Admin/Kerusakan");
			}
		} else {
			$data = array(
				'title' => "Data Kerusakan - Survey Kendaraan"
			);
			$this->load->view('kerusakan/add', $data);
		}
	}

	public function edit($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);
			$kerusakan = $this->input->post("kerusakan", TRUE);
			$id_kerusakan = $this->input->post("id_kerusakan", TRUE); 

			$data = array(
				"kerusakan" => $kerusakan,
				"kode_kerusakan" => $kode_kerusakan
			);
			if ($this->Model_kerusakan->edit($data, $id_kerusakan)) {
				$this->session->set_flashdata("message", "Update Kerusakan berhasil");
				redirect("Admin/Kerusakan/edit/" . $id_kerusakan);
			} else {
				$this->session->set_flashdata("message", "Update Kerusakan Gagal");
				redirect("Admin/Kerusakan/edit/" . $id_kerusakan);
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_kerusakan->getDataById($id)->result();

			$this->load->view('kerusakan/edit', $data);
		}
	}
	 
	public function delete($id)
	{

		$this->Model_kerusakan->delete($id);

		redirect("Admin/Kerusakan");
	}
}
