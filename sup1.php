<?php
$id=$_POST['id'];
$sql1="delete from petition where titre_id=".$id;
$conn= new mysqli("127.0.0.1","root","","projet_sgbd");
$conn->query($sql1);
header("location:supp.php");

?>