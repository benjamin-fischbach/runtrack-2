<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 7 / Job 4</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 7 / Job 4</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

function calcule($a, $operation, $b) {
    if($operation === "+")
    return $a + $b;
    elseif($operation === "-")
    return $a - $b;
    elseif($operation === "*")
    return $a * $b;
    elseif($operation === "/")
    return $a / $b;
    elseif($operation === "%")
    return $a % $b;
    else {
        echo "Operation non-definie !";
    }
}

echo "Pour \$a = 4 et \$b = 10 :<br><br>";

echo "Le résultat de \"+\" est " . calcule(4, "+", 10)."<br>";
echo "Le résultat de \"-\" est " . calcule(4, "-", 10)."<br>";
echo "Le résultat de \"*\" est " . calcule(4, "*", 10)."<br>";
echo "Le résultat de \"/\" est " . calcule(4, "/", 10)."<br>";
echo "Le résultat de \"%\" est " . calcule(4, "%", 10)."<br>";

?>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>