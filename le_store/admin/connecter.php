<!DOCTYPE html>
<html>
<head>
 
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" /> 
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <link rel="stylesheet" type="text/css" href="../css/responsive.css">
 
 <title>connecter</title>
 
<?php
session_start();

$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
?>
</head>
<body>
 <?php
if(!isset($_SSESION['client'])){
if(($_GET['mail']=="")||($_GET['mdp']=="")){

        echo '<meta http-equiv="Refresh"
content="0;url=connexion.php?Email='.$_GET['mail'].'">';
}
else{

	$ibr="select *  from administrateur  where administrateur.Mail_admin='".$_GET['mail']."' and administrateur.mot_de_passe='".$_GET['mdp']."'";
	//echo $ibr;
	$rep1 = $bdd->query($ibr);
	$vect=$rep1->fetch();
	//print_r($rep);
	 /* while($var=$rep->fetch()){
    //print_r($line);
    array_push($clt, $var); 
   }*/
	//print_r($clt);
	//echo $clt['Nom_client'];
	$_SESSION['admin']=array($vect['Nom_admin'],$vect['Prenom_admin'],$vect['id_admin']);
	//$_SESSION['client']=array('.$clt[Nom_client].','.$clt[Prenom_client].','.$clt[Adresse].','.$clt[id_client].');
	//echo $_SESSION['admin'][2];
	
	
	}	
}

	echo '<meta http-equiv="Refresh" content="0;url=../admin.php">';

?>
 
 
 </body>
 
 </html>