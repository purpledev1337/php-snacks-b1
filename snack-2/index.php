<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $getName = $_GET["name"];
        $getMail = $_GET["mail"];
        $getAge = $_GET["age"];
    ?>
</head>
<body>

<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

    <h2>Completa i campi.</h2>
    <form action="index.php" method="get">
    Nome: <input type="text" name="name"><br>
    E-mail: <input type="text" name="mail"><br>
    Età: <input type="text" name="age">
        <input type="submit">
    </form>

    <?php

        if (strlen($getName) >= 3 && str_contains($getMail, "@") && str_contains($getMail, ".") && is_numeric($getAge)) {
            echo "<h1>Accesso riuscito</h1>";
        } else {
            echo "<h1>Accesso negato</h1>";
        };
    ?>


<style>
    input {
        margin: 10px 0;
    }
</style>

    
</body>
</html>