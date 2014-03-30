<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Revues extends BDD{
//__variable li� � la classe
	
	function getRevue() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`revue`');
		$sql .= parent::ORDERBY('`DATEPUBLICATION`', 'ASC');
		
        $dataRevues = $bdd->query($sql);
		
        return $dataRevues; // Acc�s au r�sultat

    }
	
}

$Revues = new Revues();