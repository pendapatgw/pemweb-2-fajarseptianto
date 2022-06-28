<?php
class Dosen extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()

    {
        $this->load->model('DosenModel', 'dosen1');
        $dosen1 = new DosenModel();
        $dosen1->id = 'dos001';
        $dosen1->nama = 'Sirojul Munir, S.Si, M.Kom.';
        $dosen1->nid = '159901';
        $dosen1->gender = 'laki-laki';
        $dosen1->matkul = 'pemrograman web';
        $dosen1->pendidikan = 'S1 UI,S2 UBL';
        // batas
        $this->load->model('DosenModel', 'dosen2');
        $dosen2 = new DosenModel();
        $dosen2->id = 'dos001';
        $dosen2->nama = 'Ahmad Rio Adriansyah, S.Si. M.Si.';
        $dosen2->nid = '159901';
        $dosen2->gender = 'laki-laki';
        $dosen2->matkul = 'Matematika Diskrit';
        $dosen2->pendidikan = 'S1 ITB Matematika,S2 ITB/Kanazawa University Sains Komputasi';
        // batas
        $this->load->model('DosenModel', 'dosen3');
        $dosen3 = new DosenModel();
        $dosen3->id = 'dos001';
        $dosen3->nama = 'HENRY SAPTONO, S.Si, M.Kom';
        $dosen3->nid = '159901';
        $dosen3->gender = 'laki-laki';
        $dosen3->matkul = 'Jaringan Komputer';
        $dosen3->pendidikan = 'S1 Fisika UI,S2 Ilmu Komputer UBL';
        // batas
        $this->load->model('DosenModel', 'dosen4');
        $dosen4 = new DosenModel();
        
        $dosen4->nama = $this->input->post('nama');
        $dosen4->nid = $this->input->post('nid');
        $dosen4->gender = $this->input->post('gender');
        $dosen4->matkul = $this->input->post('matkul');
        $dosen4->pendidikan = $this->input->post('pendidikan');
        // batas
        $title['title'] = 'selamat datang';
        $data = array('dosen' => [$dosen1, $dosen2, $dosen3,$dosen4]);
        $this->load->view('sample/header', $title);
        $this->load->view('sample/navbar');
        $this->load->view('dosen/index', $data);
        $this->load->view('sample/footer');
    }
    public function create()
    {
        $data = array('title' => "masukan data");

        $this->load->view('sample/header', $data);
        $this->load->view('sample/navbar');
        $this->load->view('dosen/input');
        $this->load->view('sample/footer');
    }
}
