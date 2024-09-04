const random_Number_in_Range = (min, max) => Math.random() * (max - min) + min;

// สุ่มตัวเลขระหว่าง 2 ถึง 10
const randomValue1 = random_Number_in_Range(2, 10);
console.log(`สุ่มตัวเลขระหว่าง 2 ถึง 10: ${randomValue1}`);

// สุ่มตัวเลขระหว่าง 1 ถึง 5
const randomValue2 = random_Number_in_Range(1, 5);
console.log(`สุ่มตัวเลขระหว่าง 1 ถึง 5: ${randomValue2}`);
