<?php
/*
 * Modele de classe PHP : Form.php
 * Classe de gestion des données du formulaire de contact
 */

class Document extends BDD {
	function verifData($data){
		$data = strip_tags($data); // XSS

		$data = stripslashes($data); // quotes ' et "
		$data = addslashes($data);

		$data = str_replace("\'","'",$data);
		$data = str_replace('\"','"',$data);

		return $data;
	}
	
	function createD($iddoc, $region, $auteurd, $transcripteur, $date, $siecle, $typo, $image, $transcription, $lat, $long){
		$bdd = parent::getBdd();
		
		$sql = parent::INSERTINTO('document (IDDOC, IDREGION, IDAUTEUR, IDTRANSCRIPTEUR, DATE, SIECLE, TYPOLOGIE, IMAGE, TRANSCRIPTION, latitude, longitude)');
		$sql .= parent::VALUES(':iddoc, :region, :auteur, :transcripteur, :date, :siecle, :typo, :image, :transcription, :lat, :long');

		$stmt = $bdd->prepare($sql);

		$stmt->bindParam(':iddoc', $iddoc);
		$stmt->bindParam(':region', $region);
		$stmt->bindParam(':auteur', $auteurd);
		$stmt->bindParam(':transcripteur', $transcripteur);
		$stmt->bindParam(':date', $date);
		$stmt->bindParam(':siecle', $siecle);
		$stmt->bindParam(':typo', $typo);
		$stmt->bindParam(':image', $image);
		$stmt->bindParam(':transcription', $transcription);
		$stmt->bindParam(':lat', $lat);
		$stmt->bindParam(':long', $long);
		
		$stmt->execute();
		
	}
	
	
	function updateD() { //update function
		$bdd = parent::getBdd();
		
		$sql = parent::UPDATE('document');
		$sql .= parent::VALUES(':iddoc, :region, :auteur, :transcripteur, :date, :siecle, :typo, :image, :transcription, :lat, :long');

		$stmt = $bdd->prepare($sql);

		$stmt->bindParam(':iddoc', $iddoc);
		$stmt->bindParam(':region', $region);
		$stmt->bindParam(':auteur', $auteurd);
		$stmt->bindParam(':transcripteur', $transcripteur);
		$stmt->bindParam(':date', $date);
		$stmt->bindParam(':siecle', $siecle);
		$stmt->bindParam(':typo', $typo);
		$stmt->bindParam(':image', $image);
		$stmt->bindParam(':transcription', $transcription);
		$stmt->bindParam(':lat', $lat);
		$stmt->bindParam(':long', $long);
		
		$stmt->execute();
	
	}
	
	function deleteD($iddoc) { //Delete function
	}
	
}
$Document = new Document();
