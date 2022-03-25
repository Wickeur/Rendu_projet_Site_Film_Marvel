<!--Barre de navigation avec utilisation Boostrap-->
        <div class="Navigation">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Nos Films Marvel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="liste_film.php">Les films du MCU</a>
                        <a class="nav-item nav-link active" href="liste_hero.php">Les Héros</a>
                        <a class="nav-item nav-link active" href="liste_mechant.php">Les Méchants</a>
                        <?php
                        //Affiche si on est un administrateur
                        if($_SESSION['user']['role'] == 1){
                            echo('<a class="nav-item nav-link" href="ajout_film.php">Ajouter un film</a>');
                            echo('<a class="nav-item nav-link" href="edition.php">Editer la liste des films</a>');
                            echo('<a class="nav-item nav-link" href="liste_comptes.php">Les comptes membres</a>');
                        }
                        ?>

                        <!--Permet de se déconnecter (redirection vers le script de déconnection)-->
                        <a class="nav-item nav-link" href="deconnexion.php">Se déconnecter</a>
                    </div>
                </div>
            </nav>
        </div>
