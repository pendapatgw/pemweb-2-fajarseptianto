<?php
// require_once "../controllers/Dosen.php";
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->model('MahasiswaModel', 'mhs1');
        $mhs1 = new MahasiswaModel();
        $mhs1->id = 'mhs20211';
        $mhs1->nama = 'ridwan hanif';
        $mhs1->nim = '122101';
        $mhs1->gender = 'laki-laki';
        $mhs1->tempatLahir = 'jogja';
        $mhs1->tanggalLahir = '19 november 1999';
        $mhs1->ipk = '3.90';


        // batas
        $this->load->model('MahasiswaModel', 'mhs2');
        $mhs2 = new MahasiswaModel();
        $mhs2->id = 'mhs20212';
        $mhs2->nama = 'ahmad jaidu';
        $mhs2->nim = '122102';
        $mhs2->gender = 'laki-laki';
        $mhs2->tempatLahir = 'sumedang';
        $mhs2->tanggalLahir = '11 agustus 2000';
        $mhs2->ipk = '3.67';
        // batas
        $this->load->model('MahasiswaModel', 'mhs3');
        $mhs3 = new MahasiswaModel();
        $mhs3->id = 'mhs20213';
        $mhs3->nama = 'putra pandjaitan';
        $mhs3->nim = '122103';
        $mhs3->gender = 'laki-laki';
        $mhs3->tempatLahir = 'semarang';
        $mhs3->tanggalLahir = '7 oktober 2001';
        $mhs3->ipk = '3.87';
        // batas


        $title['title'] = 'selamat datang';
        $data = array('mhs' => [$mhs1, $mhs2, $mhs3]);
        $this->load->view('sample/header',$title);
        $this->load->view('sample/navbar');

        $this->load->view('mahasiswa/index', $data);
        // $this->load->view('dosen/index');

        $this->load->view('sample/footer');
        // $this->load->view('indexbuah');
    }
}
