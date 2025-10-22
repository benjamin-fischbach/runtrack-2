<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 7 / Job 2</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 7 / Job 2</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

function bonjour($jour) {
    if ($jour == TRUE) {
    echo "Bonjour";
    }
    else {
    echo "Bonsoir";
    }
}

echo "Si le boolean \$jour = TRUE, la fonction bonjour() affiche : ";
echo bonjour(TRUE)."<br>";
echo "Si le boolean \$jour = FALSE, la fonction bonjour() affiche : ";
echo bonjour(FALSE)."<br>";

?>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>