<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {
    public function index()
    {
        $data= array(
            'judul' => 'Tentang PUT Survey dan Pemetaan',
            'content' => 'about'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}