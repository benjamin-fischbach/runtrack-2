<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 7 / Job 6</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 7 / Job 6</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

function leetspeak($str) {
    foreach(str_split($str) as $letter){
        if($letter == "A" || $letter == "a"){
            echo "4";
        }
        elseif($letter == "B" || $letter == "b"){
            echo "8";
        }
        elseif($letter == "E" || $letter == "e"){
            echo "3";
        }
        elseif($letter == "G" || $letter == "g"){
            echo "6";
        }
        elseif($letter == "L" || $letter == "l"){
            echo "1";
        }
        elseif($letter == "S" || $letter == "s"){
            echo "5";
        }
        elseif($letter == "T" || $letter == "t"){
            echo "7";
        }
        else {
            echo $letter;
        }
    }

}

leetspeak("Ceci est un exemple de phrase convertie en LEETSPEAK.");
?>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>