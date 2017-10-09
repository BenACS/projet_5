<?php

require_once 'modele.php';

class Utilisateur extends Modele {

	public function __construct() {

	}

	public function verifierUtilisateur($pseudo, $mdp) {
		$mdp_hashe = hash("sha256", $mdp);
		$utilisateur = "";

		// On compare les identifiants du formulaire à ceux présents dans le fichier
		if ($utilisateur === $identifiants) {
			return true;
		}
		else {
			return false;
		}
	}
}