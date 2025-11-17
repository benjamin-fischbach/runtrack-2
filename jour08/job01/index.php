<?php
    //On démarre une nouvelle session
session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() renvoie une chaine
     *de caractères vide*/
$id_session = session_id();

if (isset ($_POST['reset']))
{
unset($_SESSION['nbvisites']); // vide la var $_SESSION
header("index.php"); // Renvoi a la page index
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 8 / Job 1</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 8 / Job 1</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php 

if(isset($_SESSION['nbvisites'])){
    $_SESSION['nbvisites']++;
    echo "Cette page à été visitée " . $_SESSION['nbvisites'] ." fois. <br><br>";
}else{
    echo "Cette page n'a pas encore été visitée "."<br><br>";
    $_SESSION['nbvisites'] = 0;
exit();
}
?>
<div>
<form method="post">
    <input type="submit" name="reset" class="reset" value="RESET" />
</form>
</div>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>