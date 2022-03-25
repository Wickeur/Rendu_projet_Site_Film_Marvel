<?php
    include_once('header.php');

    //Requête qui récupère les données de héros
    //Peut utiliser query car pas besoin d'implémentation (ex:Where)
    //Affiche les films par année de sortie
    $films = $bdd->query("SELECT * FROM les_films Order By annee_sortie_film Asc");

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
                        <th>Affiche</th>
                        <th>Titre du film</th>
                        <th>Phase du MCU</th>
                        <th>Année de sortie</th>
                        <th>Réalisateur du film</th>                    
                        <th>Héros principaux</th>
                        <th>Méchants principaux</th>
                    </tr>
                </thead>
            <!--La liste-->
                <tbody>
                    <?php
                        while($film = $films->fetch()){
                            //affiche chaque infos dans la cathégorie qu'elles correspondent
                            echo('<tr>
                                    <td><div><img src="'.$film['affiche_film'].'" width="150px"></div></td>
                                    <td>'.$film['titre_film'].'</td><td>'.$film['phase_MCU_film'].'</td>
                                    <td>'.$film['annee_sortie_film'].'</td>
                                    <td>'.$film['realisateur_film'].'</td>
                                    <td><ul>');
                            
                            //On fait liaison entre film et hero principal 
                            $principauxHero = $bdd->query('SELECT * FROM personnage p
                            Left Join hero h
                            On h.id_hero = p.id_hero
                            WHERE p.id_film ='.$film['id_film']);

                            //Afficher les héros en mode liste
                            $heros = $principauxHero->fetchAll();
                            foreach($heros as $hero){
                            echo('<li>'.$hero["surnom_hero"].'</li>');
                            }                
                            echo '</ul></td><td><ul>';

                            //On fait liaison entre film et mechant principal 
                            $principauxMechant = $bdd->query('SELECT * FROM ennemi e
                            Left Join mechant m
                            On m.id_mechant = e.id_mechant
                            WHERE e.id_film ='.$film['id_film']);
                            
                            //Afficher les méchants en mode liste
                            $mechants = $principauxMechant->fetchAll();
                            foreach($mechants as $mechant){
                            echo('<li>'.$mechant["nom_mechant"].'</li>');
                            }                
                            echo '</ul></td></tr>';
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>