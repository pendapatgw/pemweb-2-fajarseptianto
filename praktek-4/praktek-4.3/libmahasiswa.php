<!-- ambil simbol $ < > + = _ - / * '"-->

<?php



class Mahasiswa{
    var $nim;
    var $nama;
    var $thn_angkatan;
    var $prodi;
    var $ipk;

    function __construct(int $nim,$nama,$prodi, int $thn_angkatan, float $ipk)
    {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->thn_angkatan = $thn_angkatan;
        $this->ipk = $ipk;
    }
    function predikatipk(){
        if ($this->ipk < 2.0)return 'cukup';
        elseif($this->ipk >= 2.0 && $this->ipk < 3.0) return 'baik';
        elseif($this->ipk >= 3.0 && $this->ipk <3.75) return 'sangat baik';
        elseif($this->ipk >= 3.75 && $this->ipk <=4.0) return 'cumlaude';
    }
}
?>