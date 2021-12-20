<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $results = [
            [
                "home" => "Team 1",
                "visitors" => "Team 2",
                "scoreHome" => "142",
                "scoreVisitors" => "137"
            ],
            [
                "home" => "Team 3",
                "visitors" => "Team 4",
                "scoreHome" => "124",
                "scoreVisitors" => "127"
            ],                [
                "home" => "Team 5",
                "visitors" => "Team 6",
                "scoreHome" => "112",
                "scoreVisitors" => "123"
            ],            [
                "home" => "Team 7",
                "visitors" => "Team 8",
                "scoreHome" => "142",
                "scoreVisitors" => "137"
            ],
            [
                "home" => "Team 9",
                "visitors" => "Team 10",
                "scoreHome" => "124",
                "scoreVisitors" => "127"
            ],                [
                "home" => "Team 11",
                "visitors" => "Team 12",
                "scoreHome" => "112",
                "scoreVisitors" => "123"
            ]
        ];
    ?>
</head>
<body>

<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

    <div>

        <div>
            
            <h2>Risultati partite:</h2>
            
        </div>

        <?php
            
            for ($x = 0; $x < count($results); $x++) {
                echo $results[$x]["home"] . " - " . $results[$x]["visitors"] . " | " . $results[$x]["scoreHome"] . " - " . $results[$x]["scoreVisitors"] . "<br>";
            }

        ?>

    </div>
    
</body>
</html>