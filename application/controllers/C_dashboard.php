<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{

	public function index()
	{
		// JANGAN LUPA NANTI SET SESSION SEBAGAI ADMIN
		$data["judul"] = "Dashboard Admin";
		$this->load->view("templates/View_header", $data);
		$this->load->view("combine/View_dashboard");
		$this->load->view('templates/View_footer');
	}
	public function dashboard_user($vaksin_keberapa = 0){
		
		// JANGAN LUPA NANTI SET SESSION SEBAGAI USER
		$data["judul"] = "Dashboard User";
		
		$data["vaksin_keberapa"] = $vaksin_keberapa;
		$data["data_click_sidebar"] = $vaksin_keberapa;


		if($vaksin_keberapa == "Pertama"){
			$data["nama_vaksin"] = "sinovac";
		}
		else if($vaksin_keberapa == "Kedua"){
			$data["nama_vaksin"] = "sinovac-2";
		}
		else if($vaksin_keberapa == "Ketiga"){
			$data["nama_vaksin"] = "sinovac-3";
		}
		else if($vaksin_keberapa == "Keempat"){
			$data["nama_vaksin"] = "sinovac-4";
		}
		else{
			$this->model->load();
		}

		$data['sidebar_user'] = $this->load->view('templates/user/View_sidebar_user', NULL, TRUE);
		$data['vaksin_user'] = $this->load->view('templates/user/View_main_user', $data, TRUE);
		
	
		$this->load->view("templates/View_header", $data);
		$this->load->view("combine/View_dashboard", $data);
		$this->load->view('templates/View_footer');
	}

	// public function dashboard_user($vaksin_keberapa = 0){
	// 	$data["judul"] = "Dashboard";
	// 	$data["vaksin_keberapa"] = $vaksin_keberapa;
	// 	$data["data_click_sidebar"] = $vaksin_keberapa;

	// 	if($vaksin_keberapa == 1){
	// 		$data["nama_vaksin"] = "sinovac";
	// 	}
	// 	else if($vaksin_keberapa == 2){
	// 		$data["nama_vaksin"] = "sinovac-2";
	// 	}
	// 	else if($vaksin_keberapa == 3){
	// 		$data["nama_vaksin"] = "sinovac-3";
	// 	}
	// 	else if($vaksin_keberapa == 4){
	// 		$data["nama_vaksin"] = "sinovac-4";
	// 	}
	
	// 	$this->load->view("templates/View_header", $data);
	// 	$this->load->view("templates/View_sidebar_dashboard_user", $data);
	// 	$this->load->view('templates/View_footer');
	// }
}
