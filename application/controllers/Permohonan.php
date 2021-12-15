<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        // Load Dependencies
        $this->load->model('model_permohonan');
    }

    public function index()
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'home'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function ajukan()
    {
        $this->load->helper('string');

        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'zip|rar';
        $config['max_size'] = 0;

        $this->upload->initialize($config);
        if (!$this->upload->do_upload('rawdata')) {
            $data= array(
                'judul' => 'PUT Survey dan Pemetaan',
                'error_upload' => $this->upload->display_errors(),
                'content' => 'permohonan/ajukan',
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $noreg = 'PUT-'.random_string('alnum',6);
            $upload_data = array('uploads' => $this->upload->data());
            $upload_data['uploads']['file_name'];
            $data = array(
                'noreg' => $noreg,
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'tlpwa' => $this->input->post('tlpwa'),
                'alamat' => $this->input->post('alamat'),
                'perusahaan' => $this->input->post('perusahaan'),
                'rawdata' => $upload_data['uploads']['file_name'],
                'jenis' => $this->input->post('jenis'),
                'catatan' => $this->input->post('catatan'),
                'status' => 'Ajuan',
                'tgl_ajuan' => date('d-m-Y')
            );
            $this->model_permohonan->ajukan($data);
            $this->session->set_flashdata('sukses','Data Berhasil Disimpan');
            redirect('permohonan/confirm/'.$noreg);
        }


    }

    public function confirm($noreg = '')
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'permohonan/confirm',
            'confirm' => $this->model_permohonan->confirm($noreg),
            'noreg' => $noreg
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    // public function status($noreg = '')
    // {
    //     if ($noreg == $this->input->post('noreg')) {
    //         $data= array(
    //             'judul' => 'PUT Survey dan Pemetaan',
    //             'content' => "permohonan/status/.$noreg",
    //             'status' => $this->model_permohonan->status($noreg),
    //             'noreg' => $noreg
    //         );
    //         $this->load->view('layout/v_wrapper', $data, FALSE);
    //         // redirect('permohonan/status/'.$noreg);
    //     } else {
    //         $data = array(
    //             'judul' => 'PUT Survey dan Pemetaan',
    //             'content' => 'permohonan/status',
    //             'status' => $this->model_permohonan->status($noreg),
    //             'noreg' => $this->input->post('noreg')
    //         );
    //         $this->load->view('layout/v_wrapper', $data, FALSE);
    //         // $this->model_permohonan->status($noreg);
    //         // redirect('permohonan/status/'.$noreg);
    //     }
    // }

    public function status($noreg = '')
    {
        $data= array(
            'judul' => 'PUT Survey dan Pemetaan',
            'content' => 'permohonan/status',
            'status' => $this->model_permohonan->status($noreg),
            'noreg' => $noreg
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function database()
    {
        $data=array(
            'judul' => 'Data Permohonan Pengolahan',
            'permohonan' => $this->model_permohonan->get_all_data(),
            'content'   =>'permohonan/viewdata'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    // public function add()
    // {
    //     $config['upload_path'] = './upload/';
    //     $config['allowed_types'] = 'zip|rar';
    //     $config['max_size'] = 0;

    //     $this->upload->initialize($config);

    //     if (! $this->upload->do_upload('rawdata')) {
    //         $error = array('error' => $this->upload->display_errors());
    //         $this->load->view('permohonan/ajukan', $error);
    //     } else {
    //         $upload_data = $this->upload->data();
    //         print_r($upload_data);
    //     }


    // }
}