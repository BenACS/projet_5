<?php foreach ($fiches as $fiche): ?>
    <article>
        <header>
            <a href="<?= "index.php?action=fichet&id=" . $fiche['id'] ?>">
                <h2 class="titreBillet"><?= htmlspecialchars($fiche['titre']) ?></h2>
            </a>
            <p>posté le <?= htmlspecialchars($fiche['date']); ?></p>
        </header>
    </article>
    <hr />
<?php endforeach; ?>