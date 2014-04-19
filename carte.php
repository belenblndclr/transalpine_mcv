<?php
/*
 * Contrôleur de carte
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
			
			if(!empty($siecle)) {
				$siecle = $_POST['siecle'];
			} else {
				$siecle = "";
			}
			if(!empty($region)) {
				$region = $_POST['region'];
			} else {
				$region = "";
			}
			
			if(!empty($typol)) {
				$typol = $_POST['typol'];
			} else {
				$typol = "";
			}
			echo $siecle;
			echo $region;
			echo $typol;
			
			switch ($typol) {
				case "chartre" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "test" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
			}
		} else {
			$nb = 100;			
			$stations = $map->getSimple($nb);
			$stationsCount[0] = $nb;
		}
		$filename= "common/js/points.json";
		
		if (file_exists($filename)){
			unlink($filename);
		}else{
			echo "le fichier json n'existe pas.<br />";
		
		}
		
		$id = $stationsCount[0]+1;
		$json = 'marker = [';
		while ($resultat = $stations->fetch(PDO::FETCH_OBJ)){
			$id--;
			$json .= "[";
			$json .= number_format($resultat->latitude, 5).",";
			$json .= number_format($resultat->longitude, 5).",";
			$json .= '"'.$resultat->id.'",';
			$json .= '"'.$resultat->region.'",';
			$json .= '"'.$resultat->siecle.'",';
			$json .= '"'.$resultat->typol.'",';

			if ("1" == $id){
				$json .= '"'.$id.'"]';
			}else if ("1" != $id){
				$json .= '"'.$id.'"],';
			}
		} //fin de la boucle while
		$json .= '];';
		file_put_contents($filename,utf8_encode($json));
		chmod($filename, 0777);
		
    	require_once("view/vueCarte.php");
       
    } catch (Exception $e) {
        $msgErreur = $e->getMessage();
		
		echo $msgErreur;
        require_once("view/vueErreur.php");
    }
?>

