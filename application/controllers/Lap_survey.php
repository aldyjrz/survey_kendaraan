<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_survey extends CI_Controller {

	public function index() {
		$data = array(
			'title' => "Laporan Survey"
		);
		$this->load->view('laporan/survey', $data);
	}
}