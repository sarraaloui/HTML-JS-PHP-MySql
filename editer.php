 
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

  if(isset($_GET['submit'])) {
if(!empty($_GET['titree'])){
    $selected=$_GET['titree'];
   
session_start();
$stmt1=$conn->query("select mail from petition where titre ='$selected'  and mail = '".$_SESSION['T1']."'  ; ");
if($stmt1->execute()){ 
    if($stmt1->rowcount()==0){
echo " <script> alert(\"  vous navez pas le droit dediter une petition si vous netes pas le createur \")</script>";   
}else{
  if(!empty($_GET['background'])){
    $selected_desc=$_GET['background'];
  
 

    $sql1 = "update  petition set description= '$selected_desc' where mail = '".$_SESSION['T1']."'   ;";
// use exec() because no results are returned
$conn->exec($sql1);
echo " <script> alert(\"  petition edited successfully\")</script>"; 
} }
  }



}
}?>



<!--PARTIE VOIR PLUS-->


<?php
if(isset($_GET['submit1'])) {
  if(!empty($_GET['titree'])){
      $selected=$_GET['titree'];
//echo $selected;
$choice=$_GET['choix'];
//echo $choice;
//VOIR PPLE +
if($choice==1)
{
  $stmt2=$conn->query("select C.comment,M.nom,M.prenom   from comments C,membre M,petition P  where P.titre ='$selected' and M.mail=C.mail and C.titre=P.titre and C.choix='P' ;");
  $stmt3=$conn->prepare("select count(*) from comments C,membre M,petition P  where P.titre ='$selected' and M.mail=C.mail and C.titre=P.titre and C.choix='P' ;");
  $stmt3->execute();
?>
<table>
  <tr><td>Ppl +</td></tr>
 <tr><td>Nombre Total: <?php echo $stmt3->rowCount();  ?> </td></tr>

<?php
  $stmt2->execute();
$datas = $stmt2->fetchAll();

foreach($datas as $data){?>

 <tbody>
<tr><td> Nom :<?php echo $data['nom'];?> </td></tr>
<tr><td>Prenom  <?php echo $data['prenom'];?> </td></tr>
<tr><td>Son commentaire : <?php echo $data['comment'];?> </td></tr>



  <?php }?>
</tbody>
</table>



<?php
}else if ($choice==0){
  $stmt2=$conn->prepare("select C.comment,M.nom,M.prenom,P.titre   from comments C,membre M,petition P  where P.titre ='$selected' and M.mail=C.mail and C.titre=P.titre  ;");
  $stmt2->execute();

  ?>
  <table>
   <tr><td>Nombre Total des commentaires: <?php echo $stmt2->rowCount();  ?> </td></tr>
  
  <?php  $datas = $stmt2->fetchAll();
  
  foreach($datas as $data){?>
  
   <tbody>
   <tr><td> Titre: :<?php echo $data['titre'];?> </td></tr>
  <tr><td> Commentaire: :<?php echo $data['comment'];?> </td></tr>
  <tr><td>Nom:  <?php echo $data['nom'];?> </td></tr>
  <tr><td>Prenom: <?php echo $data['prenom'];?> </td></tr>
  
  
  
    <?php }?>
  </tbody>
  </table>
  
<?php


}else{




  $stmt2=$conn->query("select C.comment,M.nom,M.prenom   from comments C,membre M,petition P  where P.titre ='$selected' and M.mail=C.mail and C.titre=P.titre and C.choix='C' ;");
  $stmt3=$conn->prepare("select count(*) from comments C,membre M,petition P  where P.titre ='$selected' and M.mail=C.mail and C.titre=P.titre and C.choix='C' ;");
  $stmt3->execute();
?>
<table>
<tr><td>Ppl -</td></tr>

 <tr><td>Nombre Total: <?php echo $stmt3->rowCount();  ?> </td></tr>

<?php  $datas = $stmt2->fetchAll();

foreach($datas as $data){?>

 <tbody>
<tr><td> Nom :<?php echo $data['nom'];?> </td></tr>
<tr><td>Prenom  <?php echo $data['prenom'];?> </td></tr>
<tr><td>Son commentaire : <?php echo $data['comment'];?> </td></tr>



  <?php }?>
</tbody>
</table>


  
<?php
} //lekhra mtaa else
  }




}
?>