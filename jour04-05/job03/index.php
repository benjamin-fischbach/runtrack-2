<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 4-5 / Job 3</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 4-5 / Job 3</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">
<?php
        if(isset($_POST["fname"]))
    {
    $prenom= $_POST["fname"];
    }
    else {
    $prenom =NULL;
    }
    if(isset($_POST["lname"]))
    {
    $nom= $_POST["lname"];
    }
    else {
    $nom =NULL;
    } 
?>
<form action="index.php" method="POST">
  <label for="lname">Nom :</label><br>
  <input type="text" id="lname" name="lname" value="Ecrire ici ..."><br>
  <label for="fname">Prénom :</label><br>
  <input type="text" id="fname" name="fname" value="Ecrire ici ..."><br><br>
  <input type="submit" value="Submit"><br><br>
</form> 

Votre nom complet est : <?php echo $prenom."&nbsp". $nom; ?><br>
Le nombre d'arguments POST est : <?php echo count($_POST) ?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>