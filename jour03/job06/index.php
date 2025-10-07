<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 3 / Job 6</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 3 / Job 6</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

$str="Les choses que l'on possède finissent par nous posséder";

function envers($str) {

    $lettres = str_split($str);
    $lettres = array_filter($lettres, 'ctype_print');
    return implode('', array_reverse($lettres));

}

echo $str . "<br><br>";
echo envers($str);
?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>