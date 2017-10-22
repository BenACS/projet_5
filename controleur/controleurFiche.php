<?php

require_once 'modele/fiche.php';
require_once 'vue/vue.php';

class ControleurFiche {

	private $fiche;

    public function __construct() {
    	$this->fiche = new Fiche();
    }

	// Affiche la liste de toutes les fiches d'un utilisateur
    public function afficherListe($idU) {
    	$fiches = $this->fiche->recupFiches($idU);
        $vue = new Vue("ListeJDR");
        $vue->generer(array('fiches' => $fiches));
    }

    public function afficherFiche($idFiche, $idUt, $idU) {
        if ($idUt === $idU) {
            $donneesFiche = $this->fiche->recupFiche($idU, $idFiche);
            $vue = new Vue("ModifFichePerso");
            $vue->generer(array('fiche' => $donneesFiche));
        }
    }

    public function creerFiche($idU, $nom, $race, $sexe, $classe, $metier, $force, $dexterite, $constitution, 
                                $intelligence, $sagesse, $charisme, $equipement, $objets, $competences, $sorts) {

        $fiches = $this->fiche->ajouterFiche($idU, $nom, $race, $sexe, $classe, $metier, $force, $dexterite, $constitution, 
                                $intelligence, $sagesse, $charisme, $equipement, $objets, $competences, $sorts);
        $vue = new Vue("FicheJDR");
        $vue->generer(array());
    }

    public function supprimerFiche($idFiche) {
        $fiches = $this->fiche->supprFiche($idFiche);
    }

    public function modifierFiche($idFiche, $idUt, $idU) {
        if ($idUt === $idU) {
            $vue = new Vue("ModifFichePerso");
            $vue->generer(array());
        }
    }
}