const digitize = n => [...`${n}`].map(i => parseInt(i));
console.log(digitize(123));  // ผลลัพธ์: [1, 2, 3]
console.log(digitize(1230)); // ผลลัพธ์: [1, 2, 3, 0 ]
