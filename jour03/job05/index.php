<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 3 / Job 5</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 3 / Job 5</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<?php
$str="On n'est pas le meilleur quand on le croit mais quand on le sait";

$consonnes="bcdfghjklmnpqrstvwxzBCDFGHJKLMNPQRSTVWXZ";
$voyelles="aeiouyAEIOUY";

$compteC = 0;
$compteV = 0;

    for($x=0; $x < strlen($str); $x++){
        for($y=0; $y < strlen($consonnes); $y++){
            if($consonnes[$y]==$str[$x]){
                $compteC++;
            }
        }
        for($z=0; $z < strlen($voyelles); $z++){
            if($voyelles[$z]==$str[$x]){
                $compteV++;
            }
        }
    }
    

/*
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$consonnes = "bcdfghjklmnpqrstvwxz";
$voyelles = "aeiouy";


$consonnesList = str_split($consonnes);
$voyellesList = str_split($voyelles);

print_r($consonnesList);
print_r($voyellesList);
*/
?>

<?php echo $str.".<br><br>" ?>

<table>
  <thead>
    <tr>
      <th>Consonnes</th>
      <th>Voyelles</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $compteC ?></td>
      <td><?php echo $compteV ?></td>
    </tr>
  </tbody>
</table>

</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>