<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 2 / Job 4</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 2 / Job 4</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php 
$i = 1;
$obj1 = 100;

for ($i = 1; $i <= $obj1; $i++) {
    switch ($i) {        
        case ($i % 3 == 0 && $i % 5 == 0) :
            echo "FizzBuzz <br>";
            break;
        case ($i % 3 == 0) :
            echo "Fizz <br>";
            break;
        case ($i % 5 == 0) :
            echo "Buzz <br>";
            break;

        default :
            echo $i . "<br>";
}
}

/*for ($i = 0; $i <= $obj1; $i++) {
    if (($i != 0) && $i % 3 == 0){
            echo "Fizz <br>";
    }
    elseif (($i != 0) && $i % 5 == 0){
            echo "Buzz <br>";
    }
    else {
        echo $i . "<br>";
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