<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    public function index()
    {
        $this->db->where("nik_id_admin", $this->input->post("nik"));
        $query =  $this->db->get("user");

        if ($query->num_rows() > 0) {

            foreach ($query->result() as $row) {
                $seesion_login_1 = [
                    "nik_id_admin" => $row->nik_id_admin,
                    "sandi" => $row->sandi,
                    "nama" => $row->nama,
                    "tanggal_lahir" => $row->tanggal_lahir,
                    "jenis_kelamin" => $row->jenis_kelamin,
                    "perkerjaan" => $row->perkerjaan,
                    "alamat" => $row->alamat,
                    "is_admin" => $row->is_admin
                ];
            };
            if (password_verify($this->input->post("sandi"), $seesion_login_1["sandi"])) {
                return $this->session->set_userdata($seesion_login_1);
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function cek_tabel_vaksin()
    {
        if ($this->db->table_exists("vaksin_on_progress") === TRUE) {
            // query untuk cek apakah user sudah melakukan vaksin yang sedang dilaksakan
            $post_nik = $this->session->userdata("nik_id_admin");
            $query =  $this->db->query("SELECT v.dosis FROM vaksin AS v WHERE v.nik_user = $post_nik AND v.dosis = (SELECT v_o_p.dosis FROM vaksin_on_progress AS v_o_p LIMIT 1)");

            // jika user TELAH MELAKUKAN vaksin yang sedang dilaksakan
            if ($query->num_rows() > 0) {
                $this->session->set_userdata('tidak_vaksin', 'Belum ada vaksin yang bisa anda ikuti');
            }
            // jika user BELUM MELAKUKAN vaksin
            else {
                // query untuk persiapan cek apakah user sudah daftar vaksin yang sedang dilaksanakan
                $this->db->select('dosis, nama_vaksin, tempat_vaksin, tanggal_vaksin, nomor_antrian');
                $this->db->where("nik_user", $post_nik);
                $query = $this->db->get("vaksin_on_progress", 1);

                // jika user SUDAH DAFTAR vaksin yang sedang dilaksanakan
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                        $session_vaksin_on_progress = [
                            "dosis" => $row->dosis,
                            "nama_vaksin" => $row->nama_vaksin,
                            "tempat_vaksin" => $row->tempat_vaksin,
                            "tanggal_vaksin" => $row->tanggal_vaksin,
                            "nomor_antrian" => $row->nomor_antrian,
                        ];
                    };
                    $this->session->set_userdata($session_vaksin_on_progress);
                }
                // jika user BELUM DAFTAR
                else {
                    $this->db->select('dosis, nama_vaksin, tanggal_vaksin_mulai, tanggal_vaksin_akhir');
                    $this->db->where("nik_user", "-");
                    $query = $this->db->get("vaksin_on_progress", 1);

                    foreach ($query->result() as $row) {
                        $session = [
                            "daftar_vaksin" => $row->dosis,
                            "nama_vaksin" => $row->nama_vaksin,
                            "tanggal_vaksin_mulai" => $row->tanggal_vaksin_mulai,
                            "tanggal_vaksin_akhir" => $row->tanggal_vaksin_akhir,
                        ];
                    };
                    $this->session->set_userdata($session);
                }
            }
        } else {
            $this->session->set_userdata('tidak_vaksin', 'Belum ada vaksin yang bisa anda ikuti');
        }
    }
}
