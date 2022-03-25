<?php
include_once('header.php');

// Récupération des informations
if(isset($_POST['titreFilm'])){
    // Requête pour l'INSERT

    //Partie Ajout film en lui même
    $sql = "INSERT INTO `les_films`(`titre_film`, `annee_sortie_film`, `realisateur_film`, `phase_MCU_film`) 
                VALUES (:titreFilm, :anneeSortie, :realisateurFilm, :numPhase)";
    $ajoutFilm = $bdd->prepare($sql);
    $ajoutFilm->execute([
            'titreFilm' => $_POST['titreFilm'],
            'anneeSortie' => $_POST['anneeSortie'],
            'realisateurFilm' => $_POST['realisateurFilm'],
            'numPhase' => $_POST['numPhase'],
    ]);
    $film_id = $bdd->lastInsertId();

    //Partie Ajout Héro au film
    $sql = "INSERT INTO `personnage`(`id_hero`, `id_film`) 
                VALUES (:principaleHero, :film_id)";
    $ajoutHeroAuFilm = $bdd->prepare($sql);
    $ajoutHeroAuFilm->execute([
            'principaleHero' => $_POST['principaleHero'],
            'film_id' =>  $film_id,
    ]);

    //Partie Ajout Mechant au film
    $sql = "INSERT INTO `ennemi`(`id_mechant`, `id_film`) 
                VALUES (:principaleMechant, :film_id)";
    $ajoutMechantAuFilm = $bdd->prepare($sql);
    $ajoutMechantAuFilm->execute([
            'principaleMechant' => $_POST['principaleMechant'],
            'film_id' =>  $film_id,
    ]);

    //Redirection
    header("location: liste_film.php");
    die;
}
?>
<html>
    <head>
        <title>Ajouter un film à la liste</title>
        <link rel="stylesheet" href="liste_perso.css"> <!--pour la décoration-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!--Barre de navigation-->
        <?php
            include_once('navigation.php');
            ?>

        <!-- Créer un formulaire en POST -->
        <div class="container">
            <div class="row">
                <h1>Ajout d'un film</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="titreFilm" class="form-label">Titre du film</label>
                        <input required type="text" class="form-control" id="titreFilm" name="titreFilm">
                    </div>
                    <div class="mb-3">
                        <label for="numPhase" class="form-label">Numéro de phase du MCU</label>
                        <input required type="number" max="9" class="form-control" id="numPhase" name="numPhase">
                    </div>
                    <div class="mb-3">
                        <label for="anneeSortie" class="form-label">Annee de sortie</label>
                        <input required type="number" min="2007" max="<?= date('Y')?>" class="form-control" id="anneeSortie" name="anneeSortie">
                    </div>
                    <div class="mb-3">
                        <label for="realisateurFilm" class="form-label">Réalisateur</label>
                        <input required type="text" class="form-control" id="realisateurFilm" name="realisateurFilm">
                    </div>
                    <div class="mb-3">
                    	<label for="principaleHero" class="form-label">Quel est le héros principale</label>
                        <select required class="form-select" name="principaleHero">
                            <?php
                                //Affiche la liste des héros enregistrés
                                $principaleHero = $bdd->query('SELECT * FROM hero ORDER BY surnom_hero');
                                $heros = $principaleHero->fetchAll();
                                foreach ($heros as $hero){
                                echo '<option value="'.$hero['id_hero'].'">'.$hero['surnom_hero'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                    	<label for="principaleMechant" class="form-label">Quel est le méchant principale</label>
                        <select required class="form-select" name="principaleMechant">
                            <?php
                                //Affiche la liste des méchants enregistrés
                                $principaleMechant = $bdd->query('SELECT * FROM mechant ORDER BY nom_mechant');
                                $mechants = $principaleMechant->fetchAll();
                                foreach ($mechants as $mechant){
                                echo '<option value="'.$mechant['id_mechant'].'">'.$mechant['nom_mechant'].'</option>';
                                }
                            ?>
                        </select>
                    </div>
                    <!--Bouton pour valider-->
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
</html>