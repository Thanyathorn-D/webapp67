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
        function test($s) {
            $ctr_aa = 0;
            $len = strlen($s);
            
            // ใช้ลูป for เพื่อตรวจสอบทุกตำแหน่งในสตริง
            for ($i = 0; $i < ($len - 1); $i++) {
                // ตรวจสอบว่า "aa" ปรากฏที่ตำแหน่ง $i
                if (substr($s, $i, 2) == "aa") {
                    $ctr_aa++;
                }
            }
            
            return $ctr_aa;
        }
        
        echo test("bbaaccaag") . "<br />"; // ค่าที่ควรเป็น 2
        echo test("jjkiaaasew") . "<br />"; // ค่าที่ควรเป็น 2
        echo test("JSaaakoiaa") . "<br />"; // ค่าที่ควรเป็น 3
    ?>


</body>
</html>