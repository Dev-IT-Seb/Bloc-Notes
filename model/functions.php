<?php
    
    // FUNCTIONS 
    //----------------//
    //AJOUTER
    //MODIFIER
    //SUPPRIMER
    //RECHERCHER
    //----------------//
    // UNE REQUETE SE REALISE EN 5 TEMPS (ligne 19)
    //----------------//

    //IMPORT FILE "CONTROLEUR_ACCUEIL.PHP"
    include "controleur_accueil.php";

    //FUNCTION AJOUTER NOTES
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