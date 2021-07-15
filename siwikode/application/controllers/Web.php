<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{



    public function index()
    {

        $this->load->view('templates/web_header');
        $this->load->view('templates/web');
        $this->load->view('templates/web_footer');
    }

    public function detailwisata()
    {

        $this->load->view('templates/web_header');
        $this->load->view('templates/detailwisata');
        $this->load->view('templates/web_footer');
    }
}
