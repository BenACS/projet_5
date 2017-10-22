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
                        if (isset($_SESSION['id_utilisateur'])) {
                            $idU = $_SESSION['id_utilisateur'];
                            $this->ctrlFiche->afficherListe($idU);
                        }
                        else {
                            $this->ctrlAccueil->accueil();
                        }
                    break;

                    case 'creerFiche':
                        $nom = $this->getParametre($_POST, 'nom');
                        $race = $this->getParametre($_POST, 'race');
                        $sexe = $this->getParametre($_POST, 'sexe');
                        $classe = $this->getParametre($_POST, 'classe');
                        $metier = $this->getParametre($_POST, 'metier');
                        $force = $this->getParametre($_POST, 'force');
                        $dexterite = $this->getParametre($_POST, 'dexterite');
                        $constitution = $this->getParametre($_POST, 'constitution');
                        $intelligence = $this->getParametre($_POST, 'intelligence');
                        $sagesse = $this->getParametre($_POST, 'sagesse');
                        $charisme = $this->getParametre($_POST, 'charisme');
                        $equipement = $this->getParametre($_POST, 'equipement');
                        $objets = $this->getParametre($_POST, 'objets');
                        $competences = $this->getParametre($_POST, 'competences');
                        $sorts = $this->getParametre($_POST, 'sorts');

                        if (isset($_SESSION['id_utilisateur'])) { // Si l'utilisatzeur est connecté
                            $idU = $_SESSION['id_utilisateur'];
                            $this->ctrlFiche->creerFiche($idU, $nom, $race, $sexe, $classe, $metier, $force, $dexterite, $constitution, 
                                    $intelligence, $sagesse, $charisme, $equipement, $objets, $competences, $sorts);
                        }
                        else { // Si l'utilisateur n'est pas connecté
                            $vue = new Vue("FicheJDR");
                            $vue->generer(array());
                        }
                    break;

                    case 'modifFiche':
                        if (isset($_SESSION['id_utilisateur'])) {
                            $idFiche = $this->getParametre($_GET, 'idFiche');
                            $idUt = $this->getParametre($_GET, 'idUt');
                            $idU = $_SESSION['id_utilisateur'];
                            $this->ctrlFiche->afficherFiche($idFiche, $idUt, $idU);
                        }
                        else {
                            $this->ctrlAccueil->accueil();
                        }
                    break;

                    case 'supprFiche':
                        if (isset($_SESSION['id_utilisateur'])) {
                            $idFiche = $this->getParametre($_GET, 'idFiche');
                            $this->ctrlFiche->supprimerFiche($idFiche);

                            $idU = $_SESSION['id_utilisateur'];
                            $this->ctrlFiche->afficherListe($idU);
                        }
                        else {
                            $this->ctrlAccueil->accueil();
                        }
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