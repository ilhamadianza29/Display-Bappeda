<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ControllersAgendaBappeda extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_DB');
    }

    function index()
    {
        
        $data['data_agenda'] = $this->Model_DB->tampil_data();

        $this->load->view('headerfooter/header.php');
        $this->load->view('data.php', $data);
        $this->load->view('headerfooter/footer.php');
    }

}
    // public function data()
    // {
    //     $this->load->view('headerfooter/header.php');
    //     $this->load->view('data.php');
    //     $this->load->view('headerfooter/footer.php');
    // }

?>