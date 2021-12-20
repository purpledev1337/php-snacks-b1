<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

    <div>
        <?php
            $requestedArray = [];
            
            $x = 0;
            while (count($requestedArray) < 15) {
                $randomNumber = rand(1, 50);
                if (!in_array($randomNumber, $requestedArray)) {
                    $requestedArray[] = $randomNumber;
                    // echo "Num " . $x + 1 . " = " . $randomNumber . "<br>";
                    var_dump($requestedArray[$x]);
                    $x++;
                };
            };
        ?>
    </div>

<style>

</style>
    
</body>
</html>