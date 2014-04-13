<?php include_once("template/vueHeader.php"); ?>

<html>
  <body class="adminpanelbody">  
  <div class="adminpanel">
	<section class="deco">
		<a href="deconnection.php">Déconnexion <i class="icon-cancel-circled2"></i></a><br>
		<a href="../index.php">Accueil du site <i class="icon-home-circled"></i></a>
	</section>
				
	<h1>Administration du Site</h1>	
		
		<ul class="nav nav-tabs" style="margin-bottom:0;">
			<li class="active"><a href="#docs">Gestion des Documents</a></li>
			<li><a href="#revues">Gestion des Revues</a></li>
			<li><a href="#contributions">Gestions des Contributions</a></li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane active" id="docs">
				<p>
					Rechercher un Document <input id="filter" type="text"/>
					<a href="#clear" class="clear-filter" title="clear filter">[Remettre à zéro]</a>
				</p>
				<table class="table" data-filter="#filter" data-page-size="5">
					<thead>
					<tr>
						<th>ID</th>
						<th>Région</th>
						<th>Date</th>
						<th>Siècle</th>
						<th>Typologie</th>
						<th></th>
						<th></th>
					</tr>
					</thead>
					<tbody>
					
					<?php foreach ($allD as $admin): ?>	
					<tr>
						<td><?php echo $admin['IDDOC']; ?></td>
						<td><?php echo $admin['IDREGION']; ?></td>
						<td><?php echo $admin['DATE']; ?></td>
						<td><?php echo $admin['SIECLE']; ?></td>
						<td><?php echo $admin['TYPOLOGIE']; ?></td>
						<td><a class="icon-pencil-circled" href="edit.php?p=<?php echo $admin['IDDOC']; ?>"> </a></td>
						<td><a class="delete icon-cancel" href="delete.php?p<?php echo $admin['IDDOC']; ?>"></a></td>
					</tr>
					
					<?php endforeach; ?>
					</tbody>
					<tfoot class="hide-if-no-paging">
					<tr>
						<td colspan="5">
							<div class="pagination pagination-centered"></div>
						</td>
					</tr>
					</tfoot>
				</table>				
				<section class="gestion_nav">
					<a href="admin/add_article.php" target="_top">
						<i class="icon-location-circled"></i> Ajouter un 	Document
					</a>
					<a href="admin/SQLtoXML.php">
						<i class="icon-globe-alt"></i> Générer la carte
					</a>
				</section>
			</div>
			<div class="tab-pane" id="revues">
				<p>
					Rechercher une Revue <input id="filter2" type="text"/>
					<a href="#clear" class="clear-filter" title="clear filter">[Remettre à zéro]</a>
				</p>
				<table class="table" data-filter="#filter2" data-page-size="5">
				<thead>
					<tr>
					<th>ID</th>
					<th>Date de Publication</th>
					<th>Référence</th>
					<th>Couverture</th>
					<th>Titre</th>
					<th>Preview</th>
					<th>Mots clés</th>
					<th></th>
					<th></th>
					</tr>
                </tr>
                </thead>
                <tbody>
				
				<?php foreach ($allR as $admin): ?>	
				<tr>
					<td><?php echo $admin['IDREVUE']; ?></td>
					<td><?php echo $admin['DATEPUBLICATION']; ?></td>
					<td><?php echo $admin['REFERENCE']; ?></td>
					<td><img src="common/<?php echo $admin['COUV']; ?>" height="100px"/></td>
					<td><?php echo $admin['TITRE']; ?></td>
					<td><?php echo $admin['PREVIEW']; ?></td>
					<td><?php echo $admin['KEYWORD1']; ?></td>
					<td><a class="icon-pencil-circled" href="admin/editRevue.php?p=<?php echo $admin['IDREVUE']; ?>"> </a></td>
					<td><a class="delete icon-cancel" href="admin/deleteRevue.php?p<?php echo $admin['IDREVUE']; ?>"></a></td>
				</tr>
				
				<?php endforeach; ?>
					</tbody>
					<tfoot class="hide-if-no-paging">
					<tr>
						<td colspan="5">
							<div class="pagination pagination-centered"></div>
						</td>
					</tr>
					</tfoot>
				</table>
				
				<section class="gestion_nav">
					<a href="add_article.php" target="_top">
						<i class="icon-doc-new-circled"></i> Ajouter une Revue
					</a>
				</section>
			</div>
			<div class="tab-pane" id="contributions">
			   <p>
					Rechercher une Contribution <input id="filter3" type="text"/>
					<a href="#clear" class="clear-filter" title="clear filter">[Remettre à zéro]</a>
				</p>
				<table class="table" data-filter="#filter3" data-page-size="10">
					<thead>
						<tr>
							<th>ID</th>
								<th>Date de la Contribution</th>
								<th>Email de la Contribution</th>
								<th>Texte Contribué</th>
								<th>Description de la Contribution</th>
								<th></th>
								<th></th>
							</tr>
					</tr>
					</thead>
					<tbody>
					
						<?php foreach ($allC as $admin): ?>	
						<tr>
							<td><?php echo $admin['IDDOC']; ?></td>
							<td><?php echo $admin['DATECONTRI']; ?></td>
							<td><?php echo $admin['EMAILCONTRI']; ?></td>
							<td><?php echo $admin['TXTCONTRI']; ?></td>
							<td><?php echo $admin['DESCCONTRI']; ?></td>
							<td><a class="icon-pencil-circled" href="admin/validContri.php?p=<?php echo $admin['IDDOC']; ?>"> </a></td>
							<td><a class="delete icon-cancel" href="admin/refuserContri.php?p<?php echo $admin['IDDOC']; ?>"></a></td>
						</tr>
						
						<?php endforeach; ?>
					</tbody>
					<tfoot class="hide-if-no-paging">
					<tr>
						<td colspan="5">
							<div class="pagination pagination-centered"></div>
						</td>
					</tr>
					</tfoot>
				</table>
				
		</div>
	</div>
	
	<?php include_once("template/vueFooter.php"); ?>