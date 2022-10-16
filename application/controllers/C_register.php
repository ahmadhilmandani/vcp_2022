<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_register extends CI_Controller
{
    public function index()
    {
        $data["judul"] = "Register User";
        
		$this->load->view("templates/View_header", $data);
		$this->load->view("combine/View_register");
		$this->load->view('templates/View_footer');
    }
    public function register_user(){

    }
}
?>