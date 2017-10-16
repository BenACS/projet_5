<div id="conteneurFiches">
<?php foreach ($fiches as $fiche): ?>
    <article>
        <p>Nom : <?= htmlspecialchars($fiche['nom']) ?></br>
         Sexe : <?= htmlspecialchars($fiche['sexe']) ?></br>
         Race : <?= htmlspecialchars($fiche['race']) ?></br>

        Classe : <?= htmlspecialchars($fiche['classe']) ?></br>
         Métier : <?= htmlspecialchars($fiche['metier']) ?></br>
         Niveau : <?= htmlspecialchars($fiche['niveau']) ?></br>
         Or : <?= htmlspecialchars($fiche['argent']) ?>
        </p></br>
        <button onclick="index.php?action=creerFiche">Afficher la fiche de ce personnage</button>
    </article>
<?php endforeach; ?>
</div>