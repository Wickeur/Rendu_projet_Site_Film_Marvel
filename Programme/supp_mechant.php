<?php
    include_once('header.php');

// On supprime le méchant en question
$supprime = $bdd->prepare('DELETE FROM mechant WHERE id_mechant=:id');
$supprime->execute(['id' => $_GET['id']]);

//On redirige vers la liste des méchants
header('Location: liste_mechant.php?success=ok');
die;