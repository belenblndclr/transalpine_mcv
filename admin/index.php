<?php

	include_once("../model/BDD.php");
	
	$titre = "Archives Médiévales TransAlpines";
	$page = "admin"; //__variable pour la classe "active" du menu-header
	
//__variables pour les balises méta
	$description = "Archives Médiévales TransAlpines";
    $title = "Archives Médiévales TransAlpines";
	$keyword = "mot-clé 1, mot-clé 2, mot-clé 3";
    $author = "Lise Missillier";
	
    try {
		
		session_start();
		if(!empty($_SESSION['admin'])){
		 header('Location: admin.php');
		}
		if(!empty($_POST)){
		 extract($_POST);
		 $valid=true;
		 
		 if(empty($login)){
			$valid=false;
			$erreurlogin = 'Vous devez indiquer votre login';
		 }
		 
		 if(empty($pass)){
			$valid=false;
			$erreurpass = 'Vous devez indiquer un mot de passe';
		 }

		
	 
	}
	require_once("view/vueConnexion.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
        require_once("../view/vueErreur.php");
    }
?>