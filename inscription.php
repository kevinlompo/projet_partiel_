<?php
     include('navBar.php');
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
	
	<section >
		<img id="main-image" src="image/docteur_2.png">
		<div id="login-body" class="centre">
			<div class="colonne1 colonne">
				<p><a class="cnx" href="connexion.php">Se connecter</a></p>
			</div>
			<div class="colonne2 colonne">
				<p><a class="cnx" href="inscription.php">Inscription</a></p>
			</div>
			<div class="centre">						
					<div class="choixUser">
						<div><br><br>
							<a href="formulairePatient.php"><img class="logoInscription" src="image/user.png"></a>
							<a href="formulairePatient.php" class="button1">Patient</a>
						</div><br><br><br><div>
							<a href="formulaireMedecin.php"><img class="logoInscription" src="image/user.png"></a>
							<a href="formulaireMedecin.php" class="button1">Médecin</a>
						</div><br><br><br><div class="pharma">			
							<a href="formulairePharmacien.php"><img class="logoInscription" src="image/user.png"></a>
							<a href="formulairePharmacien.php" class="button1">Pharmacien</a>
						</div>
					</div>
					<br><br>
					<p><a href="#">Condition générale d'utilisation</a></p><br><br>
					<div id="trait"></div>
			</div>
			
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>

</body>
</html>​