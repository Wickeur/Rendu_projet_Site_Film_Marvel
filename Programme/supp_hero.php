<?php
    include_once('header.php');

// On supprime le héro en question
$supprime = $bdd->prepare('DELETE FROM hero WHERE id_hero=:id');
$supprime->execute(['id' => $_GET['id']]);

//On redirige vers la liste des héros
header('Location: liste_hero.php?success=ok');
die;