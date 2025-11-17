<?php

setcookie('nbvisites', 0);

// Check le cookie 'nbvisites' existe,
// si non met ce cookie à 0
if(!isset($_COOKIE['nbvisites'])){
    setcookie('nbvisites', 1);
    $nbvisites = 1;
} else {

    // Incrementation de la valeur du cookie
    $nbvisites = $_COOKIE['nbvisites'] + 1;
    setcookie('nbvisites', $nbvisites);
}

if (isset ($_POST['reset']))
{
setcookie('nbvisites', 0);
$nbvisites = 0; 
header("index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 8 / Job 2</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 8 / Job 2</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php 

if(isset($_COOKIE['nbvisites'])){
    $_COOKIE['nbvisites']++;
    echo "Cette page à été visitée " . $nbvisites ." fois. <br><br>";
}
?>

<form method="post">
    <input type="submit" name="reset" class="reset" value="RESET" />
</form>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>