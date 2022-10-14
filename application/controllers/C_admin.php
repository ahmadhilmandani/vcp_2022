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
        $this->_isExist_tb_vaksin_on_progress();

        $data["judul"] = "Dashboard Admin";
        $cekagenda = $this->db->get_where('vaksin_on_progress', ['nik_user' => '-'])->row_array();

        if ($cekagenda) {
            $data['agenda_vaksin'] = "<div class='alert alert-warning' role='alert'>Sedang ada agenda vaksin Dosis ke <b>" . $cekagenda['dosis'] . "</b> s.d tanggal <b>" . $cekagenda['tanggal_vaksin_akhir'] . "</b> </div>";
            $data['btn_disable'] = 'disabled';
        } else {
            $data['btn_disable'] = '';
            $data['agenda_vaksin'] = "<div class='alert alert-danger' role='alert'><b>Belum ada agenda vaksin</b></div>";
        }

        $data["click_sidebar"] = $vaksin_user;
        $data["vaksin_user_ke"] = $vaksin_user;


        if ($vaksin_user == "Pertama") {
            $data['getVaksinUser'] = $this->db->get_where('vaksin', ['dosis' => 'Pertama'])->result_array();
            $this->db->where("nik_user !=", '-');
            $this->db->where("dosis", 'Pertama');
            $data['nik_user_tb_vaksin_on_progress']  = $this->db->get('vaksin_on_progress')->result_array();
        } else if ($vaksin_user == "Kedua") {
            $data['getVaksinUser'] = $this->db->get_where('vaksin', ['dosis' => 'Kedua'])->result_array();
            $this->db->where("nik_user !=", '-');
            $this->db->where("dosis", 'Kedua');
            $data['nik_user_tb_vaksin_on_progress']  = $this->db->get('vaksin_on_progress')->result_array();
        } else if ($vaksin_user == "Ketiga") {
            $data['getVaksinUser'] = $this->db->get_where('vaksin', ['dosis' => 'Ketiga'])->result_array();
            $this->db->where("nik_user !=", '-');
            $this->db->where("dosis", 'Ketiga');
            $data['nik_user_tb_vaksin_on_progress']  = $this->db->get('vaksin_on_progress')->result_array();
        } else if ($vaksin_user == "Keempat") {
            $data['getVaksinUser'] = $this->db->get_where('vaksin', ['dosis' => 'Keempat'])->result_array();
            $this->db->where("nik_user !=", '-');
            $this->db->where("dosis", 'Keempat');
            $data['nik_user_tb_vaksin_on_progress']  = $this->db->get('vaksin_on_progress')->result_array();
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

    private function _isExist_tb_vaksin_on_progress()
    {
        $this->load->dbforge();
        if ($this->db->table_exists("vaksin_on_progress") === false) {
            $fields = [
                'nik_user' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'nama_user' => [
                    'type' => 'VARCHAR',
                    'constraint' => '150',
                ],
                'dosis' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'nama_vaksin' => [
                    'type' => 'VARCHAR',
                    'constraint' => '50',
                ],
                'tempat_vaksin' => [
                    'type' => 'VARCHAR',
                    'constraint' => '150',
                ],
                'tanggal_vaksin_mulai' => [
                    'type' => 'DATE'
                ],
                'nomor_antrian' => [
                    'type' => 'INT',
                    'constraint' => '11',
                    'auto_increment' => TRUE,
                    'unique' => TRUE,
                ],
                'tanggal_vaksin_akhir' => [
                    'type' => 'DATE'
                ],
                'kuota' => [
                    'type' => 'INT'
                ]
            ];

            // $this->dbforge->some_method();
            $this->dbforge->add_field($fields);
            $this->dbforge->add_key('nik_user', TRUE);
            $this->dbforge->create_table('vaksin_on_progress', TRUE);
        }
    }
}
