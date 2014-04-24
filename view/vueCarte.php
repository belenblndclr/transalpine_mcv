<?php include_once("template/vueHeader.php"); ?>

<html style="height: 100%;">
  <body style="height: 100%;">  
	<div class="menu" style="height: 100%;" role="navigation">
		<?php include_once("template/vueNavbar.php"); ?>
		
		<div class="form">
			<form method="post" id="form" role="form" action="carte.php">
				<fieldset class="region">
				<legend>Régions</legend>
					<input type="checkbox" name="region" value="1" id="1" checked /> <label for="1">Savoie</label>
					<input type="checkbox" name="region" value="2" id="2" checked /> <label for="2">Piemont</label>
					<input type="checkbox" name="region" value="3" id="3" checked /> <label for="3">Dauphiné</label>
					<input type="checkbox" name="region" value="4" id="4" checked /> <label for="4">Suisse</label>
				</fieldset>
				<fieldset>
				<legend>Siècles</legend>
					<!--<input type="text" id="siecle" name="rangeName" value="10;100"/>-->
					
					<input type="checkbox" name="8" id="8" /> <label for=	"8">IIX</label>
					<input type="checkbox" name="9" id="9" /> <label for=	"9">IX</label>
					<input type="checkbox" name="10" id="10" /> <label for=	"10">X</label>
					<input type="checkbox" name="11" id="11" /> <label for=	"11">XI</label>
					<input type="checkbox" name="12" id="12" /> <label for=	"12">XII</label>
					<input type="checkbox" name="13" id="13" /> <label for=	"13">XIII</label>
					<input type="checkbox" name="14" id="14" /> <label for=	"14">XIV</label>
					<input type="checkbox" name="14" id="14" /> <label for=	"15">XV</label>
				</fieldset>
				<!--<fieldset>
				<legend>Auteur</legend>					
					<input type="checkbox" name="uz" id="uz" /> <label for="uz">u-z</label>
					<input type="checkbox" name="qt" id="qt" /> <label for="qt">q-t</label>
					<input type="checkbox" name="mp" id="mp" /> <label for="mp">m-p</label>
					<input type="checkbox" name="il" id="il" /> <label for="il">i-l</label>
					<input type="checkbox" name="eh" id="eh" /> <label for="eh">e-h</label>
					<input type="checkbox" name="ad" id="ad" /> <label for="ad">a-d</label>
				</fieldset>-->
				<fieldset>
				<legend>Typologie</legend>
				
					<input type="checkbox" name="typologie" value="2" id="2" /> <label for="2">Autre</label>
					<input type="checkbox" name="typologie" value="3" id="3" /> <label for="3">Diplôme</label>
					<input type="checkbox" name="typologie" value="0" id="0"/> <label for="0">Comptabilité</label>
					<input type="checkbox" name="typologie" value="1" id="1" /> <label for="1">Chartres</label>
				</fieldset>
				<!--<fieldset>
					<legend>la Grande Histoire</legend>					
				</fieldset>-->
				<fieldset>					
					<select name="ref" size="1">
						<?php foreach ($ids as $id): ?>
						 <option value="<?php echo $id['IDDOC']; ?>"><?php echo $id['IDDOC']; ?></option>
						<?php endforeach; ?>
					</select>
				</fieldset>
				
				<button type="submit" class="btn btn-default" id="submit">Envoyer</button>
			</form>
		</div>
		
	</div>
	
	<div id="navarrow" style="position: fixed; bottom: 1em;">
		<button id="ferm"></button> <!--Ferme-->
		<button id="miouv"></button> <!--Mi Ouvert-->
		<button id="ouv"></button> <!--Ouvert-->
	</div>
	<section id="content" style="height: 100%;">
		<div id="map-canvas" style="height: 100%;"></div>
	</section>
	
	
<?php include_once("template/vueFooter.php"); ?>