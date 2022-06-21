<?php
class MahasiswaModel extends CI_Model{
    public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tanggalLahir;
    public $tempatLahir;
    public $ipk;
    public $predikat;
    public function predikat()
    {
        $predikat = $this->ipk >= 3.75 ? "Cumlaude" : "Baik";
        return $predikat;
    }
}