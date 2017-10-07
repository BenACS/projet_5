<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?= $titre ?></title>
       	<link rel="stylesheet" href="contenu/style.css">
	</head>
	<body>
		<?php include "menu.php"; ?>
		<div id="contenu">
			<?= $contenu ?>
		</div>
		<!-- A SUPPRIMER, TEST -->
		<?php include "vueFichePerso.php"; ?>
	</body>
</html>