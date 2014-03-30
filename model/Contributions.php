<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Contributions extends BDD{
//__variable lié à la classe
	
	function getContributions() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`contribution`');
		$sql .= parent::ORDERBY('`DATECONTRI`', 'ASC');
		
        $dataContri = $bdd->query($sql);
		
        return $dataContri; // Accès au résultat

    }
	
}

$Contributions = new Contributions();