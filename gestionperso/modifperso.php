<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');

//getting data
$log1=$_POST['log1'];
$log=$_POST['log'];
$pwd=$_POST['pwd'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$fn=$_POST['fn'];
$service=$_POST['service'];

 echo("<link rel='stylesheet' href='stylePerso.css'>");
//controle
$sql="update utilisateur SET login='$log' ,pwd='$pwd' ,nom='$nom', prenom='$prenom',fonct='$fn',service='$service' WHERE login='$log1' ";
$res=mysqli_query($id,$sql);
if(mysqli_affected_rows($id)>0)
{
	echo "<h2>employe modifie avec succes</h2>";
}
else
{
	exit("<h2>login introuvable!</h2>");
}
mysqli_close($id);
?>
<html>
<body>
	
	<a href="../gestion_perso.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>