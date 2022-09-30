<?php

$k=$_POST['id'];
//$k=trim($k);
//echo 'ddddddd'.$k;
$con=mysqli_connect("localhost","root","","projet_sgbd");
$sql="select description,date_creation,nom,prenom from petition where titre ='{$k}'  ;";
$res=mysqli_query($con,$sql);
while ($rows=mysqli_fetch_array($res)){?>
<tr> 
 <td>Description<textarea name="background" value="" > <?php echo $rows['description']; ?>
 </textarea>
</td>
</tr>
<tr>
 <td>Date Creation <input type="text" readonly value="<?php echo $rows['date_creation'];?>"></td>
</tr>
<tr>
<td>Nom Createur <input type="text" readonly value=" <?php echo $rows['nom'];?>"></td>
</tr>
<tr>
<td>Prenom du createur<input type="text" readonly value=" <?php echo $rows['prenom'];?>"> </td>
</tr>

  <?php
}

?>