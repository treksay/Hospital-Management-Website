<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';

//connection to db

$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');

//getting data

$code=$_POST['cod'];
$prix=$_POST['prix'];

//controle
echo("<link rel='stylesheet' href='styleEquip.css'>");
$sql="update traitements SET prix='$prix' WHERE codeT='$code' ";
$res=mysqli_query($id,$sql);
if(mysqli_affected_rows($id)>0)
{
	echo "<h2> prix ajouté avec succes </h2>";
}
else
{
	exit("<h2> code traitement introuvable! </h2>");
}
mysqli_close($id);
?>
<html>
<body>
	
	<a href="../gestion_facture.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>