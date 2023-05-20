<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyebab extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_penyebab');
		$this->load->model('Model_kerusakan');
		$this->load->model('Model_gejala');

		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Master Penyebab - Survey Kendaraan"
		);

		$data['record'] = $this->Model_penyebab->getAll()->result();
		$this->load->view('penyebab/list', $data);
	}


	public function tambah()
	{

		$now = date("Y-m-d H:i:s");

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$kode_gejala = $this->input->post("kode_gejala", TRUE);
			$penyebab = $this->input->post("penyebab", TRUE);
			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);
			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);

			$data = array(
				"kode_gejala" => $kode_gejala,
				"kode_penyebab" => $kode_penyebab,

				"kode_kerusakan" => $kode_kerusakan,
				"penyebab" => $penyebab,
				"created_date" => $now
			);
			if ($this->Model_penyebab->insert($data)) {
				redirect("Admin/Penyebab");
			}
		} else {
			$data = array(
				'title' => "Data Penyebab - Survey Kendaraan"
			);
			$data['rusak'] = $this->Model_kerusakan->getAll()->result();
			$data['gejala'] = $this->Model_gejala->getAll()->result();

			$this->load->view('penyebab/add', $data);
		}
	}

	public function edit($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

			$kode_gejala = $this->input->post("kode_gejala", TRUE);
			$penyebab = $this->input->post("penyebab", TRUE);
			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);
			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);

			$id_penyebab = $this->input->post("id_penyebab", TRUE); 

			$data = array(
				"kode_gejala" => $kode_gejala,
				"kode_kerusakan" => $kode_kerusakan,
				"kode_penyebab" => $kode_penyebab,

				"penyebab" => $penyebab,
				"created_date" => $now
			);
			if ($this->Model_penyebab->edit($data, $id_penyebab)) {
				$this->session->set_flashdata("message", "Update Penyebab berhasil");
				redirect("Admin/Penyebab/edit/" . $id_penyebab);
			} else {
				$this->session->set_flashdata("message", "Update Penyebab Gagal");
				redirect("Admin/Penyebab/edit/" . $id_penyebab);
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_penyebab->getDataById($id)->result();
			$data['rusak'] = $this->Model_kerusakan->getAll()->result();
			$data['gejala'] = $this->Model_gejala->getAll()->result();
			$this->load->view('penyebab/edit', $data);
		}
	}
	public function solusi($id)
	{


 
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_penyebab->getDataByIdKerusakan($id)->result();

			$this->load->view('penyebab/list', $data);
		 
	}
	 
	public function delete($id)
	{

		$this->Model_penyebab->delete($id);

		redirect("Admin/Penyebab");
	}
}
