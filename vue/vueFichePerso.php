<form id="formCreationPerso" method="POST">
	<div id="statusPerso">
		<!-- Infos de base -->
		<div id="infos">
			<label for="nom">Nom du personnage :</label></br>
			<input type="text" name="nom"></br>

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
			<input type="text" name="classe"></br>
			
			<label for="metier">Métier :</label></br>
			<input type="text" name="metier">
		</div>

		<!-- Stats -->
		<div id="stats">
			<label for="force">Force</label>
			<input type="number" name="" min="1" max="70"></br>

			<label for="dexterite">Dexterite</label>
			<input type="number" name="" min="1" max="70"></br>

			<label for="constitution">Constitution</label>
			<input type="number" name="" min="1" max="70"></br>

			<label for="intelligence">Intelligence</label>
			<input type="number" name="" min="1" max="70"></br>

			<label for="sagesse">Sagesse</label>
			<input type="number" name="" min="1" max="70"></br>

			<label for="charisme">Charisme</label>
			<input type="number" name="" min="1" max="70">
		</div>
	</div>
	<div id="inventairePerso">
		<!-- Equipement & objets -->
		<div id="inventaire">
			<label for="equipement">Equipements :</label></br>
			<textarea name="equipement" placeholder="Armures, Armes, etc"></textarea></br>

			<label for="objets">Objets :</label></br>
			<textarea name="objects"></textarea>
		</div>

		<!-- Compétences & sorts -->
		<div id="competences">
			<label for="competences">Compétences :</label></br>
			<textarea name="competences"></textarea></br>

			<label for="sorts">Sorts :</label></br>
			<textarea name="sorts"></textarea>
		</div>
	</div></br>

	<!-- Confirmer / Réinitialiser -->
	<div id="boutonsFiche">
		<input type="submit" value="Créer ce personnage">
		<input type="reset" value="Réinitialiser la fiche">
	</div>
</form>