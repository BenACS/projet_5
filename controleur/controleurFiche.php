<?php

require_once 'modele/fiche.php';
require_once 'vue/vue.php';

class ControleurFiche {

	private $fiche;

    public function __construct() {
    	$this->fiche = new Fiche();
    }

	// Affiche la liste de toutes les fiches d'un utilisateur
    public function afficherListe() {
    	$fiches = $this->fiche->getFiches();
        $vue = new Vue("ListeJDR");
        $vue->generer(array());
    }

    public function creerFiche() {

        $vue = new Vue("");
        $vue->generer(array());
    }
}