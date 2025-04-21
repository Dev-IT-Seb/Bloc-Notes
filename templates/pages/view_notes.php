<?php
    // VUE NOTES
    
    //AFFICHAGE ERREUR
    ini_set('display_errors',1);
    error_reporting(E_ALL);
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
                    <a href= <?php echo 'controleur_accueil.php'; ?> title="Bloc Notes">aNotepad</a>
                    <p>- bloc-notes en ligne gratuit</p>
                </div>
                <div class="connection">
                    <a href="#" title="Login pour se connecter à votre compte">fonctionnalités</a>
                    <a href="#" title="Pour vous inscrire sur cette plateforme">inscription/Connexion</a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-admin-title">
                <div class="row-title-admin">
                    <h1>Page d'administration de vos notes</h1>
                </div>
            </div>
            <div class="container-tableau-admin">
                <table>
                    <thead>
                        <tr>
                            <th>titre</th>
                            <th>description</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- TRAITEMENT PHP -->
                        <?php 
                            // LANCEMENT FUNCTION VIEW TABLE
                            AffichageNotes();
                            //SUPPRIMER
                            SupprimerNotes();
                            // MODIFIER (VOIR POUR MODAL)
                            ModifierNotes();
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
        <footer>
        </footer>
    </body>
</html>