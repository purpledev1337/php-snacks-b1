<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

    <div>
        <?php
            $p = "I'm Dexter, and I'm not sure what I am. I'm generally confused most of the time. I love Halloween. The one time of year when everyone wears a mask … not just me. I'm not the monster he wants me to be. So I'm neither man nor beast. I'm something new entirely. With my own set of rules. I'm Dexter. Boo.

            He taught me a code. To survive. Watching ice melt. This is fun. Tonight's the night. And it's going to happen again and again. It has to happen. I'm Dexter, and I'm not sure what I am. Cops, another community I'm not part of.
            
            Only you could make those words cute. He taught me a code. To survive. Like a sloth. I can do that. I'm doing mental jumping jacks. I feel like a jigsaw puzzle missing a piece. And I'm not even sure what the picture should be.";

            echo $p . "<hr>";

            $newP = explode(".", $p);

            foreach ($newP as $phrase) {
                echo "<p>" . $phrase . "." . "</p>";
            }
        ?>

    </div>

<style>

</style>
    
</body>
</html>