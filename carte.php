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
		
		$ids = $map->getDoc();
		
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
				$typol = $_POST['typologie'];
			} else {
				$typol = "";
			}
						
			switch ($typol) {
				case "0" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "1" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
			}
			switch($region) {
				case "2" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "1" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "3" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "4" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
			}
		/*	switch($siecle) {
				case "2" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "1" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "3" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
				case "4" :
				$stations = $map->getDoc($region, $siecle, $typol);
				$stationsCount = $map->getCount($region, $siecle, $typol);
				break;
			}
			*/
		} else {
			$nb = 100;			
			$stations = $map->getSimple($nb);
			$stationsCount[0] = $nb;
		}
		$filename= "common/js/points.json";
		
		if (file_exists($filename)){
			unlink($filename);
		}else{
			echo "Merci de charger la page a nouveau.<br /> Si le problème persiste, contactez un administrateur.";
		
		}
		$id = $stationsCount[0]+1;
		$json = 'marker = [';
		while ($resultat = $stations->fetch(PDO::FETCH_OBJ)){
		
			$id--;
			$json .= "[";
			$json .= number_format($resultat->latitude, 5).",";
			$json .= number_format($resultat->longitude, 5).",";
			$json .= '"'.$resultat->IDDOC.'",';
			$json .= '"'.$resultat->IDREGION.'",';
			$json .= '"'.$resultat->SIECLE.'",';
			$json .= '"'.$resultat->DATE.'",';
			$json .= '"'.$resultat->TYPOLOGIE.'",';
			$json .= '"'.$resultat->DATE.'",';
			

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

