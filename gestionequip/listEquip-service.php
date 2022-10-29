<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connexion error');
mysqli_select_db($id,$db) or die ('there is no db');
//recup des donnes
$service=$_POST['s1'];
//parcours
$sql="select * from equipement where service='$service'";
$res=mysqli_query($id,$sql);
echo("<link rel='stylesheet' href='styleEquip.css'><br><h1 align='center'>Affichage des equipements</h1>");
echo("<table border=1 align='center'><thead><tr bgcolor=#999999> <th>CODE </th> <th>NOM </th> <th>CARACTERISTIQUE</th> <th>CHAMBRE</th></thead></tr><tbody>");
while($ligne=mysqli_fetch_array($res))
 {
 	$codeE=$ligne['codeE'];
 	$nom=$ligne['nom'];
 	$car=$ligne['caracteristique'];
 	$chambre=$ligne['chambre'];
 	echo("<tr> <td>$codeE</td> <td>$nom</td> <td>$car</td> <td>$chambre</td> </tr>");
 }
 echo("</tbody></table>"); 	


?>
<html>
<body>
	
	<a href="../gestion_equip.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>