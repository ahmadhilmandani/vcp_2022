<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_vaksin_on');
    }

    public function admin($vaksin_user = 0)
    {
        $this->M_vaksin_on->isExist_tb_vaksin_on_progress();

        $data["judul"] = "Dashboard Admin";
        $cekagenda = $this->db->get_where('vaksin_on_progress', ['nik_user' => '-'])->row_array();

        if ($cekagenda) {
            $data['agenda_vaksin'] = "<div class='alert alert-warning' role='alert'>Sedang ada agenda vaksin Dosis <b>" . $cekagenda['dosis'] . "</b> s.d tanggal <b>" . $cekagenda['tanggal_vaksin_akhir'] . "</b> </div>";
            $data['btn_disable'] = 'disabled';
        } else {
            $data['btn_disable'] = '';
            $data['agenda_vaksin'] = "<div class='alert alert-danger' role='alert'><b>Belum ada agenda vaksin</b></div>";
        }

        $data["click_sidebar"] = $vaksin_user;
        $data["vaksin_user_ke"] = $vaksin_user;
        $data['data_statistik_pekerjaan'] = $this->M_vaksin_on->get_data_pekerjaan($vaksin_user);


        if ($vaksin_user == "Pertama") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "Kedua") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "Ketiga") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "Keempat") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        }

        $data['sidebar_admin'] = $this->load->view('templates/admin/View_sidebar_admin', NULL, TRUE);
        $data['main_admin'] = $this->load->view('templates/admin/View_main_admin', $data, TRUE);

        $this->load->view("templates/View_header", $data);
        $this->load->view("combine/View_dashboard_admin", $data);
        $this->load->view('templates/View_footer');
    }



    public function vaksin_on_progress()
    {
        $this->load->library("Alert_lib");
        $result_agendakan_vaksin = $this->M_vaksin_on->index();
        $this->alert_lib->alert_success_or_error($result_agendakan_vaksin[0], $result_agendakan_vaksin[1]);
        redirect('C_admin/admin');
    }

    public function input_user_nik_tb_vaksin()
    {
        $this->load->library("Alert_lib");
        $result_input_nik_vaksin = $this->M_vaksin_on->input_nik_to_vaksin();
        $this->alert_lib->alert_success_or_error($result_input_nik_vaksin[0], $result_input_nik_vaksin[1]);
        redirect('C_admin/admin/' . $this->input->post('vaksin-user-ke'));
    }

    public function delete_uservaksin_by_nik($id_vaksin)
    {
        $this->load->library("Alert_lib");
        $result_delete_nik_vaksin = $this->M_vaksin_on->delete_uservaksin_by_nik($id_vaksin);
        $this->alert_lib->alert_success_or_error($result_delete_nik_vaksin[0], $result_delete_nik_vaksin[1]);
        redirect('C_admin/admin/' . $this->input->post('vaksin-user-ke'));
    }
}
