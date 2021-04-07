<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Mon premier php </title>
</head>

<form method="POST" action="creerVoiture.php">
 <fieldset>
 <legend>Mon formulaire :</legend>
 <p>
 <label for="immat_id">Immatriculation</label> :
 <input type="text" placeholder="Ex : 256AB34" name="immatriculation" id="immat_id"
required/>
 </p>
 <p>
 <label for="couleur_id">Couleur</label> :
 <input type="text" placeholder="Ex : Red" name="couleur" id="couleur_id"
required/>
 </p>
 <p>
 <label for="marque_id">Marque</label> :
 <input type="text" placeholder="Ex : Fiat" name="marque" id="marque_id"
required/>
 </p>
 <p>
 <input type="submit" value="Envoyer" />
 </p>
 </fieldset>
</form>

</body>
</html> 