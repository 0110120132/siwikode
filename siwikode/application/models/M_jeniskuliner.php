<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jeniskuliner extends CI_model
{
    public function SemuaData()
    {
        return $this->db->get('jenis_kuliner')->result_array();
    }

    public function tambahDataKuliner()
    {
        $data =[
            "nama"=>$this->input->post('nama', true)
        ];

        $this->db->insert('jenis_kuliner', $data);
    }

    
    public function hapusDataKuliner($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jenis_kuliner');
    }

    public function getKulinerById($id)
    {
        return $this->db->get_where('jenis_kuliner',['id' => $id]) -> row_array();
    }

    public function ubahDataKuliner()
    {
        $data =[
            "nama"=>$this->input->post('nama', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('jenis_kuliner', $data);
    }
}