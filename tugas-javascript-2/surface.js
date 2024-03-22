/*
    1. Cobalah untuk membuat sebuah function untuk menghitung Luas Permukaan sebuah balok (nama function bebas)
    2. function tersebut menerima 3 parameter yaitu: panjang, lebar, tinggi
    3. Rumus luas permukaan balok: 2 x ((panjang x tinggi) + (panjang x lebar) + (lebar x tinggi))
    4. Kamu dapat mencari luas permukaan balok di internet agar lebih jelas
    5. Setelah selesai melakukan kalkulasi maka kembalikan value tersebut dengan return pada function
    6. Terakhir, Panggil Function tersebut lalu tampilkan hasilnya pada terminal (bisa di setor ke variabel atau langsung)
*/

function luasPermukaanBalok(panjang, lebar, tinggi) {
  let luas = 2 * (panjang * tinggi + panjang * lebar + lebar * tinggi);
  return luas;
}

console.log('Luas permukaan balok adalah: ' + luasPermukaanBalok(20, 8, 10));
