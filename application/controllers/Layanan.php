<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
    public function index()
    {
        $data= array(
            'judul' => 'Layanan PUT Survey dan Pemetaan',
            'content' => 'home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function topografi()
    {
        $data= array(
            'judul' => 'Pengukuran Topografi - PUT Survey dan Pemetaan',
            'content' => 'layanan/topografi'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function fotoudara()
    {
        $data= array(
            'judul' => 'Pemetaan Foto Udara - PUT Survey dan Pemetaan',
            'content' => 'layanan/foto_udara'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function bm()
    {
        $data= array(
            'judul' => 'Pengamatan dan Pembuatan BM - PUT Survey dan Pemetaan',
            'content' => 'layanan/bm'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function pengolahan()
    {
        $data= array(
            'judul' => 'Pengolahan Data Spasial - PUT Survey dan Pemetaan',
            'content' => 'layanan/pengolahan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}