<?php
    //Pour se connecter en administrateur -> Nom : "Julian" Mot de passe : "mdp"

    include_once('header.php');

    //Requête qui récupère les données de connexion à un profil
    //Peut utiliser query car pas besoin d'implémentation (ex:Where)
    $utilisateur = $bdd->query("SELECT * FROM utilisateur");
    $utilisateur = $utilisateur->fetchAll();

    if (isset($_POST["nom_rentré"]) && $_POST["nom_rentré"] != "" && isset($_POST["password_rentré"]) && $_POST["password_rentré"] != "") { 
        //si ce qu'on rentré n'est pas vide
        foreach ($utilisateur as $user) { 
            if ($_POST["nom_rentré"] == $user['nom_utilisateur'] && password_verify($_POST["password_rentré"], $user["mdp_utilisateur"])){ 
                //vérifie si ce qu'on a rentré correspond à ce qu'il y a dans la base de donnée 
                echo("Vous etes connecté");
                $_SESSION['user'] = //session par rapport à l'utilisateur
                [
                    'id' => $user['id_utilisateur'],
                    'role' => $user['id_role']
                ];

                header("Location: liste_film.php"); //redirection sur le site
                die; //ferme la page de connexion
                }
            }
        } 
?>
<html>
    <head>
        <title>Me connecter</title>
        <link rel="stylesheet" href="connexion.css">
    </head>
    <body>
        <div class="presentation">
            <h1>Bienvenue</h1> 
            <br>
            Veuilliez bien vous indentifier pour accéder à la liste des meilleurs films qui existent
                <br>(c'est-à-dire les films Marvel)
                <br>
                <br><i>Créer par Julian Wicke</i>
        </div>
        <div class="connexion">
            <!-- Connexion au compte -->
                <!--Rentre les identifiants-->
                <form action = "" method = "POST">
                    <input class="form-control" name = "nom_rentré" placeholder = "Votre nom" type="text">
                    <br>
                    <br>
                    <input class="form-control" name = "password_rentré" placeholder = "Votre mot de passe" type="password">
                    <br>
                    <br>
                    <input class="btn btn-outline-light form-control" type ="submit" value="Se connecter">
                    <br>
                </form>
                <!--Si pas de compte, redirection-->
                <button class="btn btn-outline-light form-control" onclick="document.location.href='creation_utilisateur.php'">Se créer un compte</button> 
        </div>
    </body>
</html>