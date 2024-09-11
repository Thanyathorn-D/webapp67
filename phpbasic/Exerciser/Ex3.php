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
    function test($x, $y) {
        // แก้ไขเงื่อนไข
        return ($x <= 20 || $y >= 50) || ($y <= 20 || $x >= 50);
    }

    var_dump(test(20, 84)); // ค่าที่ควรเป็น true
    echo "<br />";
    var_dump(test(14, 50)); // ค่าที่ควรเป็น true
    echo "<br />";
    var_dump(test(11, 45)); // ค่าที่ควรเป็น true
    echo "<br />";
    var_dump(test(25, 40)); // ค่าที่ควรเป็น false
    echo "<br />";
?>

</body>
</html>