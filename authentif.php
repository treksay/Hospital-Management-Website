<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connection error');
mysqli_select_db($id,$db) or die ('Database not found!');
//getting data
echo("<link rel='stylesheet' href='Homestyle.css'>");
$login=$_POST['login'];
$pwd=$_POST['pwd'];

//controle
$sql="select login,pwd,fonct from utilisateur";
$res=mysqli_query($id,$sql);
$x=1;
while($ligne=mysqli_fetch_array($res))
{
	if($ligne[0] == $login && $ligne[1]==$pwd)
	{
		if($ligne[2] == "gestionnaire")
			{ //head to gestionaire.php 
				header( 'Location: gestionnaire.html' ); }
		if($ligne[2] == "medecin")
			{ //head to Medicale.php 
				header( 'Location: gestion_patients.html' ); }
		if($ligne[2] == "MedecinEnChef")
			{ //head to Financier.php 
				header( 'Location: gestion_patients.html' ); }
		if($ligne[2] == "financier")
			{ //head to Pharmacien.php 
				header( 'Location: gestion_facture.html' ); }
		if($ligne[2] == "pharmacien")
			{ //head to Agent d accueil.php 
				header( 'Location: gestion_pharmacie.html' ); }	
		if($ligne[2] == "AgentAccueil")
			{ //head to visiteur.php 
				header( 'Location: gestionAA.html' ); }						
		$x=0;
		break;
	}
}
if($x==1){ echo("<h2>Login ou Mot de passe invalide, veuillez contacter le gestionnaire pour joindre comme personnel</h2>"); }

mysqli_close($id);
?>
<html>
<body>
	
	<a href="index.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au Page d'accueil &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>
