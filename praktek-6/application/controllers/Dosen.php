<?php
class Dosen extends CI_Controller{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    
    {
        $this->load->model('DosenModel','dosen1');
        $dosen1 = new DosenModel();
        $dosen1->id = 'dos001';
        $dosen1->nama='sirojul munir';
        $dosen1->nid='159901';
        $dosen1->gender='laki-laki';
        $dosen1->matkul='pemrograman web';
        $dosen1->pendidikan='s3 marketing';
        // batas
        $this->load->model('DosenModel','dosen2');
        $dosen2 = new DosenModel();
        $dosen2->id = 'dos001';
        $dosen2->nama='ahmad rio';
        $dosen2->nid='159901';
        $dosen2->gender='laki-laki';
        $dosen2->matkul='pemrograman web';
        $dosen2->pendidikan='s3 marketing';
        // batas
        $this->load->model('DosenModel','dosen3');
        $dosen3 = new DosenModel();
        $dosen3->id = 'dos001';
        $dosen3->nama='imam haromain';
        $dosen3->nid='159901';
        $dosen3->gender='laki-laki';
        $dosen3->matkul='pemrograman web';
        $dosen3->pendidikan='s3 marketing';
        $title['title'] = 'selamat datang';
        $data = array('dosen'=>[$dosen1,$dosen2,$dosen3]);
        $this->load->view('sample/header',$title);
        $this->load->view('sample/navbar');
        // $this->load->view('sample/home');

        // $this->load->view('mahasiswa/index');
        $this->load->view('dosen/index',$data);
        $this->load->view('sample/footer');

    }
}