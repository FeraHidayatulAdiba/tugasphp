<?php
require_once 'abstrak2D.php';
class lingkaran extends Bentuk2D{
    public $jari2;

    public function __construct($jari2){
        $this->jari2 = $jari2;
    }
    public function namaBidang(){
        return "lingkaran";
    }
    public function luasBidang(){
        return 3.14 * pow($this->jari2, 2);

    }
    public function kelilingBidang() {
         return 2 * 3.14 * $this->jari2;
    }
    public function keterangan(){
        return "Bisa menghitung keliling atau luas";
    }

}


?>