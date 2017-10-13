<?php

require_once 'modele.php';

class Utilisateur extends Modele {

	public function __construct() {

	}

	// Vérification du pseudo et mdp, fonction utilisée pour se connecter
	public function verifierIdentifiants($pseudo, $mdp) {
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

	// Inscription : ajout d'un utilisateur dans la BDD
	public function ajouterUtilisateur($pseudo, $mdp) {
		
		// Requête SQL afin de vérifier si le pseudo est disponible
		$sql = 'select pseudo from utilisateurs where pseudo = ?';
		$resultat = $this->executerRequete($sql, array($pseudo));

		if ($mdp != "" && $pseudo != "") {
			if ($resultat->rowCount() < 1) { // Si le pseudo est déjà présent dans la BDD, alors le nombre sera supérieur à 0
				$mdp_hashe = hash("sha256", $mdp);
				$sql = 'insert into utilisateurs(pseudo, mdp)'
						. 'values(?, ?)';
				$this->executerRequete($sql, array($pseudo, $mdp_hashe));
			}
			else
				throw new Exception("Ce pseudo est déjà utilisé par un autre membre.");
		}
		else
			throw new Exception("Vous devez indiquer un pseudo ainsi qu'un mot de passe !");
	}
}