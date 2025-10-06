<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 3 / Job 1</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 3 / Job 1</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php 

// tableau vide

$tableau = [];

// Ajout d' éléments
$tableau[] = 200;
$tableau[] = 204;
$tableau[] = 173;
$tableau[] = 98 ;
$tableau[] = 171;
$tableau[] = 404;
$tableau[] = 459;

//pour chaque ($tableau comme $nombre), si nombre % 2 = un nombre entier, message paire sinon message impaire

foreach ($tableau as $nombre) {
    if ($nombre % 2 == 0) {
        echo "$nombre est paire <br />";
    }
    else 
        echo "$nombre est impaire <br />";
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