<?php
    include_once('header.php');

// On supprime le compte en question
$supprime = $bdd->prepare('DELETE FROM utilisateur WHERE id_utilisateur=:id');
$supprime->execute(['id' => $_GET['id']]);

//On redirige vers la liste des comptes
header('Location: liste_comptes.php?success=ok');
die;