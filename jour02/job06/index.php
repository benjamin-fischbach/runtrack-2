<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 2 / Job 6</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 2 / Job 6</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php

$largeur =  20;
$hauteur =  10;

echo "&nbsp";

for ($i = 0; $i <= ($largeur - 1); $i++) {
    if ($i < $largeur) {
        echo "_";
    }
    else {
        echo "_<br>";
    }
}

echo "<br>";

for ($i = 0; $i <= ($hauteur - 1); $i++) {
        if ($i < $hauteur) {
        echo "|".str_repeat('&#8194',($largeur - 1))."|<br>";

    }
    else {
        echo "|";
    }
}

echo "&nbsp";

for ($i = 0; $i <= ($largeur - 1); $i++) {
    if ($i < $largeur) {
        echo "‾";
    }
    else {
        echo "‾<br>";
    }
}
?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>