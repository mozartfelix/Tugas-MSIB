<?php

/*
    Buatlah sebuah class bernama balok dengan ketentuan sebagai berikut:
    1. Mempunyai 3 Properti Panjang, Lebar dan Tinggi dengan visibility Private
    2. Value dari panjang, lebar dan tinggi di assign ketika ingin menginisiasi object baru (atau dalam constructor)
    3. Buatlah getter serta setter dari MASING-MASING properti yang ada (Penamaan mengikuti yang ada di materi)
    4. Buatlah public method bernama luasPermukaan yang meng-return luas permukaan dari balok berdasarkan properti yang ada 
    5. Buatlah public method bernama volume yang meng-return volume dari balok berdasarkan properti yang ada
    6. Buatlah Destructor yang berisi var_dump("Program Selesai") 
*/


class Balok{
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($panjang, $lebar, $tinggi) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function setPanjang($panjang) {
        $this->panjang = $panjang;
    }
    public function setLebar($lebar) {
        $this->lebar = $lebar;
    }
    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }

    public function getPanjang() {
        return $this->panjang;
    }
    public function getLebar() {
        return $this->lebar;
    }
    public function getTinggi() {
        return $this->tinggi;
    }

    public function luasPermukaan() {
        return 2 * (($this->panjang * $this->lebar) + ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
    }

    public function volume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function __destruct() {
        var_dump("Program Selesai");
    }
}


$balok1 = new Balok(10, 5, 20);

$balok1->setPanjang(15);
var_dump($balok1->luasPermukaan());
var_dump($balok1->volume());

// Jika sudah selesai membuat class, uncomment barisan kode diatas untuk membantu kamu melakukan testing