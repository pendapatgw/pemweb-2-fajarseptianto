<?php
class Matkul extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('MatkulModel', 'matkul1');
        $matkul1 = new MatkulModel();
        $matkul1->id = 'dap014771';
        $matkul1->matkul = 'pemrograman web';
        $matkul1->dosen = 'sirojul munir';
        $matkul1->waktu = '2 jam 30 menit';
        $matkul1->sks = '3';
        // batas
        $this->load->model('MatkulModel', 'matkul2');
        $matkul2 = new MatkulModel();
        $matkul2->id = 'dap01477';
        $matkul2->matkul = 'basis data';
        $matkul2->dosen = 'imam haromain';
        $matkul2->waktu = '2 jam 30 menit';
        $matkul2->sks = '3';
        // batas
        $this->load->model('MatkulModel', 'matkul3');
        $matkul3 = new MatkulModel();
        $matkul3->id = 'dap014771';
        $matkul3->matkul = 'user interface / user experience';
        $matkul3->dosen = 'tifany nabarian';
        $matkul3->waktu = '2 jam 30 menit';
        $matkul3->sks = '3';

        $data = array('matkul' => [$matkul1, $matkul2, $matkul3]);
        $title['title'] = 'selamat datang';
        $this->load->view('sample/header', $title);
        $this->load->view('sample/navbar');
        $this->load->view('matkul/index', $data);
        $this->load->view('sample/footer');
    }
}
