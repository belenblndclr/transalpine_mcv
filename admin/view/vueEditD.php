  <body>

   <div class="container">
      
      <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 main">
          <h1 class="page-header"><?php echo $titre ?></h1>

          <h2 class="sub-header"></h2>
          
          <div class="form">
				<form method="post" action="editDoc.php" class="form-horizontal formContact" role="form">
				<?php if (isset($message)){	echo $message;	} ?>
					<div class="form-group">
						<label for="inputNom" class="col-sm-2 control-label">Id Document :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputNom" name="iddoc" placeholder="IdDoc">
						</div>
					</div>
					<div class="form-group">
						<label for="inputPrenom" class="col-sm-2 control-label">Région :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputPrenom" name="region" placeholder="Prenom">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMail" class="col-sm-2 control-label">Date :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputMail" name="date" placeholder="Mail">
						</div>
					</div>
					<div class="form-group">
						<label for="inputSujet" class="col-sm-2 control-label">Siècle :</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="inputSujet" name="siecle" placeholder="Sujet">
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Typologie :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="typo" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Image :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="image" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Transcription :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="transcription" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Lat :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="lat" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="inputMessage" class="col-sm-2 control-label">Long :</label>
						<div class="col-sm-9">
							<textarea class="form-control" name="long" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-default">Envoyer</button>
						</div>
					</div>
				</form>
			</div>
			
			<div class="clearfix"></div>
          
        </div>
      </div>
    </div>

    </div><!-- /.container -->