<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connexion error');
mysqli_select_db($id,$db) or die ('there is no db');
//recup des donnes
$numS=$_POST['numS'];
echo("<link rel='stylesheet' href='stylePatient.css'>");
//parcours
$sql="select traitement from traitements where numS='$numS'";
$res=mysqli_query($id,$sql);
echo("<h2 align='center'>Affichage des Traitements convenables a ".$numS."</h2>");
echo("<table border=1><thead><tr bgcolor=#999999> <th>Traitements </th></thead><tbody>");
while($ligne=mysqli_fetch_array($res))
 {
 	$traitement=$ligne['traitement'];
 	echo("<tr> <td>$traitement </tr>");
 }
 echo("</tbody></table>"); 	


?>
<html>
<body>
	
	<a href="../gestion_patients.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>