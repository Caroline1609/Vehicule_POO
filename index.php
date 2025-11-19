<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Voiture</title>
</head>
<body>

<h1>Test</h1>

<?php
require_once 'Moteur.php';
require_once 'Voiture.php';
require_once 'Voiturecourse.php';


$v1 = new Voiture("peugeot", "208", "1.2 PureTech 130", 188,);

echo "<h2>Voiture normale</h2>";
echo "<p>" . $v1 . "</p>";



$v2 = new Voiturecourse("ferrari", "testarossa", "ferrari", 350, 1505);

echo "<h2>Voiture de course</h2>";
echo "<p>" . $v2 . "</p>";
?>

</body>
</html>
