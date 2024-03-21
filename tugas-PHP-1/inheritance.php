<?php
/*

    Buatlah Sebuah Class bernama Hiu yang merupakan subclass dari class Ikan
    Namun buatlah method override pada method makan di class hiu. Ubahlah var_dump nya menjadi berisi 
    "Hiu Memangsa " . $food

    Buatlah sebuah method baru pada class Hiu bernama $jenis, yang berguna untuk menampung jenis Hiu.
    Kamu juga harus menambahkan paramater constructor agar value $jenis terisi ya. 
    Jangan lupa juga untuk untuk membuat getter dan setternya juga

    Buatlah public method baru bernama kejarTarget() yang nantinya menerima 1 parameter.
    Lalu di dalam method tersebut buat var_dump dengan isi: "Hiu sedang mengejar" . $value
    $value diatas merupakan parameter dari kejar target

*/


class Ikan
{
    protected $warna;
    protected $berat;

    public function __construct($warna, $berat)
    {
        $this->warna = $warna;
        $this->berat = $berat;
    }

    public function getWarna()
    {
        return $this->warna;
    }
    public function setWarna($value)
    {
        $this->warna = $value;
    }

    public function getBerat()
    {
        return $this->berat;
    }
    
    public function setBerat($value)
    {
        $this->berat = $value;
    }

    public function makan($food)
    {
        var_dump("Ikan Memakan " . $food);
    }
}



// $hiu1 = new Hiu("Hitam", 500, "Tiger Shark");
// $hiu2 = new Hiu("Merah", 200, "Unknown Shark");

// $hiu1->kejarTarget("Salmon");
// $hiu1->makan("Salmon");

// $hiu1->getJenis();