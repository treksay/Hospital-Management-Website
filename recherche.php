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
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];

//parcours
if($numS!='' && $nom=='' && $prenom==''){
$sql="select * from patient where numS='$numS'"; }
else if($numS=='' && $nom!='' && $prenom=='')
{
	$sql="select * from patient where nom='$nom'";
}
else if($numS=='' && $nom=='' && $prenom!='')
{
	$sql="select * from patient where prenom='$prenom'";
}
else{
	$sql="select * from patient where nom='$nom' and prenom='$prenom'";
}

$res=mysqli_query($id,$sql);
echo("<link rel='stylesheet' href='Homestyle.css'><h2 align='center'>Patients trouves </h2>");
echo("<table border=1 align='center'><thead><tr bgcolor=#999999> <th>NUMERO DE SECURITE SOCIAL</th> <th>NOM</th> <th>PRENOM</th><th>AGE</th><th>ANTECEDENT MEDICAL</th><th>CHAMBRE </th></tr><thead><tbody>");

while($ligne=mysqli_fetch_array($res))
 {
 	
 	echo("<tr> <td>$ligne[0]</td> <td>$ligne[1]</td> <td>$ligne[2]</td> <td>$ligne[3]</td><td>$ligne[4]</td> <td>$ligne[5]</td> </tr>");
 }
 echo("</tbody></table>"); 	


?>