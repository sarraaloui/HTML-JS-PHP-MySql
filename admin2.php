<?php
$id=$_POST['id'];

$conn= new mysqli("127.0.0.1","root","","projet_sgbd");

$sql="select * from petition where titre_id=".$id;
$rzlt=$conn->query($sql);

while ($row=$rzlt->fetch_assoc()) {
 
     echo "<h1>Titre:</h1>
<h3>".$row["titre"]."</h3>
<h1>Description:</h1>
<h3>".$row["description"]."</h3>
<h1>Pour:</h1>
<h3>".$row["pour"]."</h3>
<h1>Contre:</h1>
<h3>".$row["contre"]."</h3>

";
}

?>