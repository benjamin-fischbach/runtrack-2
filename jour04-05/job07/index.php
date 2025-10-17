<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 4-5 / Job 7</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 4-5 / Job 7</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<form action="index.php" method="POST">

  <label for="largeur">Largeur :</label><br>
  <input type="text" id="largeur" name="largeur"><br>

  <label for="hauteur">Hauteur :</label><br>
  <input type="text" id="hauteur" name="hauteur"><br>

  <input type="submit" name="submit" value="submit"><br><br>
</form> 

<?php 

    if(isset($_POST['hauteur']))
    {
    $hauteur = $_POST["hauteur"];
    }
    else {
    $hauteur =NULL;
    }
    if(isset($_POST["largeur"]))
    {
    $largeur = $_POST["largeur"];
    }
    else {
    $largeur =NULL;
    }

for ($i = 1; $i <= $hauteur; $i++) {

    echo str_repeat('&#8194', ($hauteur - $i) + 1) . "/";

    for ($space = "2"; $space <= $i; $space++) {
        echo "_";
    }

    echo str_repeat('_', $i - 1) . "\<br>";
    
}
echo "/". str_repeat('_', ($hauteur * 2)) . "\\";




echo "&nbsp";

echo "<br>";

for ($i = 0; $i <= ($hauteur - 1); $i++) {
        if ($i < $hauteur) {
        echo "|".str_repeat('&#8194',($largeur - 1))."|<br>";

    }
    else {
        echo "|";
    }
}

echo "&nbsp";

for ($i = 0; $i <= ($largeur - 1); $i++) {
    if ($i < $largeur) {
        echo "‾";
    }
    else {
        echo "‾<br>";
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