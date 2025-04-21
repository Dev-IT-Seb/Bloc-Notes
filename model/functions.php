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

        // 1. Creation d'une variable globale qui pourra être accessible
        global $bdd;
        
        // 2. REQUETE SQL 
        //SELECT `id`, `titre`, `texte` FROM `bloc-notes`
        $sqlRequete = "SELECT `titre`, `texte` FROM `bloc-notes`";
        
        // 3. Preparation de la requête
        $PrepareRequete = $bdd->prepare($sqlRequete);

        // 4. ENVOI REQUETE + VERIFICATION SI CELA FONCTIONNE CORRECTEMENT
        if (!$PrepareRequete -> execute()){
            echo "Requete SQL HS !";
            exit;
        };

        //RECUPERATION DU RESULTAT VIA FETCH ALL
        //FETCH_ASSOC = Récupère une ligne de resultat sous forme d'un tableau associatif
        $resultatsView = $PrepareRequete ->fetchAll(PDO::FETCH_ASSOC);

        //BOUCLE DES DONNEES RECUPEREES VIA LA REQUETE SQL FETCH ALL
        foreach ($resultatsView as $datas){
            echo "<tr>";
            echo "<td>" . $datas['titre'] . "</td>";
            echo "<td>" . $datas['texte'] . "</td>";
            echo "
            <td>
            <a href='#' title='Cliquer pour modifier' class='cta-actions'>" . "Modifier" ."</a>
            <a href='#' title='Cliquer pour supprimer' class='cta-actions'>" . "Supprimer" ."</a>
            </td> ";
            echo "</tr>";
        };
    };

    //-- FUNCTION SUPPRIMER NOTES

    function SupprimerNotes(){

        echo "";



    };

    //-- FUNCTION MODIFIER NOTES

    function ModifierNotes(){

        echo "";



    };
?>