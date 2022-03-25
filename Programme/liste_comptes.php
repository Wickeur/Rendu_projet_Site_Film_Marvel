<?php
    include_once('header.php');

    //Requête qui récupère les données des comptes
    $comptes = $bdd->query("SELECT * FROM utilisateur where id_role=2 Order By nom_utilisateur Asc");

    //Confirmation de suppression
    if(isset($_GET["success"]) && $_GET["success"] == "ok"){
        echo('<div class="alert alert-success">Suppression effectuée</div>');
    }
?>
<html>
    <head>
        <title>Liste des films</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="liste_film.css">
    </head>
    <body>
        <!--Barre de navigation-->
        <?php
            include_once('navigation.php');
            ?>

        <div class="liste_film">
            <!--Titre de la liste-->
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Nom du compte</th>
                        <th></th>
                    </tr>
                </thead>
            <!--La liste-->
                <tbody>
                    <?php
                        while($compte = $comptes->fetch()){
                            //affiche chaque infos dans la cathégorie qu'elles correspondent
                            echo('<tr><td>'.$compte['nom_utilisateur'].'</td>');

                            //affiche le bouton supprimer           
                            echo '<td><a href="supp_compte.php?id='.$compte['id_utilisateur'].'">Supprimer</a></td></tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>