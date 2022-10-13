<?php

class Alert_lib
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    function alert_success_or_error($param_return, $param_text)
    {
        if($param_return===true){
            // if($param_unset === false){
                $this->ci->session->set_userdata('flash_title', "Berhasil");
                $this->ci->session->set_userdata('flash_text', $param_text);
                $this->ci->session->set_userdata('flash_icon', "success");
            // }
        }
        else{
            $this->ci->session->set_userdata('flash_title', "Gagal");
            $this->ci->session->set_userdata('flash_text', $param_text);
            $this->ci->session->set_userdata('flash_icon', "error");
        }
    }
}
