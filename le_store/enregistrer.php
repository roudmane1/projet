<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"	href="lestore.css"	type="text/css"	
media="screen"	/>	 
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" /> 
 <title>enregirement</title>

<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();

	/*function enregistrer ($nom,$prenom,$age,$mail,$adresse,$numero,$mdp,$bdd){
	$sql="insert into client(nom,prenom,age,mail,adresse,numero,mdp) values ('$nom','$prenom','$age','$mail','$adresse','$numero','$mdp')";
	
	$bdd->exec($sql);
}
*/
if(($_GET['mot1']!= $_GET['mot2'])|| ($_GET['n']=="")
||($_GET['p']=="")||($_GET['num']=="")||($_GET['adr']=="")||($_GET['mail']=="")){

        echo '<meta http-equiv="Refresh"
content="0;url=nouveau.php?Nom='.$_GET['n'].'&Prenom='.$_GET['p'].'&Numero='.$_GET['num'].'&Adress='.$_GET['adr'].'&Email='.$_GET['mail'].'">';
}
else{
	//enregistrer($_GET['n'],$_GET['p'],$_GET['age'],$_GET['mail'],$_GET['adr'],$_GET['num'],$_GET['mot1'],$bdd);
	
	$date=$_GET['y'].'-'.$_GET['d'].'-'.$_GET['i'];//variable qui recupere la date de naissance 
	//echo $date;
    $sql="insert into client(Nom_client,Prenom_client,Date_de_nais,Mail_client,Adresse,Tel_client,mdp) values ('".$_GET['n']."','".$_GET['p']."','".$date."','".$_GET['mail']."','".$_GET['adr']."',".$_GET['num'].",'".$_GET['mot1']."')";
    $bdd->exec($sql);
  	//echo $sql;
  	
	
    
    echo '<meta http-equiv="Refresh" content="0;url=connexion.php">';
}

?>
</head>
<body>

	
</body>
</html>