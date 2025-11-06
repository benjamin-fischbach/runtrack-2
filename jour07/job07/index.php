<!DOCTYPE html>
<html lang="en">

<?php
    if(isset($_POST['str']))
    {
      $str =$_POST['str'] ;
    }
    else {
      $str = NULL;
}

    if(isset($_POST['option']))
    {
      $option =$_POST['option'] ;
    }
    else {
      $option = NULL;
}

function gras($str){
    preg_match_all('([A-Z][^\s]*)', $str, $mots);            // trouve les mots avec majuscules
       foreach($mots[0] as $i) {                             // les mots majuscules deviennent les lettres $i
        $str = str_replace($i, "<strong>$i</strong>", $str); // remplace tout les $i par strong $i
}
return $str;
}

function cesar($str, $decalage)
{
$str = strtolower($str);
$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$space = " ";
$chaine_cesar = "";
for($i = 0; $i < strlen($str) ; $i++){
$index = array_search($str[$i],$array);
if($index + $decalage < 26){
$chaine_cesar .= $array[$index + $decalage];
}
else {
$chaine_cesar .= $array[($index + $decalage) % 26];
}
}
return ($chaine_cesar);
}

function plateforme($str){
$EndsWith=['me'];
$words = explode(' ', $str);
foreach($words as $word) {
    foreach($EndsWith as $end) {
        if(substr($word, -strlen($end)) === $end) {
            $str = preg_replace('/me/', 'me_', $str);
        }
    }
}
return $str;
}



/*
function caesar($input, $decalage)
{
$input = strtolower($input);
$array = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z");
$chaine_caesar = "";
for($i = 0; $i < strlen($input) ; $i++)
{
    $index = array_search($input[$i],$array);
    if($index + $decalage < 26)
    $chaine_caesar .= $array[$index + $decalage];
    else
    $chaine_caesar .= $array[($index + $decalage) % 26];
     
}
return strtoupper($chaine_caesar);
}
*/
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 7 / Job 7</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 7 / Job 7</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="elseif">

<div class="insideform">
<form action="index.php" method="POST">

<label for="style">Entrez "str" :</label>
<input type="text" id="str" name="str"><br>

<label for="option">Choisissez une fonction :</label>
<select id="option" name="option">
    <option value="gras">gras</option>
    <option value="cesar">cesar</option>
    <option value="plateforme">plateforme</option>
</select><br>

<input type="submit" name="submit" value="submit"><br><br>
</form> 


<?php
if($_POST["option"] == "gras") {
echo $option($str);
}
elseif($_POST["option"] == "cesar") {
    $decalage=2;
echo $option($str, $decalage);
}
elseif($_POST["option"] == "plateforme") {
echo $option($str);
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