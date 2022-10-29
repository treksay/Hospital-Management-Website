<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data

$numS=$_POST['numS'];
echo("<link rel='stylesheet' href='styleEquip.css'>");
//controle
$sql="delete from patient where numS='$numS'";
$res=mysqli_query($id,$sql);
if (mysqli_affected_rows($id)>0) {
	echo "<h2> patient supprime avec succes </h2>";
}
else 
{
	exit("<h2> numero de securite social introuvable! </h2>");
}
mysqli_close($id);
?>
<html>
<body>
	
	<a href="../gestionAA.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>