<?php
    include_once('header.php');

    $mechants = $bdd->query("SELECT * FROM mechant Order By nom_mechant Asc");

    //Partie Ajout Méchant à la base de donnée
    
    if(isset($_POST['principaleMechant'])){
        $sql = "INSERT INTO `mechant`(`nom_mechant`) 
                    VALUES (:principaleMechant )";
        $ajoutMechant = $bdd->prepare($sql);
        $ajoutMechant->execute([
                'principaleMechant' => $_POST['principaleMechant'],
        ]);
        $mechant_id = $bdd->lastInsertId();
    };

    //confirmation supprimé
    if(isset($_GET["success"]) && $_GET["success"] == "ok"){
        echo('<div class="alert alert-success">Suppression effectuée</div>');
    }
?>

<html>
    <head>
        <title>Liste des Méchants</title>
        <link rel="stylesheet" href="liste_perso.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!--Barre de navigation-->
        <?php
            include_once('navigation.php');
            ?>

        <div class="liste_perso">
            <!--Titre de la liste-->
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom du Méchants</th>
                        <th>Nom de l'acteur</th>
                        <th>Principale apparition dans un film</th>
                    </tr>
                </thead>
            <!--La liste-->
                <tbody>
                    <?php
                        while($mechant = $mechants->fetch()){
                            //affiche chaque infos dans la cathégorie qu'elles correspondent
                            echo('<tr>
                                    <td><div><img src="'.$mechant['image_mechant'].'" width="150px"></div></td>
                                    <td>'.$mechant['nom_mechant'].'</td>
                                    <td>'.$mechant['nom_acteur'].'</td>
                                    <td><ul>');
                                    //Affiche en mode liste
                            
                            //On fait liaison entre le méchant et les films
                            $leurFilms = $bdd->query('SELECT * FROM les_films f
                            Inner Join ennemi e
                            On e.id_film = f.id_film 
                            WHERE e.id_mechant ='.$mechant['id_mechant']);

                            //Afficher les films qui correspondent aux méchants
                            $films = $leurFilms->fetchAll();
                            foreach($films as $film){
                            echo('<li>'.$film["titre_film"].'</li>');
                            }                
                            echo '</ul></td>';

                            //Affiche si on est un administrateur
                            if($_SESSION['user']['role'] == 1){
                                echo '<td><a href="supp_mechant.php?id='.$mechant['id_mechant'].'">Supprimer méchant</a></td></tr>';
                            }else{
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>

        <!--Affiche si seulement on est administrateur -->
        <?php
            if($_SESSION['user']['role'] == 1){
                echo '
                    <!-- Créer un formulaire en POST -->
                    <div class="container">
                        <div class="row">
                            <h1>Ajouter votre méchant</h1>
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="principaleMechant" class="form-label">Nom du Méchant</label>
                                    <input required type="text" class="form-control" id="principaleMechant" name="principaleMechant">
                                </div>
                                <div class="mb-3">
                                    <label for="nom_acteur" class="form-label">Nom de l\'acteur</label>
                                    <input required type="text" class="form-control" id="nom_acteur" name="nom_acteur">
                                </div>
                                <input type="submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>';
            }
        ?>
    </body>
</html>