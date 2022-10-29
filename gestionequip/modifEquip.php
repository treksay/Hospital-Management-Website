<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');

//getting data
$codeE=$_POST['codeE'];
$carE=$_POST['carE'];

//controle
$sql="update equipement SET caracteristique='$carE' WHERE codeE='$codeE' ";
$res=mysqli_query($id,$sql);
if(mysqli_affected_rows($id)>0)
{
	echo "Equipement modifie avec succes";
}
else
{
	exit("Code equipement introuvable!");
}
?>
<html>
<body>
	
	<a href="../gestion_equip.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>
