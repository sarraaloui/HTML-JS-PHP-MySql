<?php
session_start();
?>
<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';
//On essaie de se connecter
try{
$conn = new PDO("mysql:host=$servername;dbname=projet_sgbd", $username, $password);
//On définit le mode d'erreur de PDO sur Exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo 'Connexion réussie <br>';
//echo $_SESSION['T1'];

}
/*On capture les exceptions si une exception est lancée et on affiche*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}


  
        //echo $date;

        $titre=$_POST['titre'];
        $desc=$_POST['desc'];
        $date = date('20y-m-d'); 


       $reponse = $conn->query("SELECT nom,prenom FROM membre where mail='".$_SESSION["T1"]."'");
       $donnees = $reponse->fetch();
       $nom= $donnees['nom']; 
       $prenom= $donnees['prenom']; 
       $sql = "INSERT INTO petition (titre,description,date_creation,mail,pour,contre,nom,prenom) VALUES ('$titre','$desc','$date','".$_SESSION["T1"]."',0,0,'$nom','$prenom')";
       // use exec() because no results are returned
       $conn->exec($sql);
 echo 'New petition created successfully';
       $reponse->closeCursor();



?>