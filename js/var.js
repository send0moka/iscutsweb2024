// Menggunakan var
var x = 1;
if (true) {
    var x = 2;  // Sama x seperti di luar blok
    console.log(x);  // Output: 2
}
console.log(x);  // Output: 2

// Menggunakan let
let y = 1;
if (true) {
    let y = 2;  // y yang berbeda, hanya dalam blok ini
    console.log(y);  // Output: 2
}
console.log(y);  // Output: 1

// Menggunakan const
const z = 1;
// z = 2;  // Ini akan menyebabkan error
console.log(z);  // Output: 1

const arr = [1, 2, 3];
arr.push(4);  // Ini diperbolehkan
console.log(arr);  // Output: [1, 2, 3, 4]
// arr = [5, 6, 7];  // Ini akan menyebabkan error

// Hoisting dengan var
console.log(a);  // Output: undefined
var a = 5;

// Hoisting dengan let atau const akan menyebabkan ReferenceError
// console.log(b);  // Ini akan menyebabkan ReferenceError
// let b = 5;