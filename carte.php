<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	
	include_once("model/BDD.php");	
	include_once("model/Map.php");
	
	$titre = "Archives Médiévales TransAlpines";
	$page = "carte"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "Archives Médiévales TransAlpines";
    $title = "Archives Médiévales TransAlpines";
	$keyword = "mot-clé 1, mot-clé 2, mot-clé 3";
    $author = "Lise Missillier";
	
    try {
    	$map=new Map();
				
		if(!empty($_POST)){	
			extract($_POST);
			
			if(!empty($region)) {
				$region = $_POST['region'];
			} else {
				$region = "";
			}
			
		} else {
			$nbVille = 10;
			$stations = $map->getSimple($nbVille);
       		$stationsCount[0] = $nbVille;
		}
		
		
		
		
    	require_once("view/vueCarte.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("view/vueErreur.php");
    }
?>

