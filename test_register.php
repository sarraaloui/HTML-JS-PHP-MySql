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
/*On capture les exceptions si une exception est lancée et on affiche
*les informations relatives à celle-ci*/
catch(PDOException $e){
echo "Erreur : " . $e->getMessage();}
try {
$role=$_GET['r1'];
    $mail=$_GET['T1'];
$mdp=$_GET['T4'];
$fullname=$_GET['T2'];
$ph=$_POST['ph'];

//bch nkasem l full name
$esp=" ";
$name=$nom="";
    $pos=strpos($fullname,$esp);
    $nom=substr($fullname,0,$pos=strpos($fullname,$esp)-1);
    $name=substr($fullname,$pos=strpos($fullname,$esp)+1);
  


    $stmt=$conn->query("select mail from membre where mail='$mail' and mdp='$mdp'; ");
    if($stmt->execute()){
        if($stmt->rowcount()==1){
    echo 'already exists';
        }else {

//MAIL existant dejaa
            $stmt1=$conn->query("select mail from membre where mail='$mail' ; ");
            if($stmt1->execute()){ 
                if($stmt1->rowcount()==1){
            echo 'mail is used by another user ';
                }else{
                    session_start();
                    $_SESSION['T1'] = $_GET['T1'];
                    $_SESSION['T2'] = $_GET['T2'];
                $sql = "INSERT INTO membre VALUES ('$mail','$mdp','$nom','$name','$role','$ph')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";     
    header("location:account.php");

}   
               
        
                               }
        }
            }}
               catch(PDOException $e) {
               echo $sql."<br>".$e->getMessage();
                }
  
  $conn = null;




/*
$mail=$_GET['T1'];
$mdp=$_GET['T4'];
$fullname=$_GET['T2'];
//bch nkasem l full name
$esp=" ";
$name=$nom="";
    $pos=strpos($fullname,$esp);
    $nom=substr($fullname,0,$pos=strpos($fullname,$esp)-1);
    $name=substr($fullname,$pos=strpos($fullname,$esp)+1);
//deja existant
$stmt=$conn->query("select mail from membre where mail='$mail' and mdp='$mdp'; ");
if($stmt->execute()){
    if($stmt->rowcount()==1){
        echo "already exist";
        $stmt->close();
header("location:login.php");
    }
}
else{
//mail existant
$stmt1=$conn->query("select mail from membre where mail='$mail' ; ");
$stmt1->execute();
    if($stmt1->rowcount()==1){
        echo "mail is used by another user try again";
       $mail="";
       $stmt1->close();

    }

//mdp existant
$stmt2=$conn->query("select mail from membre where mdp='$mdp' ; ");
if($stmt2->execute()){
    if($stmt2->rowcount()==1){
       
        echo "password is used by another user try again";
       $mdp="";
       $stmt2->close();
    }
    }
// Insert into 
if($stmt1->rowcount()==0 && $stmt2->rowcount()==0){
  
    $stmt3=$conn->query("insert into membre (mail,mdp,nom,prenom) values ('$mail','$nom','$name','$mdp'); ");
$stmt3->execute();
echo 'ajout reussi';
$stmt3->close();

header("location:account.php");
}
}*/
?>