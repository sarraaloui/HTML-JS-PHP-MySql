<?php
$con=mysqli_connect("localhost","root","","projet_sgbd");
$sql="select titre from petition";
$res=mysqli_query($con,$sql);
?>


<html>
<title></title>
<head><script src="haja.js"></script>
</head>
<body>
  <form action="editer.php">
<select id="s_titre"name="titree"  onchange="selectTitre()" >
<option value=""disabled selected>--select titre --</option>
<?php while($rows=mysqli_fetch_array($res)){ ?>
<option value="<?php echo $rows['titre'];?>"> <?php echo $rows['titre'];?></option>

  <?php } ?>
</select><br>
<table>
<tbody id="ans"></tbody>
</table> 
<input type="submit"  value="submit" name="submit" id="btn" >

<input type="submit"  value="Voir plus" name="submit1" id="btn" >
<select name="choix" >
<option value=""disabled selected>--Show more --</option>
<option value="0">View all comments</option>
<option value="1">ppl +</option>
<option value="2">ppl -</option>
</select>


</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>