<?php
    include_once('header.php');
    // Je détruis la variable de session (Je détruis toutes les variables dans $_SESSION)
    session_destroy();
    // je redirige vers la page de connexion
    header('Location: index.php');
?>