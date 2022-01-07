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
		<div id="bodyOrdoMedecin" class="centre form">
					<div class="creationOrdonnance">
						<form method="POST" name="inscription" action="modifierCompteMedecin.html">
                            
                            <div class="param">
                                <div class="carre"></div>
                                <h3>Création ordonnance</h3>
                            </div>
                            <h2>Ordonnance</h2>
                            <ul class="infosPatient">
                                <li>
                                <h3>Informations patient:</h3>
                                <input type="text" name="nom" placeholder="Nom"><br>
                                <input type="text" name="prenom" placeholder="Prenom"><br>
                                <input type="text" name="tel" placeholder="Telephonne"><br>
                                <input type="email" name="email" placeholder="Email" id="email"><br>
                                <input type="text" name="naissance" placeholder="Date de naissance: JJ/MM/AAAA"><br>
                                <input type="text" name="numRue" placeholder="Numero de rue"><br>
                                <input type="text" name="rue" placeholder="Rue"><br>
                                <input type="text" name="ville" placeholder="Ville"><br>
                                <input type="text" name="cp" placeholder="Code postal"><br>
                                </li>
                            </ul>

                            <ul class="prescription">
                                <li>
                                <h3>Prescription:</h3>
                                <input type="text" name="nom" placeholder="Nom médicament"><br>
                                <input type="text" name="prenom" placeholder="Durée traitement"><br>
                                <input type="text" name="tel" placeholder="Information complémentaire"><br>
                                <a class="add" href="#"><img src="image/add2.png"></a>
                                </li>
                                
                            </ul>
                            
                            
                            <input class="button1" type="submit" value="Valider" id="modifier"><br> 
                                                
                        </form>
			        </div>
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>

</body>
</html>​