<?php
require_once 'metode.php';
class persegipanjang extends metode{
    public $panjang ;
    public $lebar ;
    public function  __construct($panjang,$lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        echo "Persegi Panjang";
    }
    public function luasBidang(){
        $luas = $this->panjang * $this->lebar;
        return "$luas cm";
    }
    public function kelilingBidang(){
        $keliling = 2 * $this->panjang + 2 * $this->lebar;
        return "$keliling cm";
    }
    public function keterangan(){ 
        echo "panjang =  $this->panjang cm
        <br/>lebar =  $this->lebar cm";
    }
}