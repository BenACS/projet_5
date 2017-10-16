<?php

require_once 'controleur/controleurAccueil.php';
require_once 'controleur/controleurUtilisateur.php';
require_once 'controleur/controleurFiche.php';
require_once 'vue/vue.php';

class Routeur {

    private $ctrlAccueil;
    private $ctrlUtilisateur;
    private $ctrlFiche;

    public function __construct() {
        $this->ctrlAccueil = new ControleurAccueil();
        $this->ctrlUtilisateur = new ControleurUtilisateur();
        $this->ctrlFiche = new ControleurFiche();
    }

    // Route une requête entrante : exécution l'action associée
    public function routerRequete() {
        try {
            if (isset($_GET['action'])) {
                switch($_GET['action']) {
                    
                    // Actions relatives aux fiches JDR
                    case 'nouvFiche':
                        $vue = new Vue("FichePerso");
                        $vue->generer(array());
                    break;

                    case 'listeFiches':
                        $this->ctrlFiche->afficherListe();
                    break;

                    case 'creerFiche':
                        $this->ctrlFiche->creerFiche();
                    break;

                    // Actions relatives aux utilisateurs
                    case 'inscription':
                        $pseudo = $this->getParametre($_POST, 'pseudo');
                        $mdp = $this->getParametre($_POST, 'mdp');
                        $confirmer_mdp = $this->getParametre($_POST, 'confirmer_mdp');
                        $this->ctrlUtilisateur->inscrire($pseudo, $mdp, $confirmer_mdp);
                    break;

                    case 'connexion':
                        $pseudo = $this->getParametre($_POST, 'pseudo');
                        $mdp = $this->getParametre($_POST, 'mdp');
                        $this->ctrlUtilisateur->connecter($pseudo, $mdp);
                    break;

                    case 'deconnexion':
                        $this->ctrlUtilisateur->deconnecter();
                    break;
                }
            }
            else {  // aucune action définie : affichage de l'accueil
                $this->ctrlAccueil->accueil();
            }
        }
        catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    // Affiche une erreur
    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

    // Recherche un paramètre dans un tableau
    private function getParametre($tableau, $nom) {
        if (isset($tableau[$nom])) {
            return $tableau[$nom];
        }
        else
            throw new Exception("Paramètre '$nom' absent");
    }
}