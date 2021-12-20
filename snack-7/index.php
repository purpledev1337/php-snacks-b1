<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 
    $students = [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni',
            'grades' => [8, 7, 9, 8, 7, 9]
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri',
            'grades' => [5, 4, 6, 5, 4, 6]
        ],
        [
            'name' => 'Roberto',
            'lastname' => 'Ranfagni',
            'grades' => [6, 5, 7, 6, 6, 7]
        ],
        [
            'name' => 'Giuseppe',
            'lastname' => 'Giusti',
            'grades' => [2, 4, 6, 8, 10, 0]
        ]
    ];
?>
<body>

<!-- Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

    <div>
        <?php

            foreach ($students as $student) {
                $totalGrades = 0;
                $grades = $student['grades'];
                foreach ($grades as $grade) {
                    $totalGrades += $grade;
                }
                $mediumGrade = round($totalGrades / count($grades));
<<<<<<< HEAD
                echo "<div>". $student['name'] . " " . $student['lastname'] . " => ";
                if ($mediumGrade >= 6) {
                    echo "<span class='pass'>" . $mediumGrade . "</span>" . "</div>";
                } else {
                    echo "<span class='reject'>" . $mediumGrade . "</span>" . "</div>";
=======
                echo $student['name'] . " " . $student['lastname'] . " => ";
                if ($mediumGrade >= 6) {
                    echo "<div class='pass'>" . $mediumGrade . "</div>";
                } else {
                    echo "<div class='reject'>" . $mediumGrade . "</div>";
>>>>>>> 6caea060b74feade86c7ea7ee8d3fdecb77e0302
                }
            }

        ?>

    </div>

<style>
    * {
        font-size: 1.5em;
    }

    .pass {
        color: green;
    }

    .reject {
        color: red;
    }

</style>
    
</body>
</html>