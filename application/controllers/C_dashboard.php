<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
	public function index()
	{
		if (isset($_POST["login"])) {
			$this->load->model("M_login");
			$data["cek_user_login"] = $this->M_login->index();

			if ($data["cek_user_login"] !== false) {
				$this->M_login->cek_tabel_vaksin();
				redirect("C_dashboard/dashboard_user");
			} else {
				redirect("C_dashboard/index");
			}
		} else {
			$data["judul"] = "Selamat datang di web kami!";
			$this->load->view("templates/View_header", $data);
			$this->load->view("templates/View_login");
			$this->load->view('templates/View_footer');
		}
	}

	public function dashboard_user($vaksin_keberapa = 0)
	{

		$data["judul"] = "Dashboard User";
		$data["vaksin_keberapa"] = $vaksin_keberapa;
		$data["data_click_sidebar"] = $vaksin_keberapa;

		if ($vaksin_keberapa == "Pertama") {
			$data["nama_vaksin"] = "sinovac";
		} else if ($vaksin_keberapa == "Kedua") {
			$data["nama_vaksin"] = "sinovac-2";
		} else if ($vaksin_keberapa == "Ketiga") {
			$data["nama_vaksin"] = "sinovac-3";
		} else if ($vaksin_keberapa == "Keempat") {
			$data["nama_vaksin"] = "sinovac-4";
		}

		$data['sidebar_user'] = $this->load->view('templates/user/View_sidebar_user', NULL, TRUE);
		$data['vaksin_user'] = $this->load->view('templates/user/View_main_user', $data, TRUE);

		$this->load->view("templates/View_header", $data);
		$this->load->view("combine/View_dashboard", $data);
		$this->load->view('templates/View_footer');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect('C_dashboard');
	}

	public function sweet_alert($title, $text, $icon)
	{
		$this->session->set_userdata('flash_title', $title);
		$this->session->set_userdata('flash_text', $text);
		$this->session->set_userdata('flash_icon', $icon);
	}

	public function daftar_user()
	{
		$this->load->model("M_daftar");
		$this->load->model("M_login");
		$this->load->library("Alert_lib");

		$daftar_vaksin = $this->M_daftar->index();
		$this->alert_lib->alert_success_or_error($daftar_vaksin[0], $daftar_vaksin[1]);
		
		$this->session->unset_userdata('tidak_vaksin');
		$this->session->unset_userdata('daftar_vaksin');
		$this->M_login->cek_tabel_vaksin();

		redirect("C_dashboard/dashboard_user");
	}
}
