<div id="ficheJDR">
	<div id="info_stats">
		<div id="infoPerso">
			<p class="inventaire_competences">Informations de base</p></br>
			<p>Nom du personnage : <?= htmlspecialchars($fiche['nom']) ?></br>
				Sexe : <?= htmlspecialchars($fiche['sexe']) ?></br>
				Race : <?= htmlspecialchars($fiche['race']) ?></br>
				Classe : <?= htmlspecialchars($fiche['classe']) ?></br>
				Métier : <?= htmlspecialchars($fiche['metier']) ?></br>
				Or : <?= htmlspecialchars($fiche['argent']) ?></br>
				Niveau : <?= htmlspecialchars($fiche['niveau']) ?></br>
				Expérience : <?= htmlspecialchars($fiche['experience']) ?></br></br>
				Points de vie : <?= htmlspecialchars($fiche['pv']) ?></br>
				Points de magie : <?= htmlspecialchars($fiche['pm']) ?>
			</p>
		</div>
		<div id="statsPerso">
			<p class="inventaire_competences">Stats du personnage</p></br>
			Force : <?= htmlspecialchars($fiche['force']) ?></br>
			Dexterite : <?= htmlspecialchars($fiche['dexterite']) ?></br>
			Constitution : <?= htmlspecialchars($fiche['constitution']) ?></br>
			Intelligence : <?= htmlspecialchars($fiche['intelligence']) ?></br>
			Sagesse : <?= htmlspecialchars($fiche['sagesse']) ?></br>
			Charisme : <?= htmlspecialchars($fiche['charisme']) ?>
		</div>
	</div>
	<div id="info_inv">
		<p class="inventaire_competences">Equipement :</p></br>
		<?= htmlspecialchars($fiche['equipement']) ?>

		<p class="inventaire_competences">Objets :</p></br>
		<?= htmlspecialchars($fiche['objets']) ?>

		<p class="inventaire_competences">Compétences :</p></br>
		<?= htmlspecialchars($fiche['competences']) ?>

		<p class="inventaire_competences">Sorts :</p></br>
		<?= htmlspecialchars($fiche['sorts']) ?>
	</div>
	<form method="POST" action="index.php?action=genererPDF">
		<input type="hidden" name="idFiche" value="<?= $fiche['id'] ?>">
		<input type="submit" value="Generer la version imprimable">
	</form>
</div>