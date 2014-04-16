<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	include_once("../model/BDD.php");
	require_once("model/Document.php");
	
	$titre = "Ajout";
	$page = "ajout"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "";
	$keyword = "";
    $author = "";
    $title = "";
	
	
	
    try {
		if (isset($_POST) && isset($_POST['iddoc']) && isset($_POST['region']) && isset($_POST['date']) && isset($_POST['siecle']) && isset($_POST['typo']) && isset($_POST['image']) && isset($_POST['transcription']) && isset($_POST['lat']) && isset($_POST['long'])){
			extract($_POST);
		
			if (!empty($iddoc) && !empty($region) && !empty($date) && !empty($siecle) && !empty($typo) && !empty($image) && !empty($transcription) && !empty($lat) && !empty($long)){
				$iddoc = $Document->verifData($iddoc);
				$region = $Document->verifData($region);
				$date = $Document->verifData($date);
				$siecle = $Document->verifData($siecle);
				$typo = $Document->verifData($typo);
				$image = $Document->verifData($image);
				$transcription = $Document->verifData($transcription);
				$lat = $Document->verifData($lat);
				$long = $Document->verifData($long);
				
				$data = new Document(); // initialisation de la classe Formulaire
				$data->createD($iddoc, $region, $date, $siecle, $typo, $image, $transcription, $lat, $long);
				
				$message = "<p class='success'>Votre document à été ajouté avec succès</p> <p>Vous pouvez ajouter a nouveau un document ou revenir à la page de gestion des documents en cliquant <a href='../admin.php'>ici</a>";
				require_once("view/vueAddD.php");
				
				
			} else {
				$message = "<p class='fail'>Certains champs sont incorrect. Note: l'ID d'un document (IdDoc) doit être <b>unique</b> dans toute la base de donnée.</p>";
				require_once("view/vueAddD.php");
				
			}
		} else {
		
			$message = "<p class='fail'>Un nombre trop importants d'erreurs a été détecté, merci de revoir votre formulaire</p>";
			require_once("view/vueAddD.php");
			
		}
		
    } catch (Exception $e) {
		$message = "<p class='fail'>Tout ne vas plus, faites vos jeux.</p>";
		require_once("view/vueAddD.php");
        
    }
?>