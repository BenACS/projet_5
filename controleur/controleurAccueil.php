<?php

require_once 'vue/vue.php';

class ControleurAccueil {

    public function __construct() {
    }

	// Affiche la liste de tous les billets du blog
    public function accueil() {
        $vue = new Vue("Accueil");
        $vue->generer(array());
    }
}