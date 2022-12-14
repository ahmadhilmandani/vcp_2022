<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
    public function index()
    {
        $this->db->select("nomor_antrian");
        $this->db->where("tanggal_vaksin", $this->input->post("tanggal-vaksin"));
        $this->db->order_by("nomor_antrian", "DESC");
        $cek_nomor_antrian = $this->db->get("vaksin_on_progress", 1);
        if ($cek_nomor_antrian->num_rows() > 0) {
            $cek_nomor_antrian = $cek_nomor_antrian->result_array();
            $nomor_antrian = intval($cek_nomor_antrian[0]["nomor_antrian"])  + 1;
        } else {
            $nomor_antrian = 1;
        }
        $data = [
            "nik_user" => $this->session->userdata("nik_id_admin"),
            "nama_user" => $this->session->userdata("nama"),
            "dosis" => $this->session->userdata("daftar_vaksin"),
            "nama_vaksin" => $this->session->userdata("nama_vaksin"),
            "tempat_vaksin" => "puskesmas pamolokan",
            "tanggal_vaksin" => $this->input->post("tanggal-vaksin"),
            "nomor_antrian" => $nomor_antrian
        ];
        $cekkuota = $this->db->get_where('vaksin_on_progress', ['nik_user' => '-'])->row_array();
        $kuota = $cekkuota['kuota'];
        $total = $this->db->query('SELECT COUNT(*) as "totaluser" FROM vaksin_on_progress WHERE nik_user != "-"')->row_array();
        if ($total['totaluser'] >= $kuota) {
            return [FALSE, "Maaf Kuota penuh!"];
        } else {
            $this->db->insert("vaksin_on_progress", $data);
            if ($this->db->affected_rows() == 1) {
                return [TRUE, "Anda secara resmi terdaftar! Cek tiket untuk informasi selengkapnya!"];
            } else {
                return [FALSE, "Gagal! Mohon ulangi lagi!"];
            }
        }
    }

    public function register_user()
    {
        $data = [
            "nik_id_admin" => $this->input->post("nik"),
            "sandi" => password_hash(($this->input->post("sandi")),PASSWORD_DEFAULT),
            "nama" => $this->input->post("nama"),
            "tanggal_lahir" => $this->input->post("tanggal_lahir"),
            "jenis_kelamin" => $this->input->post("jenis_kelamin"),
            "perkerjaan" => $this->input->post("perkerjaan"),
            "alamat" => $this->input->post("alamat"),
            "is_admin" => 0,
        ];
        $this->db->insert("user", $data);
        if ($this->db->affected_rows() == 1) {
            return [TRUE, "Berhasil regristrasi, silahkan login!"];
        } else {
            return [FALSE, "Gagal! Mohon ulangi lagi!"];
        }
    }
}
