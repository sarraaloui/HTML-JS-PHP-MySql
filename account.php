<html>
<title></title>
<head>

    <link rel="stylesheet" href="acc.css">
</head>
<body>

<div class="container" id="up"> 
    <div class="background">
  <div class="nav">
<a class="a active " href="#">Edit Profile</a>
<a class="b" href="#">View list</a>
<a class="c" href="#">create petition</a>
<a class="d" href="#">Participate petition</a>
<a class="f" href="#">Edit petition</a>

      </div>

  </div>
 

<form action="decnx.php">

<button name="decnx" class="btn_dec"> deconnexion </button></form>

<div class="content">
<div class="edit_profile">
<form  action="update_password.php" autocomplete="off" class="pswd">
 
 <?php 
session_start();?>
<p class="bienvenue">
<?php
echo 'Bienvenue sur votre Compte: '.$_SESSION['nom'].'  '.$_SESSION['prenom'].'';


?> </p>
<div class="photo">   <?php include("export.php") ?><?php 
  
  echo '<img src="data:image/jpg;base64,' . base64_encode($img) . '"  height="100" width="100"/>'; ?>
</div>
<h2> Changer votre mot de passe </h2><br>
<form  method="POST" action="update_password.php" >

 <input type="password" name="pass" id="pass1" autocomplete="off" placeholder="old password :"><br>
<input type="password" name="new_pass" id="pass2"autocomplete="off" placeholder="new password :" ><br>
<input type="password" name="new1_pass" id="passn" autocomplete="off" placeholder="confirm password:"><br>
<button id="edit" class="edit">Send</button>
<hr>
</form>
<br><br><br>
<form  method="POST" action="update_photo.php" class="pic"><br><br><br><br><br><br>
<h2> Changer votre photo </h2><div class="image_preview">
    <input class="file-upload-input" class="ph" id="file1" name='ph' type="file" onchange="readURL(this)" accept="Image/*">
   

    <button id="edit">Send</button></form>
    </div>
</div>

<div class="viewlist">
<?php
$conn= new mysqli("127.0.0.1","root","","projet_sgbd");
if ($conn->connect_error) {
    die('Connect Error: ' . $conn->connect_error);
}




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
     

    </tr>
  </thead>
  <tbody>';



$sql="select * from petition  ";
$rzlt=$conn->query($sql);

while ($row=$rzlt->fetch_assoc()) {

  
  echo '  <tr>
        <td> '.$row["titre"].'</td>
        <td> '.$row["description"].'</td>
        <td> '.$row["pour"].'</td>
        <td> '.$row["contre"].'</td>
        <td> '.$row["nom"]." ".$row["prenom"].'</td>
       
      
        </tr> ';}


        echo' </tbody>

</table></div>

    ';

?>
</div><!-- div mtaa viewlist-->
<div class="create_pet" >
    <form method="POST" action="creation_pet.php">
<span class="tag">titre</span> <br><input type="text" name="titre">  <br>
 <span class="tag">Description:</span> <br><textarea name="desc"> </textarea><br>
 <button id="btncreate" class="cr" > create  </button>
</form>

</div><!-- div mtaa create pet-->


<div class="create_pet" >
    <form method="POST" action="creation_pet.php">
<p class="tag">titre </p> <input type="text" name="titre">  <br>
<p class="tag">Description: </p> <textarea name="desc"> </textarea><br>
 <button id="btncreate" class="cr" > create  </button>
</form>
</div><!-- div mtaa create pet-->

<div class="participate_pet">
    <form action="participate.php">
<?php 
$con=mysqli_connect("localhost","root","","projet_sgbd");
$sql="select titre from petition";
$res=mysqli_query($con,$sql);
?>
    <select id="drp" name="titre_pet" >
    <option value=""disabled selected>--select title --</option>
<?php while($rows=mysqli_fetch_array($res)){ ?>
<option value="<?php echo $rows['titre'];?>"> <?php echo $rows['titre'];?></option>
  <?php } ?>
</select><br>
    </select>
<textarea  id="cmnt" name="participe" placeholder="envoyer un commentaire">
</textarea>
<div class="vote">Pour <input type="radio" name="R1" value="P">
Contre <input type="radio" name="R1" value="C" ></div>


<button name="btn"id="btncreate">submit</button>
</form>

</div><!-- div mtaa participate pet-->

   

        <div class="edit_pet">
            <?php
        include('haja.php');?>
        
        </div><!-- div mtaa edit pet-->
</div><!-- div mtaa content-->
</div><!-- div mtaa background-->
</form>

</div>


<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
<script type="text/javascript">
// when u click an option active will be removed from the last option
$(document).ready(function(){

    $('a').click(function(){
        //alert("clik");
    var selected = $(this);
    $('a').removeClass('active');
    $(selected).addClass('active');
    });
var $a=$('.a'),$b=$('.b'),$c=$('.c'),$d=$('.d'),$e=$('.e'),$f=$('.f'),$edit_profile=$('.edit_profile'),$viewlist=$('.viewlist');
 var $create_pet=$('.create_pet');
 var $participate=$('.participate_pet'),$oppose=$('.oppose_pet'),$edit=$('.edit_pet');
$a.click(function(){
    $edit_profile.fadeIn();
    $viewlist.fadeOut();
    $create_pet.fadeOut();
    $edit.fadeOut();
    $participate.fadeOut();
})
$b.click(function(){
    $edit_profile.fadeOut();
    $viewlist.fadeIn();
    $create_pet.fadeOut();
    $edit.fadeOut();
    $participate.fadeOut();

})
$c.click(function(){
    $edit_profile.fadeOut();
    $create_pet.fadeIn();
    $viewlist.fadeOut();
    $edit.fadeOut();
    $participate.fadeOut();
});

$d.click(function(){
    $edit_profile.fadeOut();
    $create_pet.fadeOut();
    $viewlist.fadeOut();
    $edit.fadeOut();
    $participate.fadeIn();
});


$f.click(function(){
    $edit_profile.fadeOut();
    $create_pet.fadeOut();
    $viewlist.fadeOut();
    $edit.fadeIn();
    $participate.fadeOut();
});

});

</script>


<script src="account.js"></script>
 <footer>
  <div class="copyright">&copy;2022- <strong>Sarra Aloui & Youssef mahfoudhi</strong></div>
</footer>
</body></html>