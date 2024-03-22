/*
 Dibawah ini terdapat sebuah function average, ubahlah function tersebut ke arrow function
*/

// function average() {
//   const arr = [10, 4, 2, 6, 7, 2];
//   let result = 0;
//   for (let index = 0; index < arr.length; index++) {
//     result += arr[index];
//   }
//   return result / arr.length;
// }

const average = () => {
  const arr = [10, 4, 2, 6, 7, 2];
  let result = 0;
  for (let index = 0; index < arr.length; index++) {
    result += arr[index];
  }
  return result / arr.length;
};

console.log(average());
