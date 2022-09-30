<?php
$id=$_POST['id'];
$titre=$_POST['titre'];

$req=" ";
if ($titre!=""  ) {
	$req=$req." titre=".$titre;
	
}



	$sql1="update petition set ".$req." where id=".$id;


$conn= new mysqli("127.0.0.1","root","","projet_sgbd");
$conn->query($sql1);

?>