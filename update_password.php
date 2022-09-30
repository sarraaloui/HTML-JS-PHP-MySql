<?php
$servername = 'localhost';
$username = 'root';
$password = '';
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

session_start();
//echo 'Votre Mail : ' .$_SESSION['T1'];

$ok=true;
//mot de passe errone 
     $old_pass=$_GET['pass'];
    if($old_pass!=$_SESSION['T2']){
echo " <script> alert(\"  votre ancien mdp est erroné \")</script>";    
$ok=false;

}

$new_pass=$_GET['new_pass'];
$new1_pass=$_GET['new1_pass'];
//fonction compatible
$comp=true;
if(strlen($new1_pass)!=strlen($new_pass)){
    echo " <script> alert(\"password incompatible\");</script>"; 
    $ok=false;
}
   $i=0;
while($i < strlen($new_pass) and $comp){
if($new1_pass[$i] != $new_pass[$i]){
    $comp=false;
}else {
    $i++;
}
}
if($comp && $ok){
$sql = "UPDATE  membre set mdp= '$new_pass' where mail = '".$_SESSION['T1']."'   ;";
// use exec() because no results are returned
$conn->exec($sql);
echo " <script> alert(\"  password updated successfully\")</script>"; 
}

/*


//fonction compatible
    $comp=true;
    if(strlen($new1_pass)!=strlen($new_pass)){
        echo " <script> alert(\"password incompatible\");</script>"; 
    }else{
       $i=0;
    while($i < strlen($new_pass) and $comp){
    if($new1_pass[$i] != $new_pass[$i]){
        $comp=false;
    }else {
        $i++;
    }
    }}



*/













?>