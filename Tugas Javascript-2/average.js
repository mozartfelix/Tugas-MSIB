/*
    Terdapat sebuah array dibawah bernama arr.
    1. Cobalah untuk mencari rata-rata dari array tersebut dengan menggunakan for loop (bukan dihitung manual)
    2. Lalu tampilkan hasil rata-rata tersebut pada terminal
*/

var arr = [52, 10, 34, 98, 75, 84, 102, 73, 86, 95, 42, 52, 68, 94, 43, 87, 123];

var total = 0;

for (let i = 0; i < arr.length; i++) {
  total += arr[i];
}

// arr.forEach(function (item) {
//   total += item;
// });

var average = total / arr.length;

console.log('Hasil rata-rata dari array adalah: ' + average);
