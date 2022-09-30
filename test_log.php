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
/*On capture les exceptions si une exception est lancée et on affiche*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();
}
$ok=true;
$mail=$_GET["T1"];
$mdp=$_GET["T2"];

$stmt=$conn->query("select nom,prenom from membre where mail='$mail' and mdp='$mdp'; ");
if($stmt->execute()){
    if($stmt->rowcount()==1){
 

  $datas = $stmt->fetchAll();

foreach($datas as $data){
session_start();
$_SESSION['T1'] = $_GET['T1'];
$_SESSION['T2'] = $_GET['T2']; 
$_SESSION['nom']=$data['nom'];
  $_SESSION['prenom']=$data['prenom'];
//$_SESSION['img']=setImage(file_get_contents($_FILES['file']['photo'])); }       
$ok=false; 
header("location:account.php");
    }
}}
  

        $stmt1=$conn->query("select * from admin where mail='$mail' and mdp='$mdp'; ");
        if($stmt1->execute()){
            if($stmt1->rowcount()==1){

               
                session_start();
                $_SESSION['T1'] = $_GET['T1'];
                $_SESSION['T2'] = $_GET['T2']; 
                $ok=false;
                header("location:admin1.php");



        }     } 
        if($ok){

        echo  " <script> alert(\"username or password invalid\")</script>"; }
         //    header("location:login.php");
            
 
        
        
        
 

        


?>