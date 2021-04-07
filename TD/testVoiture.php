<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
  
require_once('voiture.php');
$voiture = new voiture;

$voiture->setCouleur("red");
$voiture->setMarque("Fiat");
$voiture->setImmatriculation("3451 QM 86");


print_r($voiture->afficher());


?>

</body>
</html>