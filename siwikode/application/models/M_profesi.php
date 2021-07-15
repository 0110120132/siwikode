<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profesi extends CI_model
{
    public function SemuaData()
    {
        return $this->db->get('profesi')->result_array();
    }
}