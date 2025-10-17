<!DOCTYPE html>
<html lang="en">

<?php
    if(isset($_GET['style']))
    {
      $stylecss =$_GET['style'] ;
    }
    else {
      $stylecss ='Veuillez choisir un style CSS...';
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <link rel="stylesheet" href="/runtrack2/assets/css/<?php echo $stylecss?>">
    <title>Runtrack-2 - PHP : Jour 6 / Job 5</title>
</head>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 6 / Job 5</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div class="styleform">

<h1>Formulaire de Style CSS</h1>
<div class="insideform">
<form action="index.php" method="GET">

<label for="style">Choisir un style CSS :</label>
<select id="style" name="style">
    <option value="style1.css">Style 1</option>
    <option value="style2.css">Style 2</option>
    <option value="style3.css">Style 3</option>
</select><br><br>

<input type="submit" name="submit" value="submit"><br><br>
</form> 

</div>
<div id="style-return">
<?php echo "Style choisi : ". $stylecss ?>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>