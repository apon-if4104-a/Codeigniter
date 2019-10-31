<?php

class TampilanAwal extends CI_Controller
{
    public function login()
    {
        $username = $this->input->post('username1');
        $pass = $this->input->post('pwd');

        if ($username == "admin" && $pass == "admin123") {
            $this->load->view('Home/HalamanAdmin');
        } else {
            $this->load->view('Home/headerLogin');
            $this->load->view('Home/LandingUser');
        }
    }
}
