<?php

$_SESSION['grille'] = array(
0,0,0,
0,0,0,
0,0,0);

$_SESSION['scoreJ1'] = 0;
$_SESSION['scoreJ2'] = 0;
$_SESSION['auJoueur'] = 1;

$j1 = 1;
$j2 = 2;

if(!empty($_GET['case'])){
	// On récupère la case jouée et on la décrémente pour que cela corresponde avec notre tableau (array). Il ne faut pas oublier que les array commencent leur valeur à 0.
	$leJoueurJoueLaCase = $_GET['case'] - 1;

	// On test si la case est égale à 0
	if($_SESSION['grille'][$leJoueurJoueLaCase] == 0){
		// la case est libre, on peut y placer le pion
		$_SESSION['grille'][$leJoueurJoueLaCase] = $_SESSION['auJoueur'];
	}

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 8 / Job 5</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 8 / Job 5</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<h2>Morpion</h2>
<br>
<div class="morpion">
 <table>
  <tr>
    <td><a href="?case=1#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=2#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=3#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
  </tr>
  <tr>
    <td><a href="?case=4#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=5#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=6#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
  </tr>
    <tr>
    <td><a href="?case=7#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=8#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
    <td><a href="?case=9#"><input type="submit" name="submit" class="submit" value="-" /></a></td>
  </tr>
</table>
<br> 
</div>
<input type="submit" name="reset" class="reset" value="Réinitialiser la partie" />

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>
<!-- <td class="tg-031e"><a href="?case=1#"><?php if($_SESSION['grille'][0] == 1) echo 'X'; elseif($_SESSION['grille'][0] == 2) echo 'O'; else echo " "; ?></a></td> -->