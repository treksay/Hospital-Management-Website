<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data
$numS=$_POST['numS'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$age=$_POST['age'];
$antec=$_POST['antec'];

echo("<link rel='stylesheet' href='styleEquip.css'>");
//controle
$sql="select numS from patient";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $numS)
	{
		echo("<h2> numero de seurite social existant </h2>");
		$x=0;
		break;
	}
}

//insertion
if($x==1){
		$sql="insert into patient values('$numS','$nom','$prenom','$age','$antec','')";
		mysqli_query($id,$sql);
		echo('<h2> Patient ajoute avec succes </h2>');
		}


mysqli_close($id);

?>
<html>
<body>
	
	<a href="../gestionAA.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>