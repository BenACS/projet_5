<?php

abstract class Modele {

    private $bdd;

    /*  Exécute une requête SQL :
        @param string $sql correspond à la requête SQL
        @param array $valeurs correspond à des valeurs associées à la requête
        @return PDOStatement correspond au résultat renvoyé par la requête */
    protected function executerRequete($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql); // exécution directe
        }
        else {
            $resultat = $this->getBdd()->prepare($sql);  // requête préparée
            $resultat->execute($params);
        }
        return $resultat;
    }

    // Renvoie l'object $bdd (correspondant à la connexion à la BDD)
    private function getBdd() {
        if ($this->bdd == null) {
            // Création de la connexion
            $this->bdd = new PDO('mysql:host=localhost;dbname=projet_4;charset=utf8',
                    'root', '',
                    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}