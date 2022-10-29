<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$fn=$_POST['fn'];
$log=$_POST['log'];
$pwd=$_POST['pwd'];
$service=$_POST['service'];
echo("<link rel='stylesheet' href='stylePerso.css'>");
//controle
$sql="select login from utilisateur";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $log)
	{
		echo("<h2> login existant </h2>");
		$x=0;
		break;
	}
}

//insertion
if($x==1){
		$sql="insert into utilisateur values('$log','$pwd','$nom','$prenom','$fn','$service')";
		mysqli_query($id,$sql);
		echo('<br><h2> Personnel ajoute avec succes </h2>');
		}


mysqli_close($id);

?>
<html>
<body>
	
	<a href="../gestion_perso.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>