<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function test($temp1, $temp2) {
            // ปรับเงื่อนไขให้เป็นไปตามที่ต้องการ
            return ($temp1 < 0 && $temp2 > 100) || ($temp2 < 0 && $temp1 > 100);
        }

        // เพิ่มพารามิเตอร์ที่ขาดหายไปในการเรียกใช้ฟังก์ชัน
        var_dump(test(-1, 120)); // ค่าที่ควรเป็น true
        echo "<br />";
        var_dump(test(2, 120)); // ค่าที่ควรเป็น false
        echo "<br />";
    ?>
</body>

</html>