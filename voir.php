<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document sans nom</title>
<script src="script.js" async ></script>
<link href="style2.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container"> 
	<header> <a href="home.html">
    <h4 class="logo">Petition.tn</h4>
    </a>
    <nav>
      <ul>
        <li><a href="voir.php">voir petition	</a></li>
        <li><a href="register.php">cree un compte</a></li>
        <li> <a href="login.php">se connecter</a></li>
      </ul>
    </nav>
  </header>
  <div class="tab">
    <br>
<table class="table">
  <thead>
    <tr>
      <th> Titre</th>
      <th> Description</th>
      <th> Pour </th>
      <th> Contre</th>
      <th> Createur</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	$conn= new mysqli("127.0.0.1","root","","projet_sgbd");
  	$sql="select * from petition";
$rzlt=$conn->query($sql);

while ($row=$rzlt->fetch_assoc()) {
  echo '  <tr>
        <td> '.$row["titre"].'</td>
        <td> '.$row["description"].'</td>
        <td> '.$row["pour"].'</td>
        <td> '.$row["contre"].'</td>
        <td> '.$row["nom"]." ".$row["prenom"].'</td>
        </tr> ';}
        echo' </tbody> </form> </table></div></div> ';?>
</body>
</html>
