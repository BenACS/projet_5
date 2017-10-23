<?php

// grab recaptcha library
require_once "recaptchalib.php";

session_start();
if (!isset ($_SESSION['login'])) {
	$_SESSION['login'] = false;
}

require 'Controleur/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();