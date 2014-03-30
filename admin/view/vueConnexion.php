<?php include_once("../view/template/vueHeaderAdmin.php"); ?>

<html>
  <body class="connexionpanel">  
  <h1>Administration du Site</h1>	
  <section class="connexionbox">
		<form name="identif" method="POST" action="index.php">
			<table>
				<tr><td class="login">Identifiant  </td><td><input type="text" name="login"></td></tr>
				<tr><td>Mot de passe  </td><td><input type="password" name="pass"></td></tr>
			</table>
			<input id="ok" type="submit" name="action" value="OK">
		</form>
	</section>
	
	<section class="backhome">
	<a href="../index.php">Retour au site <i class="icon-home-circled"></i>
	</section>
  </body>
</html>
