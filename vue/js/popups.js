var popupConnexion = document.getElementById('formConnexion');
var popupInscription = document.getElementById('formInscription');

/*	Si un des formulaires est déjà affiché, alors cliquer sur le lien affichant
	le même formulaire le cachera. Si le formulaire n'est pas affiché, alors cliquer sur le
	bouton affichera le formulaire en question.

	Afficher l'un des 2 formulaires cachera automatiquement l'autre. */

// Gère la div contenant le formulaire de connexion
function divConnexion() {
	if (popupConnexion.style.display == "block") {
		popupConnexion.style.display = "none";
	}
	else {
		popupConnexion.style.display = "block";
		popupInscription.style.display = "none";
	}
}

// Gère la div contenant le formulaire d'inscription
function divInscription() {
	if (popupInscription.style.display == "block") {
		popupInscription.style.display = "none";
	}
	else {
		popupInscription.style.display = "block";
		popupConnexion.style.display = "none";
	}
}