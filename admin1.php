<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document sans nom</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js" async ></script>
<link href="st1.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2></h2>
<div class="container" id="up"> 

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
        <div class="option">
         <select id="drp" style="height: 40px; width: 160px; " name="select" onchange="disp()">
 <option selected value="Petition" disabled>Petition</option>
            <?php
              $conn= new mysqli("127.0.0.1","root","","projet_sgbd");
              if ($conn->connect_error) {
              die('Connect Error: ' . $conn->connect_error);
            }
                 $sql="select * from petition ";
                 $rzlt=$conn->query($sql);
                    while ($row=$rzlt->fetch_assoc()) {
                      echo '<option value='.$row["titre_id"].' name='.$row["titre"].'> '.$row["titre"].'</option>
                      ';
}
?>
  </select>
      </div>
    </div>
<br>
  <div class="affich2"id="ans">
 </div>
</form>
</div>
</div>
<script type="text/javascript">
  function disp(){
    var x =document.getElementById("drp").value;
    $.ajax({
      url:"admin2.php",
      method:"POST",
      data:{id:x},
      success:function(data){
        $("#ans").html(data)

      }
    })
  }
</script>
</body>
</html>