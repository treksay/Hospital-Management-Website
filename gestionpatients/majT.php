<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';

//connecxion à la bd
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
echo("<link rel='stylesheet' href='stylePatient.css'>");
$numS=$_POST['numS'];
$Tr=$_POST['Tr'];
$sql="update traitements SET traitement='$Tr' WHERE numS='$numS' ";
$res=mysqli_query($id,$sql);
//verification de l'existance du patient
if(mysqli_affected_rows($id)>0)
{
	echo ("<h2> donnees modifiees avec succes </h2>");
}
else
{
	exit("<h2> patient non introuvable! </h2>");
}
?>
<html>
<body>
	
	<a href="../gestion_patients.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>
