<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Map extends BDD{
//__variable li� � la classe
	
//__Affiche l'ensemble des d�partements Fran�ais
//__l'ordre est fait selon les noms de d�partements
    /*function getRegion() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDREGION as id, NOMREGION as region');
		$sql .= parent::FROM('`region`');
		$sql .= parent::ORDERBY('`region`');
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $billet[] = $resultat;
        }
		
        return $billet; // Acc�s au r�sultat
    }*/ //pour liste r�gion pas de trie avec �a
	
	
	function getSimple($nb=100) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDDOC as id, IDREGION as region, SIECLE as siecle, TYPOLOGIE as typo, longitude as longitude, latitude as latitude');
		$sql .= parent::FROM('`document`');
		$sql .= parent::LIMIT($nb);
		
		
        $datas = $bdd->query($sql);
		
        return $datas; // Acc�s au r�sultat
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
		
		return $datas; // Acc�s au r�sultat
    }
	
	function getCount($region) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('count(*)');
		$sql .= parent::FROM('`document`');
			
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $count = $resultat;
        }
		
		return $count; // Acc�s au r�sultat
    }
}