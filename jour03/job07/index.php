<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 3 / Job 7</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 3 / Job 7</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php

$str= "Certaines choses changent, et d'autres ne changeront jamais.";
$lettres = str_split($str);
$lenght = count($lettres);
$position = 1;

for ($i = 1; $i <= $lenght; $i++) {
    if ($i == $lenght) {
        $position = 0;
        echo strtolower($lettres[$position++]);
    }
    elseif($i == 1){
        echo strtoupper($lettres[$position++]);
    }
    else {
        echo ($lettres[$position++]);
    }

}

/*
foreach ($lettres as $lettre) {
    echo $lettre;
}

/*for ($i = 0; $i < strlen($str); $i++) {
    echo $str[$i++] ;
}

/*var_dump ($lettres);
exit;*/

/*
pour chaque lettre de str,
return la lettre +1 dans la string
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