<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

    <div>
        <?php
            $db = [
                'teachers' => [
                    [
                        'name' => 'Michele',
                        'lastname' => 'Papagni'
                    ],
                    [
                        'name' => 'Fabio',
                        'lastname' => 'Forghieri'
                    ]
                ],
                'pm' => [
                    [
                        'name' => 'Roberto',
                        'lastname' => 'Marazzini'
                    ],
                    [
                        'name' => 'Federico',
                        'lastname' => 'Pellegrini'
                    ]
                ]
            ];

            $teachers = $db['teachers'];
            $pm = $db['pm'];

            echo "<div class='teachers tab'>";

            foreach ($teachers as $person) {
                echo "<li>" . $person['name']. " " . $person['lastname']. "</>";
            }

            echo "</div>";

            echo "<div class='pm tab'>";

            foreach ($pm as $person) {
                echo "<li>" . $person['name']. " " . $person['lastname']. "</>";
            }

            echo "</div>";


        ?>

    </div>

<style>
    .tab {
        display: inline-block;
        padding: 100px;
    }

    .teachers {
        background-color: grey;
    }

    .pm {
        background-color: green;
    }
</style>
    
</body>
</html>