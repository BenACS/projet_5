<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?= $titre ?></title>
       	<link rel="stylesheet" href="contenu/style.css">
	</head>
	<body>
		<?php
            if ($_SESSION['login']) {
                include "menuUtilisateur.php";
            } 
            else {
            	include "menu.php";
            	include "formConnexion.php";
            	include "formInscription.php";
            }
        ?>
		<div id="contenu">
			<?= $contenu ?>
		</div>
		<script src="vue/js/popups.js"></script>
	</body>
</html>