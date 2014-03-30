$req = $bdd->prepare('SELECT id FROM admin WHERE login=:login AND pass=:pass');
		$req->execute(array('login'=>$login, 'pass'=>sha1($pass)));
		if(!empty($login) && !empty($pass)){
		if($req->rowCount()==0){
		 $valid=false;
		 $erreur = 'Mauvais identifiants';
		 }
		}
		 
		if($valid){
			$_SESSION['admin'] = $login;
			header('Location: admin.php');
		}