<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 2 / Job 7</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 2 / Job 7</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php
$hauteur = 5;

for ($i = 1; $i <= $hauteur; $i++) {

    echo str_repeat('&#8194', ($hauteur - $i) + 1) . "/";

    for ($space = "2"; $space <= $i; $space++) {
        echo "&#8194";
    }

    echo str_repeat('&#8194', $i - 1) . "\<br>";
    
}
echo "/". str_repeat('_', ($hauteur * 2)) . "\\";


?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>