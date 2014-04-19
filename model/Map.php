<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Map extends BDD{
//__variable lié à la classe
	
//__Affiche l'ensemble des départements Français
//__l'ordre est fait selon les noms de départements
    /*function getRegion() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDREGION as id, NOMREGION as region');
		$sql .= parent::FROM('`region`');
		$sql .= parent::ORDERBY('`region`');
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $billet[] = $resultat;
        }
		
        return $billet; // Accès au résultat
    }*/ //pour liste région pas de trie avec ça
	
	
	function getSimple($nb=100) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDDOC as id, IDREGION as region, SIECLE as siecle, TYPOLOGIE as typo, longitude as longitude, latitude as latitude');
		$sql .= parent::FROM('`document`');
		$sql .= parent::LIMIT($nb);
		
		
        $datas = $bdd->query($sql);
		
        return $datas; // Accès au résultat
    }
	
	
	function getDoc( $region ="", $siecle ="", $typol="") {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDDOC as id, IDREGION as region, SIECLE as siecle, TYPOLOGIE as typo, longitude as longitude, latitude as latitude');
		$sql .= parent::FROM('`document`');
		
		if (!empty($region)){
			$sql .= parent::WHEREAND('region ='.$region);	
		}
		
		if (!empty($siecle)){
			$sql .= parent::WHEREAND('siecle ='.$siecle);	
		} 
		
		if (!empty($typo)){
			$sql .= parent::WHEREAND('typo ='.$typol);	
		} 
		
        $datas = $bdd->query($sql);
		
		return $datas; // Accès au résultat
    }
	
	function getCount($region) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('count(*)');
		$sql .= parent::FROM('`document`');
			
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $count = $resultat;
        }
		
		return $count; // Accès au résultat
    }
}