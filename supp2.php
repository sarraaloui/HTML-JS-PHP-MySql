<?php
echo'
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Document sans nom</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js" async ></script>
<link href="style1.css" rel="stylesheet" type="text/css">

</head>

<body>

';
$id=$_POST['id'];

$conn= new mysqli("127.0.0.1","root","","projet_sgbd");

$sql="select * from petition where titre_id=".$id;
$rzlt=$conn->query($sql);

while ($row=$rzlt->fetch_assoc()) {
 
     echo "
<form method='POST'>
<h1>Petition</h1>
     <h1>Titre:</h1>
     <h3>".$row["titre"]."</h3>
<input 
style='   
     outline: none;
     margin-left:-1%;
     height: 25px;
          border:none;
     padding: 0 12px;
     border-bottom: 1px solid #ddd;
     border-radius: 5px 5px 5px 5px;'

type='text' name='titre' id='titre' placeholder='Type...'autocomplete='off'>
<input style=
     '

border: none;
     left: -5px;
     outline: none;
     height: 40px;
     padding: 0px 12px;
     margin-left:33%;
     top:15px;
     cursor: pointer;
     background: #ff9f1c;
     color: white;
     top:15px;
     border-radius: 7px 7px 7px 7px;
     ' 
     type='submit' name='updt' value='mettre a jour' onclick='update1()' onclick='document.location.reload(true)'  >
<h1>Description:</h1>
<h3>".$row["description"]."</h3>
<input 
style='   
     outline: none;
     margin-left:-1%;
     height: 25px;
     border:none;
     padding: 0 12px;
     border-bottom: 1px solid #ddd;
     border-radius: 5px 5px 5px 5px;'

type='text' name='desc' id='desc' placeholder='Type...'autocomplete='off'>
<input style=
     '

border: none;
     left: -5px;
     outline: none;
     height: 40px;
     padding: 0px 12px;
     margin-left:33%;
     top:15px;
     cursor: pointer;
     background: #ff9f1c;
     color: white;
     top:15px;
     border-radius: 7px 7px 7px 7px;
     ' 
     type='submit' name='updt' value='mettre a jour' onclick='update()' onclick='document.location.reload(true)'  >
<h1>Pour:</h1>
<h3>".$row["pour"]."</h3>
<input 
style='   
     outline: none;
     margin-left:-1%;
     height: 25px;
     
     width:430px;
     color:red;
          border:none;
     padding: 0 12px;
     border-bottom: 1px solid #ddd;
     cursor:not-allowed;
     border-radius: 5px 5px 5px 5px;'

type='text'  value='Pour assurer la transparance vous ne pouvez pas changer cette valeur'autocomplete='off' disabled>
<h1>Contre:</h1>
<h3>".$row["contre"]."</h3>

<input 
style='   
     outline: none;
     margin-left:-1%;
     height: 25px;
          border:none;
     padding: 0 12px;
     border-bottom: 1px solid #ddd;
     width:430px;
     color:red;
     cursor:not-allowed;
     border-radius: 5px 5px 5px 5px;'

type='text'  value='Pour assurer la transparance vous ne pouvez pas changer cette valeur'autocomplete='off' disabled>


<input style='
border: none;
     left: -5px;
     outline: none;
     height: 40px;
     padding: 0px 12px;
     cursor: pointer;
     margin-left:15%;
     background: #ff9f1c;
     color: white;
     border-radius: 7px 7px 7px 7px;
     ' 
     type='submit' name='sup' value='supprimer' onclick='supp1()'onclick='document.location.reload(true)' >

</form>
";}?>
<script type="text/javascript">


    function supp1(){
    var x =document.getElementById("drp").value;

    $.ajax({
      url:"sup1.php",
      method:"POST",
      data:{id:x},
      success:function(data){
        $("#ans").html(data)

      }
    })
  }

  
 
    

  
</script>

</body>




