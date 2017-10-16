<?php

require_once 'modele/utilisateur.php';
require_once 'Vue/Vue.php';

class ControleurUtilisateur {

	private $utilisateur;

	public function __construct() {
		$this->utilisateur = new Utilisateur();
	}

	public function inscrire($pseudo, $mdp, $confirmer_mdp) {
		if ($mdp != "" && $pseudo != "") {
			if ($mdp === $confirmer_mdp) {
				$this->utilisateur->ajouterUtilisateur($pseudo, $mdp);
			}
			else
				throw new Exception("Les mots de passe ne correspondent pas. Veuillez rééssayer.");
		}
		else
			throw new Exception("Vous devez indiquer un pseudo ainsi qu'un mot de passe !");
	}

	public function connecter($pseudo, $mdp) {
		// Si la fonction renvoie "true"
		if ($this->utilisateur->verifierIdentifiants($pseudo, $mdp)) {
			// On met la variable de session à "true"
			$_SESSION['login'] = true;

			$vue = new Vue("Accueil");
       		$vue->generer(array());
		}
		else 
			// Si la fonction ne renvoie pas "true", on affiche un message d'erreur
			throw new Exception("Pseudo ou Mot de passe incorrect.");
	}

	public function deconnecter() {
		// On met la variable de session à "false"
		$_SESSION['login'] = false;

		// On génère / affiche la vue d'accueil du blog
		$vue = new Vue("Accueil");
       	$vue->generer(array());
	}
}