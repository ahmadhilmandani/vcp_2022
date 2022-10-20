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
        if (!$this->session->userdata("nik_id_admin")) {
			redirect(base_url());
		}
        $this->M_vaksin_on->isExist_tb_vaksin_on_progress();

        $data["judul"] = "Dashboard Admin";
        $cekagenda = $this->M_vaksin_on->get_agenda_vaksin();
        $data['tanggal_vaksin'] = $cekagenda;

        if ($cekagenda) {
            $data['agenda_vaksin'] = "<div class='alert alert-primary' role='alert'>Sedang ada agenda vaksin dosis <b>" . ucwords($cekagenda['dosis']) . "</b> s.d tanggal <b>" . date('d M Y', strtotime($cekagenda['tanggal_vaksin_akhir'])) . "</b> 
            . <br>Sisa kuota vaksin : <b>" . ucwords($cekagenda['kuota']) . "</b><br>
            Jenis vaksin : <b>" . ucwords($cekagenda['nama_vaksin']) . "</b><br>
            </div>";
            $data['btn_disable'] = 'disabled';
            $data['btn_none'] = '';
        } else {
            $data['btn_none'] = 'd-none';
            $data['btn_disable'] = '';
            $data['agenda_vaksin'] = "<div class='alert alert-danger' role='alert'><b>Belum ada agenda vaksin</b></div>";
        }

        $data["click_sidebar"] = $vaksin_user;
        $data["vaksin_user_ke"] = $vaksin_user;
        $data['data_statistik_pekerjaan'] = $this->M_vaksin_on->get_data_pekerjaan($vaksin_user);
        $data['jumlah_tervaksin'] = $data['data_statistik_pekerjaan']['jumlah_tervaksin'];


        if ($vaksin_user == "pertama") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "kedua") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "ketiga") {
            $data['getVaksinUser'] = $this->M_vaksin_on->getVaksinUser($vaksin_user);
            $data['suggestion_nik_user_tb_vaksin_on_progress']  = $this->M_vaksin_on->get_nik_user_tb_vaksin_on_progress($vaksin_user);
            $data['pertama'] = $data['data_statistik_pekerjaan']['pertama'];
            $data['kedua'] = $data['data_statistik_pekerjaan']['kedua'];
            $data['umur_user'] = $data['data_statistik_pekerjaan']['umur'];
        } else if ($vaksin_user == "keempat") {
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

    public function ubah_agenda()
    {
        $this->load->library("Alert_lib");
        $cekagenda = $this->M_vaksin_on->get_agenda_vaksin();
        if($this->db->table_exists("vaksin_on_progress") === TRUE){
            if($cekagenda){
                $result_update_agenda = $this->M_vaksin_on->update_agenda_vaksin();
            }
        }
        $this->alert_lib->alert_success_or_error($result_update_agenda[0], $result_update_agenda[1]);
        redirect('C_admin/admin/');
    }

    public function download_tiket(){
        $data['tiketVaksin'] = [
            'nama' => 'tiket saya',
            'tanggal' => date('d M Y')
        ];
    
        $this->load->library('pdf');
    
        $this->pdf->setPaper('A6', 'potrait');
        $this->pdf->filename = "tiketVaksin.pdf";
        $this->pdf->load_view('export/download_tiket', $data);
    
    
    }
}
