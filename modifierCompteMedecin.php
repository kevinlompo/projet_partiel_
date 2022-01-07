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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/vast-engineering/jquery-popup-overlay@2/jquery.popupoverlay.min.js"></script>
</head>
<body>

	<section>
		<div id="login-body2" class="centre form">	
					<div class="modifUtilisateur">
						<form method="POST" name="inscription" action="modifierCompteMedecin.html">
                            <div class="param">
                                <div class="carre"></div>
                                <h3>Paramètre</h3>
                            </div><br><br>
                            <h2>Modifier votre compte:</h2><br>
                            <input type="text" name="nom" placeholder="Nom"><br>
                            <input type="text" name="prenom" placeholder="Prenom"><br>
                            <input type="text" name="tel" placeholder="Telephonne"><br>
                            <input type="email" name="email" placeholder="Email" id="email"><br>
                            <input type="text" name="nomEtablissement" placeholder="Nom etablissement"><br>
                            <input type="text" name="rue" placeholder="Rue"><br>
                            <input type="text" name="numRue" placeholder="Numero de rue"><br>
                            <input type="text" name="ville" placeholder="Ville"><br>
                            <input type="text" name="cp" placeholder="Code postal"><br>
                            <input type="password" name="mdp" placeholder="Mot de passe"><br>
					        <input type="password" name="mdp" placeholder="Confirmer mot de passe"><br>      
                            <input class="button1" type="submit" value="Modifier" ><br>
                    
                            <p><a href="#" class="popup1_open" id="supprimer">Supprimer</a></p><br><br>
					        <section id="popup1">
								<h2>Supprimer votre compte</h2>
								<p >Souhaitez-vous vraiment supprimer votre compte Premedica:</p>
								<div class= "envoyerpop">
									<input type="submit" name="valid" value="Valider">
								</div>
					        </section>
                                                
                        </form>
					
			        </div>
			
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>

</body>
</html>​