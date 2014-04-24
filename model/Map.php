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
		/
		while ($resultat = $datas->fetch()) {
            $billet[] = $resultat;
        }
		
        return $billet; // Acc�s au r�sultat
    }*/ //pour liste r�gion pas de trie avec �a
	
	
	function getSimple($nb=100) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`document`');
		$sql .= parent::LIMIT($nb);
		
		
        $datas = $bdd->query($sql);
		
        return $datas; // Acc�s au r�sultat
    }
	
	
	function getDoc($region ="", $siecle ="", $typol="", $id="") {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`document`');
		
		if (!empty($region)){
			$sql .= parent::WHERE('IDREGION = '.$region);	
		}
		
		if (!empty($siecle)){
			$sql .= parent::WHEREAND('SIECLE = '.$siecle);	
		} 
		
		if (!empty($typol)){
			$sql .= parent::WHEREAND('TYPOLOGIE = '.$typol);	
		} 
		
		if (!empty($id)){
			$sql .= parent::WHERE('IDDOC = '.$id);	
		} 
		/*if (!empty($auth)){
			$sql .= parent::WHERE('IDDOC = '.$auth);	
		} */
//echo $sql;
        $datas = $bdd->query($sql);
		
		return $datas; // Acc�s au r�sultat
    }
	
	function getId( ) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDDOC');
		$sql .= parent::FROM('`document`');
		$sql .= parent::ORDERBY('ASC');
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $billet[] = $resultat;
        }
		
        return $billet; // Acc�s au r�sultat
    }
	
	function getCount($region ="", $siecle ="", $typol="", $id="") {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('count(*)');
		$sql .= parent::FROM('`document`');
		
		if (!empty($region)){
			$sql .= parent::WHERE('IDREGION = '.$region);
		}		
		if (!empty($siecle)){
			$sql .= parent::WHERE('SIECLE = '.$siecle);
		}
			
		if (!empty($typol)){
			$sql .= parent::WHERE('TYPOLOGIE = '.$typol);
		}
		if (!empty($id)){
			$sql .= parent::WHERE('IDDOC = '.$id);
		}
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $count = $resultat;
        }
		
		return $count; // Acc�s au r�sultat
    }
}