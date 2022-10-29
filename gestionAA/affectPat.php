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
$chambre=$_POST['chambre'];
echo("<link rel='stylesheet' href='styleEquip.css'>");
//controle
$sql="update patient SET chambre='$chambre' WHERE numS='$numS' ";
$res=mysqli_query($id,$sql);
if(mysqli_affected_rows($id)>0)
{
	echo "<h2> patient affecté au chambre avec succes </h2>";
}
else
{
	exit("<h2>numero du patient introuvable!</h2>");
}
?>
<html>
<body>
	
	<a href="../gestionAA.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>
