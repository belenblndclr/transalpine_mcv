  <?php include_once("../view/template/vueHeaderAdmin.php"); ?>
  <html>
  <body class="adminpanelbody">  
  <div class="adminpanel">
	<section class="deco">
		<a href="../admin.php">Retour au panneau d'Administration<i class="icon-home-circled"></i></a>
	</section>
				
	<h1><?php echo $titre ?></h1>

      		<form enctype="multipart/form-data" method="post" action="addDoc.php" class="form-horizontal formDoc" role="form">
					
						<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">PDF :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
						<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
						<input name="pdf" type="file" />					
							<span class="info">Importer le PDF de la revue.</span>
						</fieldset>
						<fieldset>
						<label for="inputMail" class="col-sm-2 control-label">Date :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputMail" name="daterevue" placeholder="Date">
						<span class="info">Sous la forme "aaaa-mm-jj"</span> </fieldset>
					
						<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Référence :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputMail" name="reference" placeholder="Reference">
						<span class="info">Référence numérique de la revue dans la base de donnée.</span> </fieldset>
					
						<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Couverture :</label>
						<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
						<!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
						<input name="couvertureurl" type="file" />					
							<span class="info">Importer la couverture de la revue.</span>
						</fieldset>
					
						<fieldset>
						<label for="inputNom" class="col-sm-2 control-label">Titre :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputNom" name="titrerevue" placeholder="Titre">
						<span class="info">Titre principal de la revue.</span> </fieldset>
					
						<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Résumé :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="preview" placeholder="Résumé" rows="3"></textarea>
						<span class="info">Résumé de la revue, pouvant contenir jusqu'à 500 mots.</span> </fieldset>
						<fieldset>
						<label for="inputMessage" class="col-sm-2 control-label">Mot Clés :</label>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword1" placeholder="Mot clé 1">
						</div>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword2" placeholder="Mot clé 2">
						</div>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword3" placeholder="Mot clé 2">
						<span class="info">Les mots clés indique les 3 thèmes principaux de la revue. </span> </fieldset>
					
						<fieldset>
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Envoyer</button></fieldset>
				</form>
				
</body>