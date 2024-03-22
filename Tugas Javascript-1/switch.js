/*
 * Tolong perhatikan secara SEKSAMA Langkah berikut ini
 * 1. Buatlah sebuah switch case dengan ketentuan sebagai berikut:
 * - Jika value hewan merupakan kucing maka akan menampilkan "meow" di terminal
 * - Jika value hewan merupakan sapi maka akan menampilkan "moo" di terminal
 * - Jika value hewan merupakan kambing maka akan menampilkan "mbee" di terminal
 * - Jika value hewan merupakan ayam maka akan menampilkan "kukuruyuk" di terminal
 * - Jika tidak ada yang sama, maka akan menampilkan "Hewan tidak diketahui"
 * PERHATIAN: Pembuatan kondisi diatas HARUS menggunakan switch case
 */

var hewan = 'sapi'; // sapi, kambing, kucing, ayam null

switch (hewan) {
  case 'kucing':
    console.log('meow');
    break;
  case 'sapi':
    console.log('moo');
    break;
  case 'kambing':
    console.log('mbee');
    break;
  case 'ayam':
    console.log('kukuruyuk');
    break;
  default:
    console.log('Hewan tidak diketahui');
}
