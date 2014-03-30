﻿<?php include_once("template/vueHeader.php"); ?>

<html style="height: 100%;">
  <body style="height: 100%;">  
	<div class="menu" style="height: 100%;" role="navigation">
		<?php include_once("template/vueNavbar.php"); ?>
		
		<div class="form">
			<form method="post" id="form" role="form" action="carte.php">
				<fieldset class="region">
				<legend>Régions</legend>
					<input type="checkbox" name="region" value="savoie" id="savoie" /> <label for=	"savoie">Savoie</label>
					<input type="checkbox" name="region" value="piemont" id="piemont" /> <label for="piemont">Piemont</label>
					<input type="checkbox" name="region" value="dauphine" id="dauphine" /> <label for="dauphine">Dauphiné</label>
					<input type="checkbox" name="region" value="suisse" id="suisse" /> <label for="suisse">Suisse</label>
				</fieldset>
				<fieldset>
				<legend>Siècles</legend>
					<input type="text" id="siecle" name="rangeName" value="10;100"/>
				</fieldset>
				<fieldset>
				<legend>Auteur</legend>					
					<input type="checkbox" name="uz" id="uz" /> <label for="uz">u-z</label>
					<input type="checkbox" name="qt" id="qt" /> <label for="qt">q-t</label>
					<input type="checkbox" name="mp" id="mp" /> <label for="mp">m-p</label>
					<input type="checkbox" name="il" id="il" /> <label for="il">i-l</label>
					<input type="checkbox" name="eh" id="eh" /> <label for="eh">e-h</label>
					<input type="checkbox" name="ad" id="ad" /> <label for="ad">a-d</label>
				</fieldset>
				<fieldset>
				<legend>Typologie</legend>
					<input type="checkbox" name="compta" id="compta" /> <label for="compta">Comptabilité</label>
					<input type="checkbox" name="chartre" id="chartre" /> <label for="chartre">Chartres</label>
				</fieldset>
				<fieldset>
					<legend>la Grande Histoire</legend>					
						
				</fieldset>
				<fieldset>
					
					<input type="submit" name="refvalue" value="Choisir une référence" />
					<input type="text" name="ref" id="ref" /> 
				</fieldset>
				<button type="submit" class="btn btn-default" id="submit">Envoyer</button>
			</form>
		</div>
	</div>
	<section id="content" style="height: 100%;">
		<div id="map-canvas" style="height: 100%;"></div>
	</section>
	
	
<?php include_once("template/vueFooter.php"); ?>