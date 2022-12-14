<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_vaksin_on extends CI_Model
{
    public function __construct()
    {
        $this->load->dbforge();
    }

    // untuk agenda vaksin
    public function index()
    {

        $data = [
            'nik_user' => '-',
            'nama_user' => '-',
            'dosis' => htmlspecialchars($this->input->post('dosis-vaksin'), true),
            'nama_vaksin' => htmlspecialchars($this->input->post('nama-vaksin'), true),
            'tempat_vaksin' => 'puskesmas pamolokan',
            'tanggal_vaksin_mulai' => $this->input->post('tanggal-mulai', true),
            'nomor_antrian' => 0,
            'tanggal_vaksin_akhir' => $this->input->post('tanggal-akhir', true),
            'kuota' => htmlspecialchars($this->input->post('kuota'), true)
        ];
        $this->db->insert('vaksin_on_progress', $data);
        if ($this->db->affected_rows() == 1) {
            return [TRUE, "Vaksin telah di Agendakan"];
        } else {
            return [FALSE, "Gagal! Mohon ulangi lagi!"];
        }
    }

    public function get_agenda_vaksin()
    {
        return $this->db->get_where('vaksin_on_progress', ['nik_user' => '-'])->row_array();
    }

    public function getVaksinUser($vaksin)
    {
        return $this->db->query("SELECT user.nik_id_admin, user.nama, user.jenis_kelamin, user.perkerjaan, vaksin.tanggal_vaksin, vaksin.nama_vaksin, vaksin.dosis, vaksin.id_vaksin FROM user, vaksin WHERE vaksin.nik_user = user.nik_id_admin AND vaksin.dosis LIKE '%$vaksin%'")->result_array();
    }

    public function get_nik_user_tb_vaksin_on_progress($dosis)
    {
        $this->db->where("nik_user !=", '-');
        $this->db->where("dosis", $dosis);
        return $this->db->get('vaksin_on_progress')->result_array();
    }

    public function droptable_vaksin_on_progress(){
        $this->load->dbforge();
        $this->dbforge->drop_table('vaksin_on_progress');
    }

    public function isExist_tb_vaksin_on_progress()
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
                'tanggal_vaksin' => [
                    'type' => 'DATE'
                ],
                'tanggal_vaksin_mulai' => [
                    'type' => 'DATE'
                ],
                'nomor_antrian' => [
                    'type' => 'INT',
                    'constraint' => '11',
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

    public function input_nik_to_vaksin()
    {
        $nik_input = $this->input->post('nik-user',true);
        $vaksin_user_ke = $this->input->post('vaksin-user-ke',true);
        $user = $this->db->get_where('vaksin_on_progress', ['nik_user' => $nik_input])->row_array();
        $this->db->select('perkerjaan');
        $pekerjaan = $this->db->get_where('user', ['nik_id_admin' => $nik_input])->row_array();

        if ($user) {
            if ($user['dosis'] == $vaksin_user_ke) {
                $data = [
                    'id_vaksin' => '',
                    'nik_user' => htmlspecialchars($nik_input),
                    'dosis' => $user['dosis'],
                    'nama_vaksin' => $user['nama_vaksin'],
                    'nama_user' => $user['nama_user'],
                    'tanggal_vaksin' => $user['tanggal_vaksin'],
                    'perkerjaan' => $pekerjaan['perkerjaan']
                ];
                $this->db->insert('vaksin', $data);
                $this->db->delete('vaksin_on_progress', ['nik_user' => $nik_input]);
                if ($this->db->affected_rows() == 1) {
                    return [TRUE, "Input data NIK berhasil!"];
                } else {
                    return [FALSE, "Gagal! Mohon ulangi lagi!"];
                }
            } else {
                return [FALSE, "Data NIK tidak terdaftar pada dosis ini!"];
            }
        } else {
            return [FALSE, "Data NIK tidak terdaftar!"];
        }
    }

    public function delete_uservaksin_by_nik($id)
    {
        $id_vaksin_to_delete = htmlspecialchars($id);
        $user = $this->db->get_where('vaksin', ['id_vaksin' => $id_vaksin_to_delete])->row_array();
        if ($user) {
            $this->db->delete('vaksin', ['id_vaksin' => $id_vaksin_to_delete]);
            if ($this->db->affected_rows() == 1) {
                return [TRUE, "Hapus Data Berhasil!"];
            } else {
                return [FALSE, "Hapus Data Gagal!"];
            }
        } else {
            return [FALSE, "Hapus gagal!"];
        }
    }

    public function update_agenda_vaksin()
    {
        $tanggal_mulai = htmlspecialchars($this->input->post('tanggal-mulai',true));
        $tanggal_akhir = htmlspecialchars($this->input->post('tanggal-akhir',true));
        $kuota = htmlspecialchars($this->input->post('kuota',true));

        $data = [
            'tanggal_vaksin_mulai' => $tanggal_mulai,
            'tanggal_vaksin_akhir' => $tanggal_akhir,
            'kuota' => $kuota
        ];
        $this->db->where('nik_user', '-');
        $this->db->update('vaksin_on_progress', $data);
        if ($this->db->affected_rows() == 1) {
            return [TRUE, "Ubah Agenda Berhasil!"];
        } else {
            return [FALSE, "Ubah Agenda Gagal!"];
        }
    }

    public function get_data_pekerjaan($vaksin)
    {

        $query_pertama = $this->db->query("SELECT COUNT(perkerjaan) AS persen, perkerjaan FROM user GROUP BY perkerjaan ORDER BY perkerjaan");
        $query_pertama = $query_pertama->result_array();
        $query_kedua = $this->db->query("SELECT COUNT(perkerjaan) AS persen, perkerjaan FROM vaksin WHERE dosis LIKE '%$vaksin%' GROUP BY perkerjaan ORDER BY perkerjaan ");
        $query_kedua = $query_kedua->result_array();
        // get umur user
        $get_umur_user = $this->db->query("SELECT user.tanggal_lahir, DATE_FORMAT(FROM_DAYS(DATEDIFF(NOW(), user.tanggal_lahir)), '%Y')+0 as umur, COUNT('umur') as jumlah from user,vaksin where user.nik_id_admin = vaksin.nik_user AND vaksin.dosis LIKE '%$vaksin%' GROUP by umur;")->result_array();

        $remaja = [0];
        $anak = [0];
        $dewasa = [0];
        $lansia = [0];

        $jumlah_anak = 0;
        $jumlah_remaja = 0;
        $jumlah_dewasa = 0;
        $jumlah_lansia = 0;

        foreach ($get_umur_user as $row) {
            if ($row['umur'] >= 18 && $row['umur'] <= 30) {
                array_push($remaja, $row['jumlah']);
                $jumlah_remaja = array_sum($remaja);
            } elseif ($row['umur'] >= 6 && $row['umur'] < 18) {
                array_push($anak, $row['jumlah']);
                $jumlah_anak = array_sum($anak);
            } elseif ($row['umur'] >= 31 && $row['umur'] <= 55) {
                array_push($dewasa, $row['jumlah']);
                $jumlah_dewasa = array_sum($dewasa);
            } elseif ($row['umur'] > 55) {
                array_push($lansia, $row['jumlah']);
                $jumlah_lansia = array_sum($lansia);
            }
        }

        $get_sum_all_umur = [$jumlah_dewasa, $jumlah_remaja, $jumlah_anak, $jumlah_lansia];

        // jumlah user tervaksin
        $user_tervaksin = $this->db->query("SELECT COUNT(*) as jumlah from user,vaksin where user.nik_id_admin = vaksin.nik_user AND vaksin.dosis LIKE '%$vaksin%'")->result_array();

        return [
            'pertama' => $query_pertama,
            'kedua' => $query_kedua,
            'umur' => $get_sum_all_umur,
            'jumlah_tervaksin' => $user_tervaksin
        ];
    }
}
