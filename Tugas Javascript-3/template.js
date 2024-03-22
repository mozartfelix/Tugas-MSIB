/*
    1. Dibawah ini terdapat variabel
    2. Buatlah sebuah kalimat:
    "Nama Saya Budiawan, saya berumur 20 tahun. Saya tinggal di Jakarta. Saat ini Sedang kuliah di Universitas Tanpa Nama" 
    dengan menggunakan template literals
    3. Masukkan value tersebut ke dalam variabel result dibawah
    4. Lalu tampilkan hasilnya pada terminal
*/

const name = 'Budiawan';
const age = 20;
const domisili = 'Jakarta';
const universitas = 'Universitas Tanpa Nama';

const result = `Nama Saya ${name}, saya berumur ${age} tahun. Saya tinggal di ${domisili}. Saat ini Sedang kuliah di ${universitas}`;
console.log(result);
