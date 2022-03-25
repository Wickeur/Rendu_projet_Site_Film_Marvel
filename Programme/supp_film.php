<?php
    include_once('header.php');

// On supprime le film en question
$supprime = $bdd->prepare('DELETE FROM les_films WHERE id_film=:id');
$supprime->execute(['id' => $_GET['id']]);

//On redirige vers la page d'édition
header('Location: edition.php?success=ok');
die;