<?php

	include('navBar.php');

	// require('src/connect.php');

    if(!empty($_POST['age']) && !empty($_POST['adresse']) && !empty($_POST['ville']) && !empty($_POST['cp']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['mpd'])) {
		
		$db = new PDO('mysql:host=localhost;dbname=premedica;charset=utf8', 'root', '');
		
		$age = htmlspecialchars($_POST['age']);
		$adresse = htmlspecialchars($_POST['adresse']);
		$ville = htmlspecialchars($_POST['ville']);
		$cp = htmlspecialchars($_POST['cp']);
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$tel = htmlspecialchars($_POST['tel']);
		$email = htmlspecialchars('email');
		$mdp = htmlspecialchars('mdp');
		echo var_dump($_POST);
		echo "toto" ;

	// ADRESSE EMAIL VALIDE

	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header('location: inscription.php?error=1&message=Votre adresse email est invalide.');
		exit();
	}

	
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs.

	// EMAIL DEJA UTILISEE

	$req = $db->prepare('SELECT COUNT(*) AS numberEmail FROM patient WHERE email = ?');
	$req->execute(array($email));

	while($email_verification = $req->fetch()){
		if($email_verification['numberEmail'] != 0){
			header('location: inscription.php?error=1&message=Votre adresse mail est deja utilisé par un autre utilisateur.');
			exit();
		}
	}


	//  CHIFFRAGE DU MOT DE PASSE
	
	$mdp = "aq1".sha1($mdp."123")."25";


	// ENVOI
	$req = $db->prepare('INSERT INTO patient(age, adresse, ville, codePostal, nom, prenom, telephone, email, motDePasse) VALUES (?,?,?,?,?,?,?,?,?)');
	$req->execute(array($age, $adresse, $ville, $cp, $nom, $prenom, $tel, $email, $mdp));

	header('location: inscription.php?success=1');
	exit();

	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design/default.css">
    <script src="js/script.js"></script>
	<script src="js/app.js"></script>
</head>
<body>

	<section>
		<div id="login-body2" class="centre">
			<div class="colonne1 colonne">
				<p><a class="cnx" href="connexion.php">Se connecter</a></p>
			</div>
			<div class="colonne2 colonne">
				<p><a class="cnx" href="inscription.php">Inscription</a></p>
			</div>
			<div class="centre-form">
				<form method="POST" name="inscription" action="formulairePatient.php">
					<br><br>
					<input type="text" name="nom" placeholder="Nom" required><br>
					<input type="text" name="prenom" placeholder="Prenom" required><br>
                    <input type="text" name="age" placeholder="Age" required><br>
                    <input type="text" name="tel" placeholder="Telephonne" required><br>
					<input type="email" name="email" placeholder="Email"><br>
                    <input type="text" name="adresse" placeholder="Adresse" required><br>
					<input type="text" name="ville" placeholder="Ville" required><br>
                    <input type="text" name="cp" placeholder="Code postal" required><br>
                    <input type="password" name="mdp" placeholder="Mot de passe" required><br>
						
					
					<p><a href="#">Condition générale d'utilisation</a></p>
					<input class="button1" type="submit" value="Créer un compte" id="inscription">
					<div id="trait"></div>
				</form>
			</div>
			
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>

</body>
</html>