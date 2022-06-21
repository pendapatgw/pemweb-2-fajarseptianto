<?php
class Page extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $title['title'] = 'selamat datang';
        $data = array('title' => "selamat datang");
        $this->load->view('sample/header', $data);
        $this->load->view('sample/navbar');
        $this->load->view('sample/home');
        $this->load->view('sample/footer');
    }
}
