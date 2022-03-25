<?php
    include_once('header.php');

    // Récupération des informations
    if(isset($_POST['titre_film'])){
        // Requête pour l'INSERT
        $sql = "UPDATE `les_films` SET `titre_film`=:titre_film,
                                        `annee_sortie_film`=:annee_sortie_film,
                                        `realisateur_film`=:realisateur_film,
                                        `phase_MCU_film`=:phase_MCU_film
                                        WHERE id_film = :id";
        $ajoutFilm = $bdd->prepare($sql);
        $ajoutFilm->execute([
                'id' => $_GET['id'],
                'titre_film' => $_POST['titre_film'],
                'annee_sortie_film' => $_POST['annee_sortie_film'],
                'realisateur_film' => $_POST['realisateur_film'],
                'phase_MCU_film' => $_POST['phase_MCU_film'],
        ]);

        //Partie pour mettre à jour le  héros 
        $sql = "UPDATE `personnage` SET `id_hero`=:heroPrincipale Where id_film = :id";
        $modifHeroAuFilm = $bdd->prepare($sql);
        $modifHeroAuFilm->execute([
                'heroPrincipale' => $_POST['heroPrincipale'],
                'id' => $_GET['id'],
        ]);

        //Partie pour mettre à jour le méchant 
        $sql = "UPDATE `ennemi` SET `id_mechant`=:mechantPrincipale Where id_film = :id";
        $modifMechantAuFilm = $bdd->prepare($sql);
        $modifMechantAuFilm->execute([
                'mechantPrincipale' => $_POST['mechantPrincipale'],
                'id' => $_GET['id'],
        ]);

        //redirection
        header('location:liste_film.php');die;
    }

    //Jointure entre les films, les héros et les méchants
    if($_GET['id']){
        $films = $bdd->prepare("Select * From les_films lf
                                Left Join personnage p 
                                On p.id_film = lf.id_film
                                Left Join ennemi e
                                On e.id_film = lf.id_film
                                Where lf.id_film = :id_film ");
        $films->execute([
            "id_film" => $_GET["id"],
        ]);

        // Je récupère mon film
        $film = $films->fetchAll();

        if(!$film){
            header('Location: liste_film.php');die;
        }
    }else{
        header('Location: liste_film.php');die;
    }
?>

<html>
    <head>
        <title>Modifier le film</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <!--Barre de navigation-->
        <?php
            include_once('navigation.php');
            ?>

        <div class="container">
            <div class="row">
                <h1>Modifier le film</h1>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="titre_film" class="form-label">Titre du film</label>
                        <input type="text" class="form-control" id="titre_film" name="titre_film" value="<?= $film[0]['titre_film'] ?>">
                    </div>
                    <div class="mb-3">
                        <!--Année minimum 2007 (2008 premier film Marvel) et année maximum notre date actuelle-->
                        <label for="annee_sortie_film" class="form-label">Année de sortie du film</label>
                        <input required type="number" min="2007" max="<?= date('Y')?> class="form-control" id="annee_sortie_film" name="annee_sortie_film"  value="<?= $film[0]['annee_sortie_film'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="realisateur_film" class="form-label">Nom du réalisateur</label>
                        <input type="text" class="form-control" id="realisateur_film" name="realisateur_film"  value="<?=  $film[0]['realisateur_film'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="phase_MCU_film" class="form-label">Numéro phase du MCU</label>
                        <input required type="number" max="9" class="form-control" id="phase_MCU_film" name="phase_MCU_film" value="<?=  $film[0]['phase_MCU_film'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="heroPrincipale" class="form-label">Le héros du film</label>
                    <select class="form-select" name="heroPrincipale">
                        <?php
                        //Propose tous les héros qui se trouve dans la base de donnée par ordre alphabétique
                        $heroPrincipale = $bdd->query('SELECT * FROM hero ORDER BY surnom_hero');
                        $heros = $heroPrincipale->fetchAll();
                        foreach ($heros as $hero){
                            $choix = '<option value="'.$hero['id_hero'].'"';

                            //Selectionne automatiquement le personnage enregistrer
                            if($hero['id_hero'] == $film[0]['id_hero']){
                                $choix .= ' selected ';
                            }
                            $choix .= '>'.$hero['surnom_hero'].'</option>';
                            echo($choix);
                        }
                        ?>
                    </select>
                    </div>
                    <div class="mb-3">
                        <label for="mechantPrincipale" class="form-label">Le méchant du film</label>
                    <select class="form-select" name="mechantPrincipale">
                        <?php
                        //Propose tous les méchants qui se trouve dans la base de donnée par ordre alphabétique
                        $mechantPrincipale = $bdd->query('SELECT * FROM mechant ORDER BY nom_mechant');
                        $mechants = $mechantPrincipale->fetchAll();
                        foreach ($mechants as $mechant){
                            $choix = '<option value="'.$mechant['id_mechant'].'"';

                            //Selectionne automatiquement le personnage enregistrer
                            if($mechant['id_mechant'] == $film[0]['id_mechant']){
                                $choix .= ' selected ';
                            }
                            $choix .= '>'.$mechant['nom_mechant'].'</option>';
                            echo($choix);
                        }
                        ?>
                    </select>
                    </div>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </body>
</html>