<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Contributions extends BDD{
//__variable li� � la classe
	
	function getContributions() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`contribution`');
		$sql .= parent::ORDERBY('`DATECONTRI`', 'ASC');
		
        $dataContri = $bdd->query($sql);
		
        return $dataContri; // Acc�s au r�sultat

    }
	
}

$Contributions = new Contributions();