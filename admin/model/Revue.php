<?php
/*
 * Modele de classe PHP : Form.php
 * Classe de gestion des données du formulaire de contact
 */

class Revue extends BDD {
	function verifData($data){
		$data = strip_tags($data); // XSS

		$data = stripslashes($data); // quotes ' et "
		$data = addslashes($data);

		$data = str_replace("\'","'",$data);
		$data = str_replace('\"','"',$data);

		return $data;
	}
	
	function createR($urlpdf, $daterevue, $reference, $couvertureurl, $titrerevue, $preview, $keyword1, $keyword2, $keyword3){
		$bdd = parent::getBdd();
		
		$sql = parent::INSERTINTO('revue (URLPDF, DATEPUBLICATION, REFERENCE, COUV, TITRE, PREVIEW, KEYWORD1, KEYWORD2, KEYWORD3)');
		$sql .= parent::VALUES(':urlpdf, :daterevue, :reference, :couvertureurl, :titrerevue, :preview, :keyword1, :keyword2, :keyword3');

		$stmt = $bdd->prepare($sql);

		$stmt->bindParam(':urlpdf', $urlpdf);
		$stmt->bindParam(':daterevue', $daterevue);
		$stmt->bindParam(':reference', $reference);
		$stmt->bindParam(':couvertureurl', $couvertureurl);
		$stmt->bindParam(':titrerevue', $titrerevue);
		$stmt->bindParam(':preview', $preview);
		$stmt->bindParam(':keyword1', $keyword1);
		$stmt->bindParam(':keyword2', $keyword2);
		$stmt->bindParam(':keyword3', $keyword3);
		
		$stmt->execute();
		
	}
	
	
	function updateR() {
	
	}
	
	function deleteR() {
	
	}
	
}
$Revue = new Revue();
