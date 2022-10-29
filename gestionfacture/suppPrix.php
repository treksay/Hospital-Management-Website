<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');

//getting data
$codeT=$_POST['codeT'];
echo("<link rel='stylesheet' href='styleEquip.css'>");
//controle
$sql="update traitements SET prix='0.00' WHERE codeT='$codeT' ";
$res=mysqli_query($id,$sql);
if(mysqli_affected_rows($id)>0)
{
	echo "<h2>Prix supprimée avec succes</h2>";
}
else
{
	exit("<h2>Traitement introuvable!</h2>");
}
 ?>
<html>
<body>
	
	<a href="../gestion_facture.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>