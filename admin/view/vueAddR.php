  <body>
        <h1 class="page-header"><?php echo $titre ?></h1>

        <h2 class="sub-header"><?php if (isset($message)){echo $message;} ?></h2>
          
        <form method="post" action="addRevue.php" class="form-horizontal formRevue" role="form">
				
					
					<div class="form-group">
						<label for="inputPrenom" class="col-sm-2 control-label">Pdf :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputPrenom" name="urlpdf" placeholder="Prenom">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMail" class="col-sm-2 control-label">Date :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputMail" name="daterevue" placeholder="Mail">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Ref :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputMail" name="reference" placeholder="Mail">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputSujet" class="col-sm-2 control-label">Couverture:						:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputSujet" name="couvertureurl" placeholder="Sujet">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputNom" class="col-sm-2 control-label">Titre :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputNom" name="titrerevue" placeholder="IdDoc">
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Preview :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="preview" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Mot Clés :</label>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword1" placeholder="Sujet">
						</div>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword2" placeholder="Sujet">
						</div>
						<div class="col-sm-9">							
							<input type="text" class="form-control" id="inputSujet" name="keyword3" placeholder="Sujet">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Envoyer</button>
						</div>
					</div>
				</form>
				
</body>