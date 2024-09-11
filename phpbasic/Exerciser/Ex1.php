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
        function test($str) {
            $s = substr($str, strlen($str) - 1); // เอาอักขระสุดท้ายของ $str
            return $s . $str . $s; // สร้างสตริงใหม่ที่ประกอบด้วย $s + $str + $s
        }

        echo test("Red") . "<br />";   // ค่าที่ควรเป็น "dRed" + "d"
        echo test("Green") . "<br />"; // ค่าที่ควรเป็น "nGreen" + "n"
        echo test("1") . "<br />";     // ค่าที่ควรเป็น "11" + "1"
    ?>

</body>
</html>