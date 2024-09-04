const random_hex_color_code = () => {
    // สร้างหมายเลขสุ่มและแปลงเป็นฐาน 16
    let n = (Math.random() * 0xffffff << 0).toString(16);
    
    // เติมศูนย์หน้าให้ครบ 6 หลัก
    return `#${n.padStart(6, '0')}`;
  };
console.log(random_hex_color_code()); // ผลลัพธ์: เช่น "#1a2b3c"
console.log(random_hex_color_code()); // ผลลัพธ์: เช่น "#ffffff"
console.log(random_hex_color_code()); // ผลลัพธ์: เช่น "#000000"
  