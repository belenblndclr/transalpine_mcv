<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	include_once("../model/BDD.php");
	require_once("model/Revue.php");
	
	$titre = "Ajouter une revue";
	$page = "addR"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "";
	$keyword = "";
    $author = "";
    $title = "";
	
	
	
    try {
		if (isset($_POST) && isset($_POST['urlpdf']) && isset($_POST['daterevue']) && isset($_POST['reference']) &&  isset($_POST['couvertureurl']) && isset($_POST['titrerevue']) && isset($_POST['preview']) && isset($_POST['keyword1']) && isset($_POST['keyword2']) && isset($_POST['keyword3'])) {
			extract($_POST);
		
			if (!empty($titrerevue) && !empty($urlpdf) && !empty($daterevue) && !empty($reference) && !empty($couvertureurl) && !empty($preview) && !empty($keyword1)){
				
				$titrerevue = $Revue->verifData($titrerevue);
				$urlpdf = $Revue->verifData($urlpdf);
				$daterevue = $Revue->verifData($daterevue);
				$couvertureurl = $Revue->verifData($couvertureurl);
				$reference = $Revue->verifData($reference);
				$preview = $Revue->verifData($preview);
				$keyword1 = $Revue->verifData($keyword1);
				$keyword2 = $Revue->verifData($keyword2);
				$keyword3 = $Revue->verifData($keyword3);
				
				$data = new Revue(); // initialisation de la classe Formulaire
				$data->createR($urlpdf, $daterevue, $reference, $couvertureurl, $titrerevue, $preview, $keyword1, $keyword2, $keyword3);
				
				$message = "<p class='success'>Votre Revue à été ajouté avec succès</p> <p>Vous pouvez ajouter a nouveau un Revue ou revenir à la page de gestion des Revues en cliquant <a href='../admin.php'>ici</a>";
				require_once("view/vueAddR.php");
				
				
			} else {
				$message = "<p class='fail'>Else 1 Certains champs sont incorrect. Note: l'ID d'un Revue (IdDoc) doit être <b>unique</b> dans toute la base de donnée.</p>";
				require_once("view/vueAddR.php");
				
			}
		} else {
		
			$message = "Pour ajouter une revue, remplir le formulaire suivant";
			
			require_once("view/vueAddR.php");
			
		
		}
	}
		
    catch (Exception $e) {
		$message = "<p class='fail'>La carrément ça fait pas le try</p>";
		require_once("view/vueAddR.php");
        
    }
?>