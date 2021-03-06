<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
	include_once("model/BDD.php");
	include_once("model/Admin.php");
	
	$titre = "Archives Médiévales TransAlpines";
	$page = "admin"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "Archives Médiévales TransAlpines";
    $title = "Archives Médiévales TransAlpines";
	$keyword = "mot-clé 1, mot-clé 2, mot-clé 3";
    $author = "Lise Missillier";
	
    try {
		$admin = new Admin();
		
		$allD = $admin->getDocumentsA();
		$allR = $admin->getRevuesA();
		$allC = $admin->getContributionsA();
		$admin = "";
    	require_once("view/vueAdmin.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>