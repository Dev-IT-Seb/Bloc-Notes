<?php
    
    //-- PAGE FUNCTIONS 
    //----------------//
    //-- ACTIONS DES FUNCTIONS --//
    // AJOUTER
    // VIEW
    // SUPPRIMER
    // MODIFIER -> Affichage MODAL EN JS -> AFFICHER L'ARTICLE)
    //----------------//
    // UNE REQUETE SE REALISE EN 5 TEMPS POUR AJOUT (ligne 19) | ENVOI D'UNE REQUETE SQL\PHP
    // ------------------------ //

    //-- FUNCTION AJOUTER NOTES
    function AjouterNote($TitreForm, $DescriptionForm){

        // 1. Creation d'une variable globale qui pourra être accessible
        global $bdd;

        // 2. REQUETE SQL 
        $sqlRequete = "INSERT INTO `bloc-notes`(`titre`, `texte`) VALUES (:titre, :texte)";


        // 3. Definition des paramètres (exemple ":titre" => Permets de sécuriser l'insertions "URL") 
        $parametres = [
            ":titre" => $TitreForm,
            ":texte" => $DescriptionForm,   
        ];

        // 4. Preparation de la requête
        $PrepareRequete = $bdd->prepare($sqlRequete);

        // 5. ENVOI REQUETE + VERIFICATION SI CELA FONCTIONNE CORRECTEMENT
        if (!$PrepareRequete -> execute($parametres)){
            echo "Requete SQL HS !";

            // exit (alias = die) => Permet de stopper la requête et le script s'arrête.
            exit;
        };
    };

    //-- FUNCTION AFFICHER NOTES
    function AffichageNotes(){

        // 1. Création d'une variable globale qui pourra être accessible
        global $bdd;
        
        // 2. Requête SQL pour récupérer les données
        $sqlRequete = "SELECT `id`, `titre`, `texte` FROM `bloc-notes`";
        
        // 3. Préparation de la requête
        $PrepareRequete = $bdd->prepare($sqlRequete);
    
        // 4. Envoi de la requête et vérification si ça fonctionne
        if (!$PrepareRequete->execute()){
            echo "Requête SQL HS !";
            exit;
        };
    
        // Récupération des résultats via FETCH ALL
        $resultatsView = $PrepareRequete->fetchAll(PDO::FETCH_ASSOC);
    
        // BOUCLE DES DONNEES RECUPEREES VIA LA REQUETE SQL FETCH ALL
        foreach ($resultatsView as $datas){
            echo "<tr>";
            echo "<td>" . $datas['titre'] . "</td>";
            echo "<td>" . $datas['texte'] . "</td>";
    
            // 5. Ajout des liens de modification et de suppression
            echo "
            <td>
                <a href='#' title='Cliquer pour modifier' class='cta-actions'>Modifier</a>
                <a href='?action=supprimer&id=" . $datas['id'] . "' title='Cliquer pour supprimer' class='cta-actions'>Supprimer</a>
            </td>";
            echo "</tr>";
        }
    };
    
    //-- FUNCTION SUPPRIMER NOTES
    function SupprimerNotes(){

        // 1. Creation d'une variable globale qui pourra être accessible
        global $bdd;

        // 2. Verification ID
        // Si cette condition n'est pas présente alors message d'erreur que l'ID n'est pas défini.
        //
        if(isset($_GET['id'])) {

            // 3. Securise la requête et récupère ID de l'Input
            $id = $_GET['id'];

            // 4. Requete SQL
            $sqlRequete = "DELETE FROM `bloc-notes` WHERE `id` = :id";

            // 5. Preparation de la requête
            $PrepareRequete = $bdd->prepare($sqlRequete);

            // 6. Lancement de la requête
            $PrepareRequete ->execute([':id' => $id]);

            // 7. Exit permet de clôturer la requête
            exit;
        }
    };


    //-- FUNCTION MODIFIER NOTES

    function ModifierNotes(){

        echo "";



    };
?>