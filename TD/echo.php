<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mon premier php </title>
</head>

 <body>
 <!-- Voici le résultat du script PHP : -->
 <?php 

#EXO 2
//  $texte = "hello mum !";
//  echo $texte;

#EXO 4
// $prenom = "Marc";
// echo "Bonjour " . $prenom;
// echo "Bonjour $prenom";
// echo 'Bonjour $prenom';
// echo $prenom;
// echo "$prenom";

#EXO 5
// $marque ='Fiat';
// $couleur = 'rouge' ;
// $immatriculation = '3451 QM 86';
// echo "<p> Voiture $immatriculation de marque $marque (couleur $couleur) </p>";

    ##Partie 3
$voiture =[
    '0'=>['marque'=>'Fiat',
        'couleur' => 'rouge',
        'immatriculation' => '3451 QM 86'],

    '1'=>['marque'=>'LandRover',
        'couleur' => 'Blue',
        'immatriculation' => 'jspLeNum'],

    '2'=>['marque'=>'',
        'couleur' => '',
        'immatriculation' => '']

];
// echo "<p> Voiture ".$voiture['immatriculation']." de marque ".$voiture['marque']." (couleur ".$voiture['couleur'].") </p>";
echo '<ul>';
$cars=count($voiture);
for($i=0;$i < $cars;$i++){    
    if($voiture[$i]['marque']){
        echo "<li> Voiture ".$voiture[$i]['immatriculation']." de marque ".$voiture[$i]['marque']." (couleur ".$voiture[$i]['couleur'].") </li>";
    }else{
        echo "<li>Il n’y a aucune voiture.</li>";
    }
}
echo '<ul>';
?>
 </body>
</html> 