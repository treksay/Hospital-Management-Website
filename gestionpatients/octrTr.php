<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//get data
$numS=$_POST['numS'];
$Tr=$_POST['Tr'];
echo("<link rel='stylesheet' href='stylePatient.css'>");
//controle
$sql="select numS from Traitement";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $login)
	{
		echo("<h2> login existant </h2>");
		$x=0;
		break;
	}
}

 ?>
<html>
<body>
	
	<a href="../gestion_patients.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>