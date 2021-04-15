<?php

class Model_DB extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('adminagendakegiatan')->result_array();
    }
}




?>