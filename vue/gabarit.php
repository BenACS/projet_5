<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
        <title><?= $titre ?></title>
       	<link rel="stylesheet" href="contenu/style.css">
        <script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
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
                require "recaptcha.php";
            }
        ?>
		<div id="contenu">
			<?= $contenu ?>
		</div>
		<script src="vue/js/popups.js"></script>
	</body>
</html>