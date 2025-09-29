<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/runtrack2/assets/css/runtrack-style.css">
    <title>Runtrack-2 - PHP : Jour 1 / Job 3</title>
</head>

<?php 
$myBoolean = TRUE;
$myInteger = 4;
$myString  = 'this is a string';
$myFloat   = 1.5;
?>

<body>
    <header>
        <h1>Runtrack-2 - PHP : Jour 1 / Job 3</h1>
    </header>
    <main>
    <h3 class="title-bar">Espace PHP</h3>  
    <div class="center-card">

<div>
<?php 
echo "\$myBoolean contient une valeur de type : " . gettype($myBoolean). "<br>";
echo "\$myInteger contient une valeur de type : " . gettype($myInteger). "<br>";
echo "\$myString contient une valeur de type : "  . gettype($myString).  "<br>";
echo "\$myFloat contient une valeur de type : "   . gettype($myFloat).   "<br>";
?>
</div>
<div>
        <table>
        <tr>
            <th>TYPE</th>
            <th>NOM</th>
            <th>VALEUR</th>
        </tr>
        <tr>
            <th><?php echo gettype($myBoolean) ?></th>
            <th><?php echo "\$myBoolean" ?></th>
            <th><?php echo $myBoolean ?></th>
        </tr>
        <tr>
            <th><?php echo gettype($myInteger) ?></th>
            <th><?php echo "\$myInteger" ?></th>
            <th><?php echo $myInteger ?></th>
        </tr>
        <tr>
            <th><?php echo gettype($myString) ?></th>
            <th><?php echo "\$myString" ?></th>
            <th><?php echo $myString ?></th>
        </tr>
        <tr>
            <th><?php echo gettype($myFloat) ?></th>
            <th><?php echo "\$myFloat" ?></th>
            <th><?php echo $myFloat ?></th>
        </tr>
        </table>
</div>
</div>
    </main>

    <footer>
        Ben Fischbach - CDPI La Plateforme, Marseille - 2025-2026
    </footer>
</body>

</html>