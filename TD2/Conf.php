<?php
class Conf {
 static private $databases = array(
    // Le nom d'hote est localhost sur votre machine
    'hostname' => 'localhost',
    // Au campus, vous avez une BDD nommée comme votre login
    // Sur votre machine, vous devrez creer une BDD
    'database' => 'barlowd',
    // Au campus, c'est votre login
    // Sur votre machine, vous avez surement un compte 'root'
    'login' => 'barlowd',
    // Sur votre machine personelle, vous avez creez ce mdp a l'installation
    'password' => 'oThe4ao4aezi'
 );

 static public function getLogin() {
    //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
    return self::$databases['login'];
 }

 static public function getHostname(){
    return self::$databases['Hostname'];
 }

 static public function getDatabase(){
    return self::$databases['Database'];
 }

 static public function getPassword(){
    return self::$databases['Password'];
 }

}
?>