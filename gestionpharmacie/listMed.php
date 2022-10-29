<?php
$host='localhost';
$user='root';
$pw='';
$db='hopital';
//connection to db
$id=mysqli_connect($host,$user,$pw) or die('connexion error');
mysqli_select_db($id,$db) or die ('there is no db');
//recup des donnes
$nomMed=$_POST['nomMed'];
$date=$_POST['date'];
//parcours
if($nomMed != '' && $date != '')
{ $sql="select * from pharmacie where nomMed='$nomMed' and date='$date'"; }
else
{
  $sql="select * from pharmacie where nomMed='$nomMed' or date='$date'";		
}	
echo("<link rel='stylesheet' href='stylePharmacie.css'>");
$res=mysqli_query($id,$sql);
echo("<h2 align='center'>Affichage des medicaments</h2>");
echo("<table border=1 align='center'><thead><tr bgcolor=#999999> <th>code du medicament </th> <th>nom du medicament</th> <td>quantite</th> <th>Date</th></tr></thead><tbody>");

require_once 'Classes/PHPExcel.php';

$excel = new PHPExcel();
$excel->getActiveSheet()->getColumnDimension('A')->setWidth(22);
$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
$excel->getActiveSheet()->getColumnDimension('C')->setWidth(10);
$excel->getActiveSheet()->getColumnDimension('D')->setWidth(13);
$excel->setActiveSheetIndex(0)
	  ->setCellValue('A1','CODE DU MEDICAMENT')
	  ->setCellValue('B1','NOM DU MEDICAMENT')
	  ->setCellValue('C1','QUANTITE')
	  ->setCellValue('D1','DATE');
$i=2;
while($ligne=mysqli_fetch_array($res))
 {
 	$codeMed=$ligne['codeMed'];
 	$nomMed=$ligne['nomMed'];
 	$qte=$ligne['qte'];
 	$date=$ligne['date'];
 	echo("<tr> <td>$codeMed</td> <td>$nomMed</td> <td>$qte</td> <td>$date</td> </tr>");
 	$excel->setActiveSheetIndex(0)
	  ->setCellValue('A'.$i,$codeMed)
	  ->setCellValue('B'.$i,$nomMed)
	  ->setCellValue('C'.$i,$qte)
	  ->setCellValue('D'.$i,$date);
    $i++;
 }
 echo("</tbody></table>"); 	

$file = PHPExcel_IOFactory::createWriter($excel,'Excel2007');
$file->save('test.xlsx');	  

mysqli_close($id);

?>
<html>
<body>
	
	<a href="../gestion_pharmacie.html" class="button">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Retourner au menu principal &rarr;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br><br>
</body>	
</html>