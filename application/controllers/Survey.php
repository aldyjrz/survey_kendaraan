<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Survey extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kerusakan');
		$this->load->model('Model_gejala');
		$this->load->model('Model_penyebab');
		$this->load->model('Model_solusi');

		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Survey Kendaraan"
		);
		if ($this->session->level == "admin") {
			redirect('admin/Home');
		} else {


			$this->load->view('survey/index', $data);
		}
	}

	public function gejala()
	{
		$data = array(
			'title' => "Diagnosa Berdasarkan Gejala"
		);
		$data['rusak'] = $this->Model_gejala->getAll()->result();

		$this->load->view('survey/gejala', $data);
	}

	public function getGejala()
	{
		$kode_kerusakan = $this->input->post('kerusakan', TRUE);
		$get = $this->Model_gejala->getDataByIdKerusakan($kode_kerusakan)->result();
		echo json_encode($get);
	}


	public function post_kerusakan()
	{

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$data = array(
				'title' => "Hasil Diagnosa Berdasarkan Kerusakan"
			);
			$kerusakan = $this->input->post("kerusakan");
			$gejala = $this->input->post("gejala");

			$jml_gejala = count($gejala);
			$q =  str_replace("[", "", json_encode($gejala));
			$str =  str_replace("]", "", $q);

			$data['hasil'] = $this->db->query("select * from tbl_penyebab a 
		JOIN tbl_solusi b ON a.kode_penyebab = b.kode_penyebab  
		JOIN tbl_gejala c ON a.kode_gejala = c.kode_gejala 
		JOIN tbl_kerusakan d ON a.kode_kerusakan = d.kode_kerusakan
		where a.kode_gejala IN($str) AND d.kode_kerusakan ='$kerusakan';")->result();


			$this->load->view('survey/hasil_kerusakan', $data);
		} else {
			redirect("Survey");
		}
	}

	public function post_gejala()
	{

		if ($_SERVER['REQUEST_METHOD'] == "POST") {
			$data = array(
				'title' => "Hasil Diagnosa Berdasarkan Gejala"
			);
 			$gejala = $this->input->post("gejala");

 			$q =  str_replace("[", "", json_encode($gejala));
			$str =  str_replace("]", "", $q);

			$data['hasil'] = $this->db->query("SELECT * FROM tbl_penyebab a LEFT JOIN tbl_solusi b ON a.kode_penyebab = b.kode_penyebab RIGHT JOIN tbl_gejala c ON c.kode_gejala = a.kode_gejala LEFT JOIN tbl_kerusakan d ON a.kode_kerusakan = d.kode_kerusakan WHERE c.kode_gejala  IN($str);")->result();
 
			$this->load->view('survey/hasil_gejala', $data);
		} else {
			redirect("Survey");
		}
	}
	public function kerusakan()
	{
		$data = array(
			'title' => "Diagnosa Berdasarkan Kerusakan"
		);
		$data['rusak'] = $this->Model_kerusakan->getAll()->result();

		$this->load->view('survey/kerusakan', $data);
	}
}
