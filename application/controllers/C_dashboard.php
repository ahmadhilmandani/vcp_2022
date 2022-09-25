<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

	public function index()
	{
		$data["judul"] = "Dashboard";
		$this->load->view("templates/header", $data);
		$this->load->view('V_dashboard');
		$this->load->view('templates/footer');
	}
}
