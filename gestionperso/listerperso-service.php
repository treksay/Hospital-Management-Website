<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connexion error');
mysqli_select_db($id,$db) or die ('there is no db');
//recup des donnes
$service=$_POST['s2'];
//parcours
$sql="select * from utilisateur where service='$service'";
$res=mysqli_query($id,$sql);
echo("<link rel='stylesheet' href='stylePerso.css'><h2 align='center'>Affichage des personnels </h2>");
echo("<table border=1 align='center'><thead><tr bgcolor=#999999> <th>login </th> <th>nom </th> <th>preson </th></tr></thead><tbody>");
while($ligne=mysqli_fetch_array($res))
 {
 	$log=$ligne['login'];
 	$nom=$ligne['nom'];
 	$prenom=$ligne['prenom'];
 	echo("<tr> <td>$log</td> <td>$nom</td> <td>$prenom</td> </tr>");
 }
 echo("</tbody></table>"); 	


?>
<html>
<body>
	
	<a href="../gestion_perso.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>