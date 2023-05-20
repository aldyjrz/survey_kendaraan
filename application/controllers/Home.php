<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		chek_session();
	}
	public function index()
	{
		$data = array(
			'title' => "Survey Kendaraan"
		);
		 

			$this->load->view('survey/index', $data);
		
	}
}
