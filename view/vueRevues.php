<?php include_once("template/vueHeader.php"); ?>

<html style="height: 100%;">
  <body style="height: 100%;">  
	<div class="menu menurevue" style="height: 100%; background-color: white; position: fixed;">
		<?php include_once("template/vueNavbar.php"); ?>
		<?php include_once("template/vueForm.php"); ?>

	</div>

	<section id="content" style="height: 100%;">
			<div class="page revuepage">
				<div class="section one">
				
				<div id="pagination"></div>
				
				<ul id="container">
				
				<?php foreach ($all as $revue): ?>	
				<li data-keyword="<?php echo $revue['KEYWORD1']; ?> <?php echo $revue['KEYWORD2']; ?> <?php echo $revue['KEYWORD3']; ?>" data-date="<?php echo $revue['DATEPUBLICATION']; ?>"> 
					<span class="couv">
						<img src="common/<?php echo $revue['COUV']; ?>" /> 
					</span>
					<span class="col1">
						<p><b>Date</b><br/> <?php echo $revue['DATEPUBLICATION']; ?></p>
						<p><b>Référence</b><br/>  <?php echo $revue['IDREVUE']; ?> <br/>
						</p>
						
						<p>
							<a href="<?php echo $revue['URLPDF']; ?>" class="icon-download-alt"></a>
						</p>
					</span>
					<span class="col2">
						<h1><?php echo $revue['TITRE']; ?> </h1>
						
						<p><?php echo $revue['PREVIEW']; ?> </p>
						<p>
							Keywords :<i><?php echo $revue['KEYWORD1']; ?>  - <?php echo $revue['KEYWORD2']; ?> - <?php echo $revue['KEYWORD3']; ?> </i>
						</p>
					</span>
				</li>
				<?php endforeach; ?>
				</ul>
			</div>
			</div>
			
		</div>
	</section>	
	<?php include_once("template/vueFooter.php"); ?>