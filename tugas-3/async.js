/*
    1. Dibawah terdapat function promise
    2. Jalankan Promise dibawah dengan menggunakan async await
    3. Tampilkan hasil dari promise (dapat berupa resolve/reject) pada terminal
*/

function exercisePromise(age) {
  return new Promise(function (resolve, reject) {
    if (age > 18) {
      resolve("Kamu sudah dewasa");
    } else {
      reject("Kamu Masih Kecil");
    }
  });
}
