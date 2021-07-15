<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jeniswisata extends CI_model
{
    public function SemuaData()
    {
        return $this->db->get('jenis_wisata')->result_array();
    }
}