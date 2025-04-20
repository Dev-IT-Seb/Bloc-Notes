//----------------- SCRIPT JS ------------------//
// SELECTEURS
let CtaButton = document.querySelector(".cta-accueil");
const CtaSend = document.getElementById("send");
//
// ACTION DU BOUTON DE LA VUE ACCUEIL
CtaButton.addEventListener("click", function(){
    console.log("Bienvenue sur le site de Bloc Notes !");
    alert("Bienvenue sur le site de Bloc Notes !");
    alert("Inscris-toi sur cette plateforme pour sauvegarder tes notes.");
});
//----------------------------------------------//
//
// ACTION DU FORMULAIRE D'ENVOI
const formulaire = document.getElementById('formulaires');
formulaire.addEventListener("submit", function(event) {
    // Affichage de l'alerte avant l'envoi
    if (!confirm("Êtes-vous sûr de vouloir soumettre ce formulaire ?")) {
        event.preventDefault();  // Empêche la soumission si l'utilisateur clique sur "Annuler"
    } else {
        alert("Votre note a été sauvegardée.");
    }
});
//----------------------------------------------//