<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 7 / Job 5</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 7 / Job 5</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

function occurences($str, $char) {
    $i=0;
    
    foreach(str_split($str) as $letter) {
        if ($letter == $char){
            $i++;
        }
    }
    return $i;
    
}

echo "si \$str = \"Bonjour\" et \$char=\"o\" alors le nombre d'occurrences de \$char dans \$str sera : ". occurences("Bonjour", "o")."<br>";
?>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>