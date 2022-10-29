<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data

$cod=$_POST['codeE'];

//controle
$sql="delete from equipement where codeE='$cod'";
$res=mysqli_query($id,$sql);
if (mysqli_affected_rows($id)>0) {
	echo "<h1>equipement supprime avec succes</h1>";
}
else 
{
	exit("<h1>code introuvable!</h1>");
}
mysqli_close($id);
?>