<?php
class M_login extends CI_Model
{
  
    public function index()
    {
        $this->db->where("nik_id_admin", $this->input->post("nik"));
        $this->db->where("sandi", $this->input->post("sandi"));
        $query =  $this->db->get("user");

        if ($query->num_rows() > 0) {
       
            foreach($query->result() as $row){
                $session = [
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
            return $this->session->set_userdata($session);
           
        } else {
            return false;
        }
    }



 
}
