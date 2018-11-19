<?php

//déclaration de la fonction
function concatFunction($param1, $param2) {
    return 'Bonjour ' . $param1 . ' ! Tu as ' . $param2 . ' ans<br />';
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 5</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 5</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend en paramètre un nombre et une chaine de caractères
                        et qui renvoit la concaténation de ces deux paramètres.</p>
                </div>
                <?php
                //Déclaration des deux chiffres
                $name = 'Romuald';
                $age = 45;
                echo concatFunction($name, $age);
                ?>
            </div>
        </div>
    </div>
</body>
</html>
