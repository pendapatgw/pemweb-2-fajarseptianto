<?php 
    require_once "./class_bmi.php";
    class bmiPasien extends bmi{
        public $berat;
        public $tinggi;
        public $tanggal;
        public function __construct($berat,$tinggi,$tanggal)
        
        {
            $this->berat = $berat;
            $this->tinggi= $tinggi;
            $this->tanggal = $tanggal;
        }
    }

?>