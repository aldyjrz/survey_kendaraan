<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_gejala');
		$this->load->model('Model_kerusakan');
		$this->load->model('Model_penyebab');

		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Master Gejala - Survey Kendaraan"
		);

		$data['record'] = $this->Model_gejala->getAll()->result();
		$this->load->view('gejala/list', $data);
	}


	public function tambah()
	{

		$now = date("Y-m-d H:i:s");

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
 			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);
 			$kode_gejala = $this->input->post("kode_gejala", TRUE);

			$gejala = $this->input->post("gejala", TRUE);
 			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);
			$data = array(
				"kode_gejala" => $kode_gejala, 
				"kode_penyebab" => $kode_penyebab,
				"gejala" => $gejala,
				"kode_kerusakan"=>$kode_kerusakan,
				"created_date" => $now
			);
			if ($this->Model_gejala->insert($data)) {
				redirect("Admin/Gejala");
			}
		} else {
			$data = array(
				'title' => "Data Gejala - Survey Kendaraan"
			);
			$data['penyebab'] = $this->Model_penyebab->getAll()->result();

			$data['rusak'] = $this->Model_kerusakan->getAll()->result();
			$this->load->view('gejala/add', $data);
		}
	}

	public function edit($id)
	{


		if ($_SERVER['REQUEST_METHOD'] == "POST") {

		 
			$id_gejala = $this->input->post("id_gejala", TRUE);
			$kode_penyebab = $this->input->post("kode_penyebab", TRUE);
 			$kode_gejala = $this->input->post("kode_gejala", TRUE);

			$gejala = $this->input->post("gejala", TRUE);
 			$kode_kerusakan = $this->input->post("kode_kerusakan", TRUE);

			$data = array(
				"kode_gejala" => $kode_gejala, 
				"kode_penyebab" => $kode_penyebab,
				"gejala" => $gejala,
				"kode_kerusakan"=>$kode_kerusakan,
				"created_date" => $now
			);
			if ($this->Model_gejala->edit($data, $id_gejala)) {
				$this->session->set_flashdata("message", "Update Gejala berhasil");
				redirect("Admin/Gejala/edit/" . $id_gejala);
			} else {
				$this->session->set_flashdata("message", "Update Gejala Gagal");
				redirect("Admin/Gejala/edit/" . $id_gejala);
			}
		} else {
			$data = array(
				'title' => "Survey Kendaraan"
			);
			$data['record'] = $this->Model_gejala->getDataById($id)->result();
			$data['rusak'] = $this->Model_kerusakan->getAll()->result();
			$data['penyebab'] = $this->Model_penyebab->getAll()->result();

			$this->load->view('gejala/edit', $data);
		}
	}
	public function kerusakan($id)
	{



		$data = array(
			'title' => "Survey Kendaraan"
		);
		$data['record'] = $this->Model_gejala->getDataByIdKerusakan($id)->result();

		$this->load->view('gejala/list', $data);
	}

	public function delete($id)
	{

		$this->Model_gejala->delete($id);

		redirect("Admin/Gejala");
	}
}
