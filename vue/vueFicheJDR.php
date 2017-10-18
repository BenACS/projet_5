<div id="ficheJDR">
	<div id="infoPerso">
		<p class="inventaire_competences">Informations de base</p></br>
		<p>Nom du personnage : <?= htmlspecialchars($_POST['nom']) ?></br>
			Sexe : <?= htmlspecialchars($_POST['sexe']) ?></br>
			Race : <?= htmlspecialchars($_POST['race']) ?></br>
			Classe : <?= htmlspecialchars($_POST['classe']) ?></br>
			Métier : <?= htmlspecialchars($_POST['metier']) ?>
		</p>
	</div>
	<div id="statsPerso">
		<p class="inventaire_competences">Stats du personnage</p></br>
		Force : <?= htmlspecialchars($_POST['force']) ?></br>
		Dexterite : <?= htmlspecialchars($_POST['dexterite']) ?></br>
		Constitution : <?= htmlspecialchars($_POST['constitution']) ?></br>
		Intelligence : <?= htmlspecialchars($_POST['intelligence']) ?></br>
		Sagesse : <?= htmlspecialchars($_POST['sagesse']) ?></br>
		Charisme : <?= htmlspecialchars($_POST['charisme']) ?>
	</div>
	<p class="inventaire_competences">Equipement :</p></br>
	<?= htmlspecialchars($_POST['equipement']) ?>

	<p class="inventaire_competences">Objets :</p></br>
	<?= htmlspecialchars($_POST['objets']) ?>

	<p class="inventaire_competences">Compétences :</p></br>
	<?= htmlspecialchars($_POST['competences']) ?>

	<p class="inventaire_competences">Sorts :</p></br>
	<?= htmlspecialchars($_POST['sorts']) ?>
</div>