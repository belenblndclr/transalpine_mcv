
	<?php if($page == "revues"): ?>
	<div class="form">
		<p>Filtrer les Revues par:</p>
		<div id="placeHolder"></div>
	</div>
	<?php endif; ?>
	
	<?php if($page == "moderation"): ?>
	<div class="form">
		<p>
                Pour retrouver votre contribution, recherchez l'adresse E-Mail associée <input id="filter4" type="text"/>
                <a href="#clear" class="clear-filter" title="clear filter">[Remettre à zéro]</a>
        </p>
		
		<p class="statut"> 
			Statut des contributions:<br/> <span class="att">En attente de modération</span> </br> <span class="maj">Contribution approuvée</span> </br> <span class="ref">Contribution refusée</span>
		</p>
	</div>
	<?php endif; ?>