<?php

	include('navBar.php');

	if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['nomEtablissement']) && !empty($_POST['rue']) && !empty($_POST['numRue']) && !empty($_POST['ville']) && !empty($_POST['cp']) && !empty($_POST['mpd']) && !empty($_POST['mpdC'])) {
		$nom = htmlspecialchars($_POST['nom']);
		$prenom = htmlspecialchars($_POST['prenom']);
		$tel = htmlspecialchars($_POST['tel']);
		$email = htmlspecialchars($_POST['email']);
		$nomEtablissement = htmlspecialchars($_POST['nomEtablissement']);
		$rue = htmlspecialchars($_POST['rue']);
		$numRue = htmlspecialchars($_POST['numRue']);
		$ville = htmlspecialchars($_POST['ville']);
		$cp = htmlspecialchars('cp');
		$mdp = htmlspecialchars('mdp');
		$mdpC = htmlspecialchars('mdpC');
	

	// VERIFICATION PASSWORD

	if($mdp != $mdpC) {
		header('location: inscription.php?error=1&message=Vos mots de passe ne sont pas identiques.');
	}
	
		 // ADRESSE EMAIL VALIDE
	
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header('location: inscription.php?error=1&message=Votre adresse email est invalide.');
		exit();
	}
// EMAIL DEJA UTILISEE
	
	
	
	
//  CHIFFRAGE DU MOT DE PASSE
		
	$mdp = "aq1".sha1($password."123")."25";
	
	
// ENVOI

}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TUTO JS - #13 Valider des formulaires (avec les événements)</title>
	<link rel="stylesheet" type="text/css" href="design/default.css">
    <script src="js/script.js"></script>
	<script src="js/app.js"></script>
</head>
<body>

	<section>
		<div id="login-body2" class="centre">
			<div class="colonne1 colonne">
				<p><a href="connexion.php">Se connecter</a></p>
			</div>
			<div class="colonne2 colonne">
				<p><a href="inscription.php">Inscription</a></p>
			</div>
			<div class="centre-form">
				<form method="POST" name="inscription" action="formulairePharmacien.html">
					<br><br>
					<input type="text" name="nom" placeholder="Nom" required><br>
					<input type="text" name="prenom" placeholder="Prenom" required><br>
                    <input type="text" name="naissance" placeholder="Date de naissance" required><br>
                    <input type="text" name="tel" placeholder="Telephonne établissement" required><br>
					<input type="email" name="email" placeholder="Email" required><br>
                    <input type="text" name="nomEtablissement" placeholder="Nom etablissement" required><br>
                    <input type="text" name="rue" placeholder="Rue" required><br>
					<input type="text" name="numRue" placeholder="Numero de rue" required><br>
					<input type="email" name="ville" placeholder="Ville" required><br>
                    <input type="email" name="cp" placeholder="Code postal" required><br>
                    <input type="password" name="mdp" placeholder="Mot de passe" required><br>
					<input type="password" name="mdpC" placeholder="Confirmer mot de passe" required><br>
						
					
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