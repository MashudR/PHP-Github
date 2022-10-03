<?php
require_once 'metode.php';
class lingkaran extends metode{
    public $jari2 ;
    public function  __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        echo "Lingkaran";
    }
    public function luasBidang(){
        $luas = 3.14 * ($this->jari2 * $this->jari2);
        return "$luas cm";
    }
    public function kelilingBidang(){
        $keliling = 2* 3.14 * $this->jari2;
        return "$keliling cm";
    }
    public function keterangan(){
        echo "jari2 = $this->jari2 cm";
    }
}