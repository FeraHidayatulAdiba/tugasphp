<?php
require_once 'abstrak2D.php';
class segitiga extends Bentuk2D{
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi){
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    public function namaBidang(){
        return "Segitiga";
    }
    public function luasBidang(){
        return 0.5 * $this->alas * $this->tinggi;
    }
    public function kelilingBidang(){
            return "Tidak dapat dihitung karena tanpa sisi";
    }
    public function keterangan(){
        return "dapat menghitung luas";
    }
}

?>