<?php
require_once "./class_pasien.php";
    class bmi extends pasien{
        public $berat;
        public $tinggi;
        
        public function __construct($berat,$tinggi,$tanggal)
        {
            $this->berat = (int)$berat;
            $this->tinggi = (int)$tinggi;
           
        }
        function nilaiBmi(){
            $nilai = $this->berat/pow($this->tinggi/100,2);
            $hasil = sprintf("%.1f",$nilai);
            return $hasil;
        }
        public function keterangan()
        {
            if (self::nilaiBmi() < 18.5){
                $status = "kekurangan bobot";
            }
            elseif (self::nilaiBmi() >= 18.5 && self::nilaiBmi() <= 24.9){
                $status = "normal";
            }
            elseif (self::nilaiBmi() >= 25.0 && self::nilaiBmi() <= 29.9){
                $status ="kelebihan bobot";
            }
            elseif (self::nilaiBmi() > 30.0){
                $status = "obesitas";
            }
            return $status;
            
        }
    }
?>