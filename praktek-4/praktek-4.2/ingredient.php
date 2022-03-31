<!-- ambil simbol disini -->
<!-- $ -->


<?php
class persegipanjang{
    private $panjang;
    private $lebar;

    function __construct($panjang,$lebar)
    {$this->panjang = $panjang;
        $this->lebar = $lebar;
        
    }
    function cariluas(){
        return $this->panjang * $this->lebar;
    }
    function carikeliling(){
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>