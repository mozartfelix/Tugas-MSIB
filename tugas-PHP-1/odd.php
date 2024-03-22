<?php


/*
   Buatlah sebuah program untuk menampilkan bilangan ganjil sesuai dengan batas yang ditentukan
   Misalnya jika dalam parameter dimasukkan angka 20. Maka akan menampilkan bilangan ganjil dari angka 0 sampai 20 (inklusif)
   Kamu dapat menggunakan var_dump untuk menampilkan valuenya pada terminal
*/


function printOdd($fact)
{
    $i = 1;
    while ($i <= $fact) {
        if ($i % 2 != 0) {
            var_dump($i);
        }
        $i++;
    }
}



printOdd(45);

// Jalankan Test diatas jika sudah selesai