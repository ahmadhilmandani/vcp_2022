<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{
    public function admin($vaksin_user = 0)
    {
        $data["judul"] = "Dashboard Admin";


        $data["click_sidebar"] = $vaksin_user;
        $data["vaksin_user_ke"] = $vaksin_user;


        if ($vaksin_user == 0) {
            $data["jenis_vaksin"] = "sinovac";
        } else if ($vaksin_user == "Kedua") {
            $data["jenis_vaksin"] = "sinovac-2";
        } else if ($vaksin_user == "Ketiga") {
            $data["jenis_vaksin"] = "sinovac-3";
        } else if ($vaksin_user == "Keempat") {
            $data["jenis_vaksin"] = "sinovac-4";
        }

        $data['sidebar_admin'] = $this->load->view('templates/admin/View_sidebar_admin', NULL, TRUE);
        $data['main_admin'] = $this->load->view('templates/admin/View_main_admin', $data, TRUE);

        $this->load->view("templates/View_header", $data);
        $this->load->view("combine/View_dashboard_admin", $data);
        $this->load->view('templates/View_footer');
    }

    public function vaksin_on_progress()
    {
        $this->load->model('M_vaksin_on');
        $this->load->library("Alert_lib");
        $result_agendakan_vaksin = $this->M_vaksin_on->index();
        $this->alert_lib->alert_success_or_error($result_agendakan_vaksin[0], $result_agendakan_vaksin[1]);
        redirect('C_admin/admin');
    }
}
