<?php

session_start();
  if (!isset($_SESSION['namelist'])){
      $_SESSION['namelist'] = array();
  }

if (isset ($_POST['reset']))
{
unset($_SESSION['namelist']); 
header("index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 8 / Job 3</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 8 / Job 3</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<form method="post" action="index.php">
    <input type="text" name="name" class="name"/>
    <input type="submit" name="submit" class="submit" value="Envoyer" />
    <input type="submit" name="reset" class="reset" value="RESET" />
</form>

<?php 

if(isset($_POST['name'])){
    array_push($_SESSION['namelist'],$_POST['name']);
}
foreach ($_SESSION['namelist'] as $item){
    echo '<ul><li>'. $item .'</ul></li>';  
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