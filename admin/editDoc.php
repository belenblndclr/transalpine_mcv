<?php
/*
 * Contrôleur de notre page d'accueil
 * gère la dynamique de l'application. Elle fait le lien entre l'utilisateur et le reste de l'application
 */
	include_once("../model/BDD.php");
	require_once("model/Edit.php");
	
	$titre = "Edition de document";
	$page = "edit"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "";
	$keyword = "";
    $author = "";
    $title = "";
	
//__Nom et mail du propriétaire du formulaire
	$monNom = "Guillaume RICHARD";
	$destinataire = "g.jf.richard@gmail.com";
	
	
    try {
		if (isset($_POST) && isset($_POST['iddoc']) && isset($_POST['region']) && isset($_POST['date']) && isset($_POST['siecle']) && isset($_POST['typo']) && isset($_POST['image']) && isset($_POST['transcription']) && isset($_POST['lat']) && isset($_POST['long'])){
			extract($_POST);
		
			if (!empty($iddoc) && !empty($region) && !empty($date) && !empty($siecle) && !empty($typo) && !empty($image) && !empty($transcription) && !empty($lat) && !empty($long)){
				$iddoc = $Edit->verifData($iddoc);
				$region = $Edit->verifData($region);
				$date = $Edit->verifData($date);
				$siecle = $Edit->verifData($siecle);
				$typo = $Edit->verifData($typo);
				$image = $Edit->verifData($image);
				$transcription = $Edit->verifData($transcription);
				$lat = $Edit->verifData($lat);
				$long = $Edit->verifData($long);
				
				$data = new Edit(); // initialisation de la classe Formulaire
				$data->createD($iddoc, $region, $date, $siecle, $typo, $image, $transcription, $lat, $long);
				
				$message = "<p class='success'>Message envoyé</p>";
				
			} else {
				$message = "<p class='fail'>Message non envoyé</p>";
				
			}
		} else {
			require_once("view/vueEditD.php");
		}
		
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        
    }
?>