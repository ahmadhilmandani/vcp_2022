<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

	public function index()
	{
		$data["judul"] = "Dashboard";
		$this->load->view("templates/View_header", $data);
		$this->load->view("templates/View_sidebar_dashboard");
		$this->load->view('templates/View_footer');
	}
}
