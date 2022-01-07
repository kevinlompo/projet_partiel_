<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=premedica;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Gestion des erreurs.

}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>