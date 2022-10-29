<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data

$codeE=$_POST['codeE'];
$nomE=$_POST['nomE'];
$carE=$_POST['carE'];
$ser=$_POST['ser'];
$chamE=$_POST['chamE'];
echo("<link rel='stylesheet' href='styleEquip.css'>");
//controle
$sql="select codeE from equipement";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $codeE)
	{
		echo("<h2> code existant ! </h2>");
		$x=0;
		break;
	}
}

//insertion
if($x==1){
		$sql="insert into equipement values('$codeE','$nomE','$carE','$ser','$chamE')";
		mysqli_query($id,$sql);
		echo('<h2> Equipement ajoute avec succes </h2>');
		}


mysqli_close($id);

?>
<html>
<body>
	
	<a href="../gestion_equip.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>