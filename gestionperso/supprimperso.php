<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data

$log=$_POST['log'];
 echo("<link rel='stylesheet' href='stylePerso.css'>");
//controle
$sql="delete from utilisateur where login='$log'";
$res=mysqli_query($id,$sql);
if (mysqli_affected_rows($id)>0) {
	echo "<br><h2>employe supprime avec succes</h2>";
}
else 
{
	exit("<br><h2>login introuvable!</h2>");
}
mysqli_close($id);
?>
<html>
<body>
	
	<a href="../gestion_perso.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>