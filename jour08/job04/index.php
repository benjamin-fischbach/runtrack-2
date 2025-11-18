<?php

// retenir l'email de la personne connectée pendant 1 an

//setcookie(

//    'LOGGED_USER',

//    'utilisateur@exemple.com',

//    [

//        'expires' => time() + 365*24*3600,

//        'secure' => true,

//        'httponly' => true,

//    ]

//);
//?>


<?php

if(!isset($_COOKIE['prenom'])){
    setcookie('prenom');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 8 / Job 4</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 8 / Job 4</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">


<?php
    if (!isset($_POST['connexion'])) {
?>

<div class="connection">
    <h2>Connexion</h2>
<form method="post" action="index.php">
    <label for="prenom">Prénom:</label><br>
    <input type="text" name="prenom" class="prenom"/>
    <input type="submit" name="connexion" class="connexion" value="connexion" />
</form>
</div>

<?php
    }
    else {
        // form engine
        echo "<div></div>";
    }
?>

<?php
//si le bouton "Connexion" est cliqué
if(isset($_POST['connexion'])){
  // on vérifie que le champ "prenom" n'est pas vide
  // empty vérifie à la fois si le champ est vide et si le champ existe belle et bien (is set)
  if(empty($_POST['prenom'])){
    echo "Veuillez entrer un prénom.";
  }else{
          $_COOKIE['prenom'] = $_POST['prenom'];
          $prenom = $_COOKIE['prenom'];
          echo "Bonjour ". $prenom."  !";
          echo "<form method=\"post\" action=\"index.php\"><input type=\"submit\" name=\"deconnexion\" class=\"deconnexion\" value=\"deconnexion\" /></form>";
        }
  }
if(isset($_POST['deconnexion'])){
unset($_COOKIE['prenom']);
header("index.php");
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