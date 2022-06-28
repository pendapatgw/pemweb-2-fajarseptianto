<?php
class Input extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs4');
        $mhs4 = new MahasiswaModel();
        $mhs4->nama = $this->input->post('nama');
        $mhs4->nim = $this->input->post('nim');
        $mhs4->gender = $this->input->post('gender');
        $mhs4->tempatLahir = $this->input->post('tempat');;
        $mhs4->tanggalLahir = $this->input->post('tanggal');
        $mhs4->ipk = $this->input->post('ipk');
        // $title['title'] = 'selamat datang';
        $data = array('title' => "masukan data");
        $save = array('mhs' => [$mhs4]);
        $this->load->view('sample/header', $data);
        $this->load->view('sample/navbar');
        $this->load->view('mahasiswa/input',$save);
        $this->load->view('sample/footer');
    }
    
}
