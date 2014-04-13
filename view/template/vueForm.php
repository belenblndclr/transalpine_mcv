<div class="form">
	<?php if($page == "revues"): ?>		
			<p>Revues affichées par ordre Chronologique, du plus récent au plus ancien</p>
		<?php endif; ?>
	
	<?php if($page == "moderation"): ?>

		<p>
                Pour retrouver votre contribution, recherchez l'adresse E-Mail associée <input id="filter4" type="text"/>
                <a href="#clear" class="clear-filter" title="clear filter">[Remettre à zéro]</a>
        </p>
		
		<p class="statut"> 
			Statut des contributions:<br/> <span class="att">En attente de modération</span> </br> <span class="maj">Contribution approuvée</span> </br> <span class="ref">Contribution refusée</span>
		</p>

	<?php endif; ?>
		</div>