<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 4-5 / Job 1</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 4-5 / Job 1</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<form action="index.php" method="$_GET">
  <label for="lname">Nom :</label><br>
  <input type="text" id="lname" name="lname" value="Ecrire ici ..."><br>
  <label for="fname">Prénom :</label><br>
  <input type="text" id="fname" name="fname" value="Ecrire ici ..."><br><br>
  <input type="submit" value="Submit"><br><br>
</form> 
  <?php
        if(isset($_GET["fname"]))
    {
    $prenom= $_GET["fname"];
    }
    else {
    $prenom =NULL;
    }
    if(isset($_GET["lname"]))
    {
    $nom= $_GET["lname"];
    }
    else {
    $nom =NULL;
    } 
?>

Votre nom complet est : <?php echo $prenom."&nbsp". $nom; ?><br>
Le nombre d'arguments GET est : <?php echo count($_GET) ?>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>