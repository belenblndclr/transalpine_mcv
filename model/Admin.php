<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Admin extends BDD{
//__variable lié à la classe

	
	
	function getContributionsA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`contribution`');
		$sql .= parent::ORDERBY('`DATECONTRI`', 'ASC');
		
        $dataContri = $bdd->query($sql);
		
        return $dataContri; // Accès au résultat

    }
	
	
	function getRevuesA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`revue`');
		$sql .= parent::ORDERBY('`DATEPUBLICATION`', 'ASC');
		
        $dataRev = $bdd->query($sql);
		
        return $dataRev; // Accès au résultat

    }
	
	
	function getDocumentsA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`document`');
		$sql .= parent::ORDERBY('`IDDOC`', 'ASC');
		
        $dataDocu = $bdd->query($sql);
		
        return $dataDocu; // Accès au résultat

    }
	
}

$admin = new Admin();