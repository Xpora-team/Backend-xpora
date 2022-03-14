<?php

defined('BASEPATH') or exit('No direct script access allowed');

class akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model', 'akun');
    }

    function index()
    {
        $data = array(
            'title' => 'Halaman Akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'footer' => 'template/footer',
            'app' => 'akun',
            'akun' => $this->akun->all_data(),
        );
        $this->load->view('template/main', $data);
    }

    function create_akun()
    {
        $data = array(
            'title' => 'Halaman Create Akun',
            'header' => 'template/header',
            'menu' => 'template/menu',
            'content' => 'template/content',
            'app' => 'create_akun',
            'action' => site_url('akun/save'),
        );
        $this->load->view('template/main', $data);
    }

    function save()
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'email' => $this->input->post('email'),
            'no_telp' => $this->input->post('no_telp'),
            'npwp' => $this->input->post('npwp'),
            'domisili' => $this->input->post('domisili'),
        );
        $this->akun->save($data);

        $dataa = array(
            'domisili_usaha' => $this->input->post('domisili_usaha'),
            'email' => $this->input->post('email'),
            'website' => $this->input->post('website'),
            'bidang_usaha' => $this->input->post('bidang_usaha'),
            'komoditi' => $this->input->post('komoditi'),
            'skala' => $this->input->post('skala'),
            'satuan' => $this->input->post('satuan'),
            'nib' => $this->input->post('nib'),
            'npwp_perusahaan' => $this->input->post('npwp_perusahaan'),
            'no_siup' => $this->input->post('no_siup'),
            'no_peb' => $this->input->post('no_peb'),
            'no_akta' => $this->input->post('no_akta'),
        );
        $this->akun->savee($dataa);

        $dataaa = array(
            'nik' => $this->input->post('nik'),
            'nama_pemilik' => $this->input->post('nama_pemilik'),
            'bidang_usaha' => $this->input->post('bidang_usaha'),
            'domisili' => $this->input->post('domisili'),
            'komoditi' => $this->input->post('komoditi'),
            'user_type' => $this->input->post('user_type'),
            'create_date' => date('Y-m-d'),
            'verifikasi' => "Not Verified"
        );
        $this->akun->saveee($dataaa);
        redirect(site_url('akun'));
    }
}
