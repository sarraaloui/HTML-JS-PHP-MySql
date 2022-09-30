<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document sans nom</title>
<script src="script.js" async ></script>
<link href="st1.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="container" > 
 <header class="side"> 
    <h4 class="logo">Petition.tn</h4>
    </a>
    <nav class="sidenav"> 
      <ul>
         <li>Espace admin</li>
        <li><a href="admin1.php">Afficher petition</a></li>
        <li><a href="supp.php">gerer petition  </a></li>
        <li> <a href="stat2.php">statistique</a></li>
      </ul>
    </nav>
          <form action="decnx.php">

<button name="decnx" class="btn_dec"> deconnexion </button></form>
  </header>
  <form method="post">
      <div class="searchs">
      <input type="text" name="txt" placeholder="Type...">
      <input type="submit" name="sub" value="Search">
    </div>

<br>
  



</form>

</body>
</html>

<?php
$conn= new mysqli("127.0.0.1","root","","projet_sgbd");
if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);
}



$sql1="select count(titre) as nb from petition";
echo'    
<div class="affich2">
    <br>
<table class="table">
<form method="post">
  <thead>
    <tr>
      <th> Titre</th>
      <th> Description</th>
      <th> Pour </th>
      <th> Contre</th>
      <th> Createur</th>
       <th>Taux participation  <input type="submit" class="asc" name="asc" value="&#8593;"><input type="submit" class="dsc" name="dsc" value="&#8595;"></th>

    </tr>
  </thead>
  <tbody>';

$myString = 'there'; 
$ch='';
  if(isset($_POST['asc'])){
    $ch="order by pour+contre asc ";
  }
    if(isset($_POST['dsc'])){
    $ch="order by pour+contre desc ";
  }
  $ch2='';
if(isset($_POST['sub'])){
  $str=$_POST['txt'];


  $ch2='where description like "%'.$str.'%" or titre like "%'.$str.'%"';
 
}
$rzlt1=$conn->query($sql1);
while ($row=$rzlt1->fetch_assoc()) {
  if ($row['nb']==0){
  echo'<h2 class="a" >-No Result Found-</h2>';
}else{
$sql="select * from petition  ".$ch2.$ch;
$rzlt=$conn->query($sql);

while ($row=$rzlt->fetch_assoc()) {

  
  echo '  <tr>
        <td> '.$row["titre"].'</td>
        <td> '.$row["description"].'</td>
        <td> '.$row["pour"].'</td>
        <td> '.$row["contre"].'</td>
        <td> '.$row["nom"]." ".$row["prenom"].'</td>
        <td> '.$row["pour"]+$row["contre"].'</td>
      
        </tr> ';}}}


        echo' </tbody>
</form>
</table></div>
</div>
    ';

?>

  