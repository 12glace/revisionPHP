<?php

if( isset($_POST['couleur']) )
{
    echo $_POST['immatriculation'].' '.$_POST['couleur'].' '.$_POST['marque'];
}

?>