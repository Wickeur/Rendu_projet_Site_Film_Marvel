<?php
//un fichier header qu'on pourra ensuite appeler à chaque début de script pour éviter de le réécrire
    //démarge de la session
    session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=film_mcu;charset=utf8',
    'root', 
    '',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
}
//pour avoir les erreurs requête
catch(Exception $e){
    die('Erreur : '.$e->getMessage());
}
?>
