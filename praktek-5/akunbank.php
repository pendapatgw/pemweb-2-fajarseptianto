<?php 
require_once "akun.php";
class akunbank extends akun{
    public $pelanggan;
// pondasi
    public function __construct($nomor,$saldo,$pelanggan) {
        parent::__construct($nomor,$saldo,);
        $this->pelanggan = $pelanggan;
    }
    // tambahan
    public function deposit($uang)
    {
        return $this->saldo + $uang;
    }
 
    public function withdraw($uang)
    {
        return $this->saldo - $uang;
    }

    public function transfer($tujuan,$uang)
    {
        return "Rp " . number_format($tujuan->deposit($uang), 2, ',', '.');
        // return $tujuan->deposit($uang);
        return "Rp " . number_format($this->withdraw($uang), 2, ',', '.');
        // return $this->withdraw($uang);
    }
    public function dapatkanSaldo()
    {
        return "Rp " . number_format($this->saldo, 2, ',', '.');
    }
    
}