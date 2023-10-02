<?php
require_once 'abstrak2D.php';
class persegiPanjang extends Bentuk2D{
    public $panjang;
    public $lebar;
    
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function namaBidang(){
        return "Persegi Panjang";
    }
    public function luasBidang(){
        return $this->panjang * $this->lebar;
    }
    public function kelilingBidang(){
        return 2 * ($this->panjang + $this->lebar);
    }
    public function keterangan(){
        return "dapat menghitung luas atau keliling";
    }
}

?>