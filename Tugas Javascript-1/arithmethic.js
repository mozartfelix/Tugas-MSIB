/*
 * Tolong perhatikan secara SEKSAMA Langkah berikut ini
 * 1. Cobalah buat aritmatika dengan urutan berikut.
 * 2. Buatlah pertambahan antara a dan b lalu masukkan hasil nya ke variabel total
 * 3. Lalu setelah dimasukkan ke variabel total. Cobalah buat hasil sisa bagi dengan variabel c
 *    pada variabel total tersebut.
 * 4. Tampilkan value total yang sekarang pada terminal
 */

var a = 10;
var b = 25;
var c = 8;

var total;

total = a + b;
console.log('Hasil dari ', a, '+', b, '=', total);

total %= c;
console.log('Value variabel total saat ini =', total);
