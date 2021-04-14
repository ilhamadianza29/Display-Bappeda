<?php

class model_db extends CI_Model{
    public function tampil_data()
    {
        return $this->db->__get('adminagendakegiatan')->result_array();
    }
}




?>