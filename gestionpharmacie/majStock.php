<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
echo("<link rel='stylesheet' href='stylePharmacie.css'>");
//getting data
$codeMed=$_POST['codeMed'];
$nvq=$_POST['nvq'];

//controle
$sql="update pharmacie SET qte='$nvq' WHERE codeMed='$codeMed' ";
$res=mysqli_query($id,$sql);

if(mysqli_affected_rows($id)>0)
{
	echo ("<h2>quantite modifiee avec succes</h2>");
}
else
{
	exit("<h2>Code Medicament introuvable!</h2>");
}
?>
<html>
<body>
	
	<a href="../gestion_pharmacie.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>