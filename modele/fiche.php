<?php

class Fiche extends Modele {

	public function __construct() {

	}

	public function getFiches() {
		$sql = 'select id, nom, race, sexe, classe, pv, pm, metier, niveau'
				. ' from personnages'
				. ' where id_personnage = ?'
                . ' order by id desc';
        $fiches = $this->executerRequete($sql, array());
        return $fiches;
	}
}