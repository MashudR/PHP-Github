<?php
require_once 'metode.php';
class segitiga extends metode{
    public $alas ;
    public $tinggi ;
    public function __construct($alas,$tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        echo "Segitiga";
    }
    public function luasBidang(){
        $luas = ($this->alas * $this->tinggi) /2;
        return $luas;
    }
    public function sisiC(Type $var = null)
    {
        $AB = (($this->alas * $this->alas) + ($this->tinggi * $this->tinggi));
        $sisi = sqrt($AB);
        return $sisi;
    }
    public function kelilingBidang(){
        $keliling = $this->alas + $this->tinggi + $this->sisiC();
        return $keliling;
    }
}