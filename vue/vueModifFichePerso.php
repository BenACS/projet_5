<form id="formModifPerso" method="POST" action="index.php?action=creerFiche">
	<div id="statusPerso">
		<!-- Infos de base -->
		<div id="infos">
			<label for="nom">Nom du personnage :</label></br>
			<input type="text" name="nom" value="<?= htmlspecialchars($fiche['nom']) ?>"></br>

			<label for="race">Race :</label></br>
			<select name="race">
				<option value="humain">Humain</option>
				<option value="nain">Nain</option>
				<option value="orc">Orc</option>
				<option value="elfe">Elfe</option>
			</select></br>

			<label for="sexe">Sexe :</label></br>
			<select name="sexe">
				<option value="M">Homme</option>
				<option value="F">Femme</option>
			</select></br>

			<label for="classe">Classe :</label></br>
			<input type="text" name="classe" value="<?= htmlspecialchars($fiche['classe']) ?>"></br>
			
			<label for="metier">Métier :</label></br>
			<input type="text" name="metier" value="<?= htmlspecialchars($fiche['metier']) ?>"></br>

			<label for="niveau">Niveau :</label></br>
			<input type="text" name="niveau" value="<?= htmlspecialchars($fiche['niveau']) ?>"></br>

			<label for="experience">Experience :</label></br>
			<input type="text" name="experience" value="<?= htmlspecialchars($fiche['experience']) ?>">
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
	</div></br>

	<!-- Confirmer / Réinitialiser -->
	<div id="boutonsFiche">
		<input type="submit" value="Enregistrer les modifications">
		<input type="reset" value="Réinitialiser la fiche">
	</div>
</form>