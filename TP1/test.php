<?php

try {
// ouverture de la connexion
$dbh = new PDO('mysql:host=127.0.0.1;port=3306;dbname=test',
'root','');
echo " connexion faite";
// fermeture de la connexion
$dbh = null;
} catch (Exception $e) {
die('Erreur :');
}

?>