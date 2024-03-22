/*
 * Tolong perhatikan secara SEKSAMA Langkah berikut ini
 * 1. Buatlah sebuah kondisi untuk menentukan sebuah nilai mata kuliah, dengan kondisi
 *    - Jika nilai lebih dari atau sama dengan 80 maka akan muncul tulisan "Sangat Bagus" pada terminal
 *    - Jika nilai lebih dari atau sama dengan 70 dan kurang dari 80 maka akan muncul tulisan "Bagus" pada terminal
 *    - Jika nilai lebih dari atau sama dengan 60 dan kurang dari 70 maka akan muncul tulisan "Cukup" pada terminal
 *    - Jika nilai lebih dari atau sama dengan 50 dan kurang dari 60 maka akan muncul tulisan "Kurang" pada terminal
 *    - Jika nilai kurang dari 50 maka akan muncul tulisan "Sangat Kurang" pada terminal (else)
 */

var nilai = 85;

if (nilai >= 80) {
  console.log('Sangat Bagus');
} else if (nilai >= 70 && nilai < 80) {
  console.log('Bagus');
} else if (nilai >= 60 && nilai < 70) {
  console.log('Cukup');
} else if (nilai >= 50 && nilai < 60) {
  console.log('Kurang');
} else {
  console.log('Sangat Kurang');
}
