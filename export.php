<?php

$servername = 'localhost';
$username = 'root';
$password = 'root';
//On essaie de se connecter
try{
$conn = new PDO("mysql:host=$servername;dbname=projet_sgbd", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'Connexion réussie <br>';
}
/*On capture les exceptions si une exception est lancée et on affiche
*les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();}



$req=$conn->prepare("select photo from membre ");
$req->setFetchMode(PDO::FETCH_ASSOC);
$req->execute();
$resultat = $req->fetchAll();
$img =  $resultat[0]["photo"];
?>