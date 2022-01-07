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
</head>
<body>
	<section>
		<div id="bodyOrdoMedecin" class="form">
					<div class="creationOrdonnance"> 
						<form method="POST" name="inscription" action="modifierCompteMedecin.html">
                            
                            <div class="param">
                                <div class="carre"></div>
                                <h3>Ordonnance</h3>
                            </div>
                            <br><br><h2>Vos ordonnances</h2>
                            </form><br><br><br><br>
                            
                            <table class="info">
                                <tr>
                                    <th>Date</th>

                                    <th>Nom médecin</th>

                                    <th>N° ordonnance</th>

                                    <th>Voir / Télécharger</th>

                                    <th>Qr Code</th>
                                </tr>

                                <tr>
                                    <td>12/10/19</td>

                                    <td>ALEXIS</td>

                                    <td>0123456</td>

                                    <td><a href=""><img src="image/shared-vision.png"></a> / <a href=""><img src="image/pdf-file.png"></a></td>

                                    <td><a href="qrcode.php"><img src="image/qr-code.png"></a></td>
                                    
                                </tr>

                                <tr>
                                    <td>12/10/19</td>

                                    <td>KEVIN</td>

                                    <td>0123457</td>

                                    <td><img src="image/shared-vision.png"></a> / <a href=""><img src="image/pdf-file.png"></td>

                                    <<td><a href="qrcode.php"><img src="image/qr-code.png"></a></td>
                                </tr>

                                <tr>
                                    <td>12/10/19</td>

                                    <td>MARTIAL</td>

                                    <td>0123458</td>

                                    <td><img src="image/shared-vision.png"></a> / <a href=""><img src="image/pdf-file.png"></td>

                                    <td><a href="qrcode.php"><img src="image/qr-code.png"></a></td>
                                </tr>
                                
                            </table>
                            


                            
                            <div id="trait"></div>
                            
                            
                            <!-- <input class="button1" type="submit" value="Valider" id="modifier"><br>  -->
                                                
                        </form>
			        </div>
		</div>

		<p style="color: red;" id="erreur"></p>
	</section>

</body>
</html>​