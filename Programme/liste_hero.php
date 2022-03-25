<?php
    include_once('header.php');

    $heros = $bdd->query("SELECT * FROM hero Order By surnom_hero Asc");
    //Affiche les héros par ordre alphabétique

    //Partie Ajout Héro à la base de donnée
    if(isset($_POST['principaleHero'])){
        $sql = "INSERT INTO `hero`(`surnom_hero`, `nom_acteur`) 
                    VALUES (:principaleHero, :nom_acteur)";
        $ajoutHero = $bdd->prepare($sql);
        $ajoutHero->execute([
                'principaleHero' => $_POST['principaleHero'],
                'nom_acteur' => $_POST['nom_acteur'],
        ]);
        $hero_id = $bdd->lastInsertId();
    };

    //confirmation supprimé
    if(isset($_GET["success"]) && $_GET["success"] == "ok"){
        echo('<div class="alert alert-success">Suppression effectuée</div>');
    }
?>
<html>
    <head>
        <title>Liste des Héros</title>
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
                        <th>Nom du Héros</th>
                        <th>Nom de l'acteur</th>
                        <th>Principale apparition dans un film</th>
                    </tr>
                </thead>
            <!--La liste-->
                <tbody>
                    <?php
                        while($hero = $heros->fetch()){
                            //affiche chaque infos dans la cathégorie qu'elles correspondent
                            echo('<tr>
                                    <td><div><img src="'.$hero['image_perso'].'" width="150px"></div></td>
                                    <td>'.$hero['surnom_hero'].'</td>
                                    <td>'.$hero['nom_acteur'].'</td>
                                    <td><ul>');
                                    //Affiche en mode liste
                            
                            //On fait liaison entre le hero et les films
                            $leurFilms = $bdd->query('SELECT * FROM les_films f
                            Inner Join personnage p
                            On p.id_film = f.id_film 
                            WHERE p.id_hero ='.$hero['id_hero']);

                            //Afficher tous les films qui correspondent aux héros
                            $films = $leurFilms->fetchAll();
                            foreach($films as $film){
                            echo('<li>'.$film["titre_film"].'</li>');
                            }                
                            echo '</ul></td>';

                            //Affiche si on est administrateur
                            if($_SESSION['user']['role'] == 1){
                                echo '<td><a href="supp_hero.php?id='.$hero['id_hero'].'">Supprimer héro</a></td></tr>';
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
                echo '<!-- Créer un formulaire en POST -->
                <div class="container">
                    <div class="row">
                        <h1>Ajouter votre héros</h1>
                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="principaleHero" class="form-label">Nom du Héro</label>
                                <input required type="text" class="form-control" id="principaleHero" name="principaleHero">
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