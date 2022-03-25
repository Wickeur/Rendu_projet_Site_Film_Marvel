<?php
    include_once('header.php');
    //Affiche les films par ordre de sortie
    $films = $bdd->query("SELECT * FROM les_films Order By annee_sortie_film Asc");
?>

<html>
    <head>
        <title>Edition des liste des films</title>
        <link rel="stylesheet" href="liste_film.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!--Barre de navigation-->
        <?php
        include_once('navigation.php');
        ?>
        
        <!--Confirmation de suppression-->
        <?php
            if(isset($_GET["success"]) && $_GET["success"] == "ok"){
                echo('<div class="alert alert-success">Suppression effectuée</div>');
            }
        ?>
            
        <div class="liste_film">
            <!--Titre de la liste-->
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Titre du film</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
            <!--La liste-->
                <tbody>
                    <?php
                        //Boucle pour lire toutes la base de donnée
                        while($film = $films->fetch()){
                            echo('<tr>
                                    <td><div><img src="'.$film['affiche_film'].'" width="150px"></td>
                                    <td>'.$film['titre_film'].'</td>
                                    <td><a href="modif_film.php?id='.$film['id_film'].'">Modifier</a></td><td>
                                    <a href="supp_film.php?id='.$film['id_film'].'">Supprimer</a></td>
                                </tr>');
                                // Affiche image + titre + bouton vers redirection pour modifier le film + bouton pour suppression du film en question
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>