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
                $mediumGrade = $totalGrades / count($grades);
                echo $student['name'] . " " . $student['lastname'] . " => ";
                if (round($mediumGrade) >= 6) {
                    echo "<span class='pass'>" . round($mediumGrade) . "<br></span>";
                } else {
                    echo "<span class='reject'>" . round($mediumGrade) . "<br></span>";
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