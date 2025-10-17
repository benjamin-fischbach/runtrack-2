<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 4-5 / Job 6</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 4-5 / Job 6</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<form action="index.php" method="$_GET">
  <label for="nombre">Nombre :</label><br>
  <input type="text" id="nombre" name="nombre"><br>
  <input type="submit" name="submit" value="submit"><br><br>
</form> 

<?php 

if(isset($_GET['nombre']))
    {
    $nombre = $_GET["nombre"];
    }
    else {
    $nombre =NULL;
    }


if (($nombre % 2 ) == 0){
echo "Nombre pair";
}
else {
echo "Nombre impair";    
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