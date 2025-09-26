<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 2 / Job 1</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 2 / Job 1</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php 
$i = 0;
$obj1 = 1337;
$obj2 = 42;


while($i <= $obj1){
    if ($i !== $obj2){
        echo $i . " <br> ";
        $i++;
    }
    elseif ($i == $obj2){
        echo "<b><u>" .  $i . "</b></u><br>";
        $i++;
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