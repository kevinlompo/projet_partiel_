<?php
	include('navBar.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TUTO JS - #13 Valider des formulaires (avec les événements)</title>
	<link rel="stylesheet" type="text/css" href="design/default.css">
    <script src="js/script.js"></script>
	<script src="js/app.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/vast-engineering/jquery-popup-overlay@2/jquery.popupoverlay.min.js"></script>
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
				<form method="POST" name="connexion" action="connexion.html">
					<br><br><br><br>		
					<input type="email" name="email" placeholder="Email" id="email"><br>
					<input type="password" name="mdp" placeholder="Mot de passe"><br>
					<input class="button1" type="submit" value="Se connecter" id="connexion">

					<p><a href="#" class="popup2_open">Mot de passe oublié ? </a></p>
					<section id="popup2">
						<h2>Mot de passe oublié</h2>
						<p >Merci de saisir l'adresse mail de votre compte Premedica:</p>
						<div class="envoyerpop">
							<input type="submit" name="valid">
						</div>
					</section>
					<div id="trait"></div>
				</form>
			</div>
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>


</body>
</html>