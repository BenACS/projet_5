<form id="formModifPerso" method="POST" action="index.php?action=majFiche">
	<div id="statusPerso">
		<!-- Infos de base -->
		<div id="infos">
			<label for="nom">Nom du personnage :</label></br>
			<input type="text" name="nom" value="<?= htmlspecialchars($fiche['nom']) ?>"></br>

			<label for="race">Race :</label></br>
			<select name="race">
				<option value="humain" <?php if($fiche['race'] == 'human') { echo 'selected="selected"';} ?>>Humain</option>
				<option value="nain" <?php if ($fiche['race'] == 'nain') { echo 'selected="selected"';} ?>>Nain</option>
				<option value="orc" <?php if ($fiche['race'] == 'orc') { echo 'selected="selected"';} ?>>Orc</option>
				<option value="elfe" <?php if ($fiche['race'] == 'elfe') { echo 'selected="selected"';} ?>>Elfe</option>
			</select></br>

			<label for="sexe">Sexe :</label></br>
			<select name="sexe">
				<option value="M" <?php if ($fiche['sexe'] == 'M') { echo 'selected="selected"';} ?>>Homme</option>
				<option value="F" <?php if ($fiche['sexe'] == 'F') { echo 'selected="selected"';} ?>>Femme</option>
			</select></br>

			<label for="classe">Classe :</label></br>
			<input type="text" name="classe" value="<?= htmlspecialchars($fiche['classe']) ?>"></br>
			
			<label for="metier">Métier :</label></br>
			<input type="text" name="metier" value="<?= htmlspecialchars($fiche['metier']) ?>"></br>

			<label for="argent">Or :</label></br>
			<input type="number" name="argent" min="0" value="<?= htmlspecialchars($fiche['argent']) ?>"></br>

			<label for="niveau">Niveau :</label></br>
			<input type="number" name="niveau" min="1" value="<?= htmlspecialchars($fiche['niveau']) ?>"></br>

			<label for="experience">Expérience :</label></br>
			<input type="number" name="experience" min="0" value="<?= htmlspecialchars($fiche['experience']) ?>"></br></br>

			<label for="pv">Points de vie :</label>
			<input type="number" name="pv" min="0" value="<?= htmlspecialchars($fiche['pv']) ?>">

			<label for="pm">Points de magie :</label>
			<input type="number" name="pm" min="0" value="<?= htmlspecialchars($fiche['pm']) ?>">
		</div>

		<!-- Stats -->
		<div id="stats">
			<label for="force">Force</label>
			<input type="number" name="force" min="1" max="70" value="<?= htmlspecialchars($fiche['force']) ?>"></br>

			<label for="dexterite">Dexterite</label>
			<input type="number" name="dexterite" min="1" max="70" value="<?= htmlspecialchars($fiche['dexterite']) ?>"></br>

			<label for="constitution">Constitution</label>
			<input type="number" name="constitution" min="1" max="70" value="<?= htmlspecialchars($fiche['constitution']) ?>"></br>

			<label for="intelligence">Intelligence</label>
			<input type="number" name="intelligence" min="1" max="70" value="<?= htmlspecialchars($fiche['intelligence']) ?>"></br>

			<label for="sagesse">Sagesse</label>
			<input type="number" name="sagesse" min="1" max="70" value="<?= htmlspecialchars($fiche['sagesse']) ?>"></br>

			<label for="charisme">Charisme</label>
			<input type="number" name="charisme" min="1" max="70" value="<?= htmlspecialchars($fiche['charisme']) ?>">
		</div>
	</div>
	<div id="inventairePerso">
		<!-- Equipement & objets -->
		<div id="inventaire">
			<label for="equipement">Equipements :</label></br>
			<textarea name="equipement" placeholder="Armures, Armes, etc"><?= htmlspecialchars($fiche['equipement']) ?></textarea></br>

			<label for="objets">Objets :</label></br>
			<textarea name="objets"><?= htmlspecialchars($fiche['objets']) ?></textarea>
		</div>

		<!-- Compétences & sorts -->
		<div id="competences">
			<label for="competences">Compétences :</label></br>
			<textarea name="competences"><?= htmlspecialchars($fiche['competences']) ?></textarea></br>

			<label for="sorts">Sorts :</label></br>
			<textarea name="sorts"><?= htmlspecialchars($fiche['sorts']) ?></textarea>
		</div>
	</div>

	<!-- Confirmer / Réinitialiser -->
	<div id="boutonsFiche">
		<input type="hidden" name="idFiche" value="<?= htmlspecialchars($fiche['id']) ?>">
		<input type="hidden" name="idUt" value="<?= htmlspecialchars($fiche['id_utilisateur']) ?>">
		<input type="submit" value="Enregistrer les modifications">
		<input type="reset" value="Réinitialiser la fiche">
	</div>
</form>