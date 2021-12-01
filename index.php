<?php
include "Database-Dischi/arrDischi.php";
/* var_dump($albums);
 */ ?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <a href="#">
                <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="logo-spotyfy" />
            </a>
        </nav>
    </header>
    <main>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 g-4">

                <?php

                foreach ($albums as $albumSingolo) {
                    include "components/card.php";
                }
                /*    //var_dump($albumSingolo);
                        echo $albumSingolo['poster'] . "<br>";
                        echo $albumSingolo['title'] . "<br>";
                        echo $albumSingolo['author'] . "<br>";
                        echo $albumSingolo['year'] . "<br>"; 
                    */
                ?>

            </div>
        </div>

    </main>
</body>

</html>