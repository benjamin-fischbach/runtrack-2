<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 3 / Job 2</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 3 / Job 2</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie";
$obj1 = "";

for($i = 0; $i < strlen($str); $i += 2) $obj1 .= $str[$i];

echo "$obj1.";

/*  .=  sign reassemble the sentence

$var = 1;
$var .= 20;

means

$var = 1 . 20;

wich gives

$var = 120;

*/

?>




</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>