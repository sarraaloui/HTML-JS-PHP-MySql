<?php
$con=mysqli_connect("localhost","root","","projet_sgbd");



if(isset($_GET['btn'])){
        $selected=$_GET['titre_pet'];
        $p=$_GET['R1'];
$desc=$_GET['participe'];
      //  echo $selected;
session_start();
$sql="select * from comments where mail= '".$_SESSION['T1']."' and titre= '$selected' and vote =1 ;";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res)>0){
    echo " <script> alert(\" Attention Vous avez deja votee !! \")</script>"; 
}else{

$sql1="insert into comments(titre,mail,choix,comment,vote) values ('$selected','".$_SESSION['T1']."','$p','$desc',1);";
$res1=mysqli_query($con,$sql1);
echo " <script> alert(\" votre vote a ete enregistre !! \")</script>"; 

if ($p=='P'){
$sql2="update petition set pour=pour+1 where titre='$selected'";
$res2=mysqli_query($con,$sql2);

}else{
    $sql2="update petition set contre=contre+1 where titre='$selected' ";
    $res2=mysqli_query($con,$sql2);
}
}}



?>
