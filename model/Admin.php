<?php
/*
 * Modele de classe PHP : Map.php
 * Classe d'affichage des markers sur une Google Maps
 */

class Admin extends BDD{
//__variable li� � la classe

	
	
	function getContributionsA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`contribution`');
		$sql .= parent::ORDERBY('`DATECONTRI`', 'ASC');
		
        $dataContri = $bdd->query($sql);
		
        return $dataContri; // Acc�s au r�sultat

    }
	
	
	function getRevuesA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`revue`');
		$sql .= parent::ORDERBY('`DATEPUBLICATION`', 'ASC');
		
        $dataRev = $bdd->query($sql);
		
        return $dataRev; // Acc�s au r�sultat

    }
	
	
	function getDocumentsA() {
        $bdd = parent::getBdd();
		
		$sql = parent::SELECT('*');
		$sql .= parent::FROM('`document`');
		$sql .= parent::ORDERBY('`IDDOC`', 'ASC');
		
        $dataDocu = $bdd->query($sql);
		
        return $dataDocu; // Acc�s au r�sultat

    }
	
}

$admin = new Admin();