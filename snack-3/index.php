<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $posts = [

            '10/01/2019' => [
                [
                    'title' => 'Post 1',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 1'
                ],
                [
                    'title' => 'Post 2',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 2'
                ],
            ],
            '10/02/2019' => [
                [
                    'title' => 'Post 3',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 3'
                ]
            ],
            '15/05/2019' => [
                [
                    'title' => 'Post 4',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 4'
                ],
                [
                    'title' => 'Post 5',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 5'
                ],
                [
                    'title' => 'Post 6',
                    'author' => 'Michele Papagni',
                    'text' => 'Testo post 6'
                ]
            ]
        ];
    ?>
</head>
<body>

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

    <div>
        <?php
            $keys = array_keys($posts);

            for ($x = 0; $x < count($keys); $x++) {
                $key = $keys[$x];
                echo "<div class='date_card'>" . "<div class='post_date'>" . $key . "</div>";
                for ($y = 0; $y < count($posts[$key]); $y++) {
                    $post = $posts[$key][$y];
                       echo "<div class='post_title'>" .
                                $post['title'] .
                            "</div>" .
                            "<div class='post_author'>" .
                                "by " . $post['author'] .
                            "</div>" .
                            "<div class='post_text'>" .
                            $post['text'] .
                            "</div>";
                }
                echo "</div>";
            }
        ?>
    </div>

<style>
    .date_card {
        margin: 30px 0;
    }

    .post_date {
        color: grey;
    }

    .post_title {
        font-weight: bold;
        margin-top: 10px;
    }
</style>
    
</body>
</html>