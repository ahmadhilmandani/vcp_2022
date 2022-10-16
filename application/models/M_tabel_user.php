<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_tabel_user extends CI_Model{
    public function index($dosis)
    {
        $this->db->select('dosis, nama_vaksin, tanggal_vaksin');
        $this->db->where('nik_user', $this->session->userdata("nik_id_admin"));
        $this->db->where('dosis', $dosis);
        $query = $this->db->get('vaksin');

        return $query->result_array();
    }

}



?>