<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 2 / Job 3</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 2 / Job 3</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php 
$i = 0;
$obj1 = 100;


for ($i = 0; $i <= $obj1; $i++) {
    if ($i >= 0 && $i <= 20){
            echo "<i>" . $i . "</i><br>";
    }
    elseif ($i >= 25 && $i <= 50){
            echo "<u>" . $i . "</u><br>";
    }
    else {echo $i . "<br>";
    }
}

/*if ($i > 0 && $i < 20){ */
/*if ($i > 25 && $i < 50){ */

?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>