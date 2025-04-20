<?php
    // VUE ACCUEIL BLOC NOTES
    // TITRE + TEXTE
?>
<!DOCTYPE html>
<html lang="fr">
    <?php 
    // HEAD FRAGMENT
    include "templates/fragments/head.php";
    ?>
    <body>
        <header>
            <nav>
                <div class="title">
                    <a href="#" title="Bloc Notes">aNotepad</a>
                    <p>- bloc-notes en ligne gratuit</p>
                </div>
                <div class="connection">
                    <a href="#" title="Login pour se connecter à votre compte">fonctionnalités</a>
                    <a href="#" title="Pour vous inscrire sur cette plateforme">inscription/Connexion</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-title">
                <div class="row">
                    <h1>bienvenue sur le site de création de notes !</h1>
                    <div class="infos-title">
                        <p>vous pouvez créer de nouvelle note, les modifier ou les supprimer.</p>
                        <p>rechercher vos notes avec la barre de recherche.</p>
                    </div>
                    <div class="row-cta">
                        <!-- BUTTON ACCUEIL -->
                        <div class="cta-accueil">
                            <p>Bienvenue</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-container">
                <?php
                    // VARIABLE FORMULAIRE
                    $actionform = "controleur_actions.php";
                    $titre = "Titre de ta note";
                    $description = "Description";
                    $labelNote = "Enregistre ta note";
                    $buttonNote = "Enregistrer";
                    // FORMULAIRE FRAGMENT
                    include "templates/fragments/formulaire.php";
                ?>
            </div>
        </main>
        <footer>
            <script src="../../js/script.js"></script>
        </footer>
    </body>
</html>