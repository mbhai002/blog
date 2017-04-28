<?php
$serveur = 'localhost';
$user = 'root';
$pass  = 'Mblight87';
$bdd = 'demo';
$port = '80';

try {
    $cnx = new PDO('mysql:host='.$serveur.';dbname='.$bdd, $user, $pass);
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>