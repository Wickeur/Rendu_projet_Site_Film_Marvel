<?php
    include_once('header.php');
?>

<html>
    <head>
        <title>Création compte</title>
        <link rel="stylesheet" href="connexion.css">
    </head>
    <body>
        <div class="creation">
            <!-- Création d'un utilisateur -->
            <h1><b>Se créer un compte</b></h1> 
            <!--Rentre ses indentifiants-->
            <form action = "" method = "POST">
                <input class="form-control" name = "nouveau_nom" placeholder = "Votre nom" type="text">
                <br>
                <br>
                <input class="form-control" name = "nouveau_mdp" placeholder = "Votre mot de passe" type="password">
                <br>
                <br>

                <!--Idée de base abandonné car sinon n'importe qui peut se connecter en temps que Administrateur (indentifiant : Julian, mot de passe : mdp)
                    <label for="nouveau_role" class="form-label"><b>Quel est votre rôle</b></label>
                <br>
                    Propose seulement les rôles disponibles dans la base de donnée
                        <select class="form-select form-control" name="nouveau_role">
                            <?php/*
                                $nouveau_role = $bdd->query('SELECT * FROM role'); //cherche les roles
                                $roles = $nouveau_role->fetchAll();
                                foreach ($roles as $role){
                                echo '<option value="'.$role['id_role'].'">'.$role['nom_role'].'</option>'; //propose le role
                                }*/
                            ?>
                        </select>
                        <br>
                        <br>-->

                <input class="btn btn-outline-light form-control" type ="submit" value="Je crée mon compte">
            </form>
        </div>

        <?php
            // Création d'un utilisateur
            if(isset($_POST["nouveau_nom"]) && isset($_POST["nouveau_mdp"])) // si ce qu'on a rentré
            {
                $CanAdd = true;
                foreach($utilisateur as $uti)
                {
                    if($uti["nom_utilisateur"] == $_POST["nouveau_nom"]) //si utilisateur entré existe, stop
                    {
                        $CanAdd = false;
                    }
                }
                if($CanAdd == false)
                {
                    echo("Ce nom a déjà été utilisé"); //affiche si existe
                }
                else
                {
                    //on l'insert dans la base de donnée
                    echo("Votre compte a été créé");
                    $req = $bdd->prepare('INSERT INTO utilisateur (nom_utilisateur,mdp_utilisateur,id_role) VALUES (?,?,2);'); // idée de base VALUES (?,?,?)
                    $req->execute(array($_POST["nouveau_nom"],password_hash($_POST["nouveau_mdp"], PASSWORD_DEFAULT )));//créé un password cripté // idée de base (,$_POST["nouveau_role"]) en plus
                    header("Location: index.php"); //redirection sur la page de connexion 
                    die; //on ferme la page de création de compte
                }
            }
        ?>
    </body>
</html>