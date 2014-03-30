<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Map extends BDD{
//__variable li� � la classe
	
//__Affiche l'ensemble des d�partements Fran�ais
//__l'ordre est fait selon les noms de d�partements
    function getRegion() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('IDREGION as id, NOMREGION as region');
		$sql .= parent::FROM('`region`');
		$sql .= parent::ORDERBY('`region`');
		
        $datas = $bdd->query($sql);
		
		while ($resultat = $datas->fetch()) {
            $billet[] = $resultat;
        }
		
        return $billet; // Acc�s au r�sultat
    }
	
	 function getSimple( $limit = 5 ) {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('`IDDOC` AS id, `SIECLE` , `TYPOLOGIE` AS typo, `longitude` AS longitude, `latitude` AS latitude');
		$sql .= parent::FROM('`document`');
		$sql .= parent::ORDERBY('`SIECLE`', 'DESC');
		$sql .= parent::LIMIT( $limit );
		
        $datas = $bdd->query($sql);
		
        return $datas; // Acc�s au r�sultat
    }
	
}