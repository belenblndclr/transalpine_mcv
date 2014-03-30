<header>
	<nav>
	  <ul>
		<li class="compte<?php echo ($page == "moderation") ? ' in' : ''; ?>"><a href="moderation.php">Contributions</a></li>
		<li class="accueil<?php echo ($page == "accueil") ? ' in' : ''; ?>"><a href="index.php">Accueil</a></li>
		<li class="revues<?php echo ($page == "revues") ? ' in' : ''; ?>"><a href="revues.php">Revues</a></li>
		<li class="aPropos<?php echo ($page == "apropos") ? ' in' : ''; ?>"><a href="apropos.php">A propos</a></li>
		<li class="aide<?php echo ($page == "aide") ? ' in' : ''; ?>"><a href="aide.php">Aide</a></li>
	  </ul>   
	</nav>
	<div id="logo">
		<img src="common/img/logo.png" style="float: left;"/>
	</div>
</header>


<!-- php echo ($page == "index") ? 'class="active"' : '';  -->