  <?php include_once("../view/template/vueHeaderAdmin.php"); ?>
  <html>
  <body class="adminpanelbody">  
  <div class="adminpanel">
	<section class="deco">
		<a href="../admin.php">Retour au panneau d'Administration<i class="icon-home-circled"></i></a>
	</section>
				
	<h1><?php echo $titre ?></h1>

      		<form enctype="multipart/form-data" method="post" action="addDoc.php" class="form-horizontal formDoc" role="form">
				<?php if (isset($message)){	echo $message;	} ?>
					<fieldset>
						<label for="inputNom" class="col-sm-2 control-label">Id Document :</label>
							<input type="text" class="form-control" id="inputNom" name="iddoc" placeholder="IdDoc">
							<span class="info">Référence numérique du document dans la base de donnée.</span>
					</fieldset>
					<fieldset>
						<label for="inputPrenom" class="col-sm-2 control-label">Région :</label>
							<input type="text" class="form-control" id="inputPrenom" name="region" placeholder="Region">
							<span class="info">Savoie, Piemont, Suisse ou Dauphine</span>
					</fieldset>
					<fieldset>
						<label for="inputMail" class="col-sm-2 control-label">Auteur :</label>
							<input type="text" class="form-control" id="inputMail" name="auteurd" placeholder="Auteur">
						
							<span class="info">Nom de l'auteur du document. Si inconnu, écrire Inc.</span>
					</fieldset>
					<fieldset>
						<label for="inputMail" class="col-sm-2 control-label">Transcripteur :</label>
						
							<input type="text" class="form-control" id="inputMail" name="transcripteur" placeholder="Transcripteur">
						
							<span class="info">Nom du transcripteur du document. Si inconnu, écrire Inc.</span>
					</fieldset>
					<fieldset>
						<label for="inputMail" class="col-sm-2 control-label">Date :</label>
						
							<input type="text" class="form-control" id="inputMail" name="date" placeholder="Année">
						
							<span class="info">Préciser seulement l'année sous la forme "2014".</span>
					</fieldset>
					<fieldset>
						<label for="inputSujet" class="col-sm-2 control-label">Siècle :</label>
						
							<input type="text" class="form-control" id="inputSujet" name="siecle" placeholder="Siècle">
						
							<span class="info">Préciser seulement le siècle sous la form "20".</span>
					</fieldset>
					<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Typologie :</label>
						
							<input type="text" class="form-control" name="typo" placeholder="Typologie">
						
							<span class="info">3 typologies différentes: Chartres, Comptablité et Diplôme. Laisser vide si inconnu.</span>
					</fieldset>
					<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Image :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
						<input name="image" type="file" />					
							<span class="info">Importer la photo du document</span>
					</fieldset>
					<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Latitude :</label>
						
							<input type="text" class="form-control" name="lat" placeholder="Message"/>
					</fieldset>
					<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Longitude :</label>
						
							<input type="text" class="form-control" name="long" placeholder="Message"/>
					</fieldset>
					<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Transcription :</label>
						
							<textarea class="form-control" name="transcription" placeholder="Message" rows="5"></textarea>
						
							<span class="info">Copier/Coller ici la transcription du document</span>
					</fieldset>
					<fieldset>
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Envoyer</button>
						</div>
					</fieldset>
					
				</form>
			</div>
			</body>
			</html>