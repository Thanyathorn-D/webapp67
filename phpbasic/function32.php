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
        function addFunction($num1, $num2) {
            $num = $num1 + $num2;
            return $num;
        }

        $return_Value = addFunction(10, 20);
        echo "Return value from the function: $return_Value";
    ?>

</body>
</html>