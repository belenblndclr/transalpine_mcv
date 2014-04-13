<?php include_once("template/vueHeader.php"); ?>

<html style="height: 100%;">
  <body style="height: 100%;">  
	<div class="menu menumoderation" style="height: 100%; background-color: white; position: fixed;">
		<?php include_once("template/vueNavbar.php"); ?>
		<?php include_once("template/vueForm.php"); ?>
	</div>

	<section id="content" style="height: 100%;">
			<div class="page moderationpage">
				<div class="section on">
				
			 <table class="table" data-filter="#filter4" data-page-size="10">
                <thead>
                <tr>
					<th>Référence contribution</th>
					<th>Date contribution</th>
					<th>Email contributeur</th>
					<th>Description contribution</th>
					<th>Référence document</th>
					<th>Statut</th>
                </tr>
                </thead>
                <tbody>
				
				<?php foreach ($all as $contribution): ?>	
				<tr>
					<td><?php echo $contribution['IDDOC']; ?></td>
					<td><?php echo $contribution['DATECONTRI']; ?></td>
					<td><?php echo $contribution['EMAILCONTRI']; ?></td>
					<td><?php echo $contribution['DESCCONTRI']; ?></td>
					<td><?php echo $contribution['IDDOC']; ?></td>
					<td><?php echo $contribution['STATUTCONTRI']; ?></td>
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
				
				<div class="section two">
					<p>Navigation Secondaire</p>
				</div>
			</div>
			
		</div>
	</section>
	
	<?php include_once("template/vueFooter.php"); ?>