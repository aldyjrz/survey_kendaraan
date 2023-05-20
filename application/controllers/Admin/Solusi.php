<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Solusi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_penyebab');
		$this->load->model('Model_kerusakan');
		$this->load->model('Model_gejala');
		$this->load->model('Model_solusi');

		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Master Solusi - Survey Kendaraan"
		);

		$data['record'] = $this->Model_solusi->getAll()->result();
		$this->load->view('solusi/list', $data);
	}


	public function tambah()
	{

		$now = date("Y-m-d H:i:s");

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$kode_solusi = $this->input->post("kode_solusi", TRUE);
			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);
			$solusi = $this->input->post("solusi", TRUE);
 
			$data = array(
				"kode_solusi" => $kode_solusi,
				"kode_penyebab" => $kode_penyebab, 
				"solusi" => $solusi,
				"created_date" => $now
			);
			if ($this->Model_solusi->insert($data)) {
				redirect("Admin/Solusi");
			}
		} else {
			$data = array(
				'title' => "Data Solusi - Survey Kendaraan"
			);
			$data['penyebab'] = $this->Model_solusi->getAll()->result();
 
			$this->load->view('solusi/add', $data);
		}
	}

	public function edit($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$solusi = $this->input->post("solusi", TRUE);
			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);
 			$kode_solusi = $this->input->post("kode_solusi", TRUE);

			$id_solusi = $this->input->post("id_solusi", TRUE); 

			$data = array(
				"kode_solusi" => $kode_solusi,
 				"kode_penyebab" => $kode_penyebab,

				"solusi" => $solusi,
				"created_date" => $now
			);
			if ($this->Model_penyebab->edit($data, $id_solusi)) {
				$this->session->set_flashdata("message", "Update Penyebab berhasil");
				redirect("Admin/Solusi/edit/" . $id_solusi);
			} else {
				$this->session->set_flashdata("message", "Update Penyebab Gagal");
				redirect("Admin/Solusi/edit/" . $id_solusi);
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_solusi->getDataById($id)->result();
			$data['rusak'] = $this->Model_kerusakan->getAll()->result();
			$data['penyebab'] = $this->Model_penyebab->getAll()->result();
			
			$this->load->view('solusi/edit', $data);
		}
	}
	 
	 
	public function delete($id)
	{

		$this->Model_solusi->delete($id);

		redirect("Admin/Solusi");
	}
}
