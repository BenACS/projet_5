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

				$utilisateur = $this->utilisateur->recupID($pseudo, $mdp);
				$_SESSION['login'] = true;
				$_SESSION['id_utilisateur'] = $utilisateur[0];
				$vue = new Vue("Accueil");
       			$vue->generer(array('utilisateur' => $utilisateur));
			}
			else
				throw new Exception("Les mots de passe ne correspondent pas. Veuillez rééssayer.");
		}
		else
			throw new Exception("Vous devez indiquer un pseudo ainsi qu'un mot de passe !");
	}

	public function connecter($pseudo, $mdp) {

		$utilisateur = $this->utilisateur->recupID($pseudo, $mdp);

		// Si la fonction renvoie "true"
		if ($this->utilisateur->recupID($pseudo, $mdp)) {

			$_SESSION['login'] = true; // On met la variable de session à "true"
			$_SESSION['id_utilisateur'] = $utilisateur[0]; // On met l'ID de l'utilisateur dans une variable de session

			$vue = new Vue("Accueil");
       		$vue->generer(array('utilisateur' => $utilisateur));
		}
		else 
			// Si la fonction ne renvoie pas "true", on affiche un message d'erreur
			throw new Exception("Pseudo ou Mot de passe incorrect.");
	}

	public function deconnecter() {
		$_SESSION['login'] = false; // On met la variable de session à "false"
		unset($_SESSION['id_utilisateur']); // On supprimer la variable de session contenant l'ID de l'utilisateur

		// On génère / affiche la vue d'accueil du blog
		$vue = new Vue("Accueil");
       	$vue->generer(array());
	}
}