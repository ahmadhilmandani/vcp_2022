<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
    public function index(){
        $data = [
            "nik_user" => $this->session->userdata("nik_id_admin"),
            "nama_user" => $this->session->userdata("nama"),
            "dosis" => $this->session->userdata("daftar_vaksin"),
            "nama_vaksin" => $this->session->userdata("nama_vaksin"),
            "tempat_vaksin" => "puskesmas pamolokan",
            "tanggal_vaksin" => $this->input->post("tanggal-vaksin"),
        ];
       $query =  $this->db->insert("vaksin_on_progress", $data);
        if($this->db->affected_rows() == 1){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}