<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';

//connection to db

$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');

//getting data

$codeMed=$_POST['codeMed'];
$nomMed=$_POST['nomMed'];
$qte=$_POST['qte'];

//controle
echo("<link rel='stylesheet' href='stylePharmacie.css'>");
$sql="select codeMed from pharmacie";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $codeMed)
	{
		echo("<h2> code existant ! </h2>");
		$x=0;
		break;
	}
}

//insertion
if($x==1){
		$sql="insert into pharmacie values('$codeMed','$nomMed','$qte')";
		mysqli_query($id,$sql);
		echo('<h2> Medicament ajoute au pharmacie avec succes </h2>');
		}


mysqli_close($id);
?>
<html>
<body>
	
	<a href="../gestion_pharmacie.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>