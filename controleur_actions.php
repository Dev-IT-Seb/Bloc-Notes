<?php

    // CONTROLEUR ACTIONS
    // RECUPERATION VALEURS VIA $_POST + LANCEMENT DES FUNCTIONS
    
// IMPORT "INIT.PHP"
include "library/init.php";

// IMPORT "FUNCTIONS.PHP"
include "model/functions.php";

// RECUPERATION VALEURS INPUT DU FORMULAIRE (-- COMME DES SELECTEURS EN JS --)
$TitreForm = $_POST["titreInput"];
$DescriptionForm = $_POST["descriptionInput"];


//-- LANCEMENT FUNCTION AJOUTER NOTES
// SI LES PARAMETRES NE SONT PAS SAISIES DANS LA FUNCTION D'APPEL (Expected 2 arguments. Found 0.)
//
// Ajouter les variables de la recuperation $_POST dans les paramètres de la function 
// (POUR REMPLISSAGE DES VALEURS "POUR LA REQUETE") => Voir Page "functions.php" (ligne 17, 28, 29)
AjouterNote($TitreForm, $DescriptionForm);


// LANCEMENT FUNCTION AFFICHER














// LANCEMENT FUNCTION MODIFIER










// LANCEMENT FUNCTION SUPPRIMER





