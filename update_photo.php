<?php
$servername = 'localhost';
$username = 'root';
$password = '';
//On essaie de se connecter
try{
$conn = new PDO("mysql:host=$servername;dbname=projet_sgbd", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connexion réussie <br>';
}
/*On capture les exceptions si une exception est lancée et on affiche*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();

}


session_start();
    $ph=$_POST['ph'];
$sql = "UPDATE  membre set photo= '$ph' where mail= '".$_SESSION['T1']."';";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo " photo updated successfully";

?>
