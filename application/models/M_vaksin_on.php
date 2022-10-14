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
}
