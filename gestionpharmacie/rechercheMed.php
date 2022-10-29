<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connexion error');
mysqli_select_db($id,$db) or die ('there is no db');
//recup des donnes
$codeMed=$_POST['codeMed'];
$nomMed=$_POST['nomMed'];

//parcours
echo("<link rel='stylesheet' href='stylePharmacie.css'>");
$sql="select * from pharmacie where codeMed='$codeMed' or nomMed='$nomMed'";
$res=mysqli_query($id,$sql);
echo("<h1 align='center'>Medicaments trouves </h1>");
echo("<table border=1><thead><tr bgcolor=#999999> <th>Code du medicament </th> <th>Nom </th> <th>Quantite </th></tr></thead><tbody>");

while($ligne=mysqli_fetch_array($res))
 {
 	$codeMed=$ligne['codeMed'];
 	$nomMed=$ligne['nomMed'];
 	$qte=$ligne['qte'];
 	echo("<tr> <td>$codeMed</td> <td>$nomMed</td> <td>$qte</td> </tr>");
 }
 echo("</tbody></table>"); 	


?>
<html>
<body>
	
	<a href="../gestion_pharmacie.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>