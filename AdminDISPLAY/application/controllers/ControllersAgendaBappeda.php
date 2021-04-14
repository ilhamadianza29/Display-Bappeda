<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllersAgendaBappeda extends CI_Controller{
    public function index()
    {
        $this->load->view('headerfooter/header.php');
        $this->load->view('index.php');
        $this->load->view('headerfooter/footer.php');
    }

    // public function data()
    // {
    //     $this->load->view('headerfooter/header.php');
    //     $this->load->view('data.php');
    //     $this->load->view('headerfooter/footer.php');
    // }
}