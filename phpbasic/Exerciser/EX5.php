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
        function test($n) {
            return $n % 3 == 0 || $n % 7 == 0; // หาร 3 หรือ 7 ลงตัว
        }   
        
        var_dump(test(3));   // ควรเป็น true เพราะ 3 หารด้วย 3 ลงตัว
        echo "<br />";

        var_dump(test(14));  // ควรเป็น true เพราะ 14 หารด้วย 7 ลงตัว
        echo "<br />";

        var_dump(test(12));  // ควรเป็น true เพราะ 12 หารด้วย 3 ลงตัว
        echo "<br />";

        var_dump(test(37));  // ควรเป็น false เพราะ 37 ไม่หารด้วย 3 และไม่หารด้วย 7 ลงตัว
        echo "<br />";
    ?>

</body>
</html>