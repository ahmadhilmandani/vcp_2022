<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('M_vaksin_on');
		if ($this->db->table_exists("vaksin_on_progress") === TRUE) {
			$tanggalAkhirAgenda = $this->M_vaksin_on->get_agenda_vaksin();
			if (time() > strtotime($tanggalAkhirAgenda['tanggal_vaksin_akhir'])) {
				$this->M_vaksin_on->droptable_vaksin_on_progress();
				redirect(base_url());
			}
		}
		if (isset($_POST["login"])) {
			$this->load->model("M_login");
			$data["cek_user_login"] = $this->M_login->index();

			if ($data["cek_user_login"] !== false) {
				if ($this->session->userdata('is_admin') == 0) {
					$this->M_login->cek_tabel_vaksin();
					redirect("C_dashboard/dashboard_user");
				} else {
					redirect("C_admin/admin");
				}
			} else {
				$this->load->library("Alert_lib");
				$this->alert_lib->alert_success_or_error(false, 'NIK atau Password salah!');
				redirect(base_url());
			}
		} else {
			$data["judul"] = "Selamat datang di web kami!";
			$this->load->view("templates/View_header", $data);
			$this->load->view("combine/View_login");
			$this->load->view('templates/View_footer');
		}
	}

	public function dashboard_user($vaksin_keberapa = 0)
	{
		if (!$this->session->userdata("nik_id_admin")) {
			redirect("C_dashboard");
		}

		$this->load->model("M_tabel_user");
		$data["judul"] = "Dashboard User";
		$data["vaksin_keberapa"] = $vaksin_keberapa;
		$data["data_click_sidebar"] = $vaksin_keberapa;

		if ($vaksin_keberapa == "pertama") {
			$data["nama_vaksin"] = $this->M_tabel_user->index($vaksin_keberapa);
		} else if ($vaksin_keberapa == "kedua") {
			$data["nama_vaksin"] = $this->M_tabel_user->index($vaksin_keberapa);
		} else if ($vaksin_keberapa == "ketiga") {
			$data["nama_vaksin"] = $this->M_tabel_user->index($vaksin_keberapa);
		} else if ($vaksin_keberapa == "keempat") {
			$data["nama_vaksin"] = $this->M_tabel_user->index($vaksin_keberapa);
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
		redirect(base_url());
	}

	public function daftar_user()
	{
		if (!$this->session->userdata("nik_id_admin")) {
			redirect("C_dashboard");
		}

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
