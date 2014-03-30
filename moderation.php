<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
	include_once("model/BDD.php");
	include_once("model/Contributions.php");
	
	$titre = "Archives Médiévales TransAlpines";
	$page = "moderation"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "Archives Médiévales TransAlpines";
    $title = "Archives Médiévales TransAlpines";
	$keyword = "mot-clé 1, mot-clé 2, mot-clé 3";
    $author = "Lise Missillier";
	
    try {
		$contributions = new Contributions();
		
		$all = $contributions->getContributions();
		$contribution = "";
		
    	require_once("view/vueModeration.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>