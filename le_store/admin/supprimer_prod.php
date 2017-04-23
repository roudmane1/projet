<?php
	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	session_start();
	echo $_GET['id_proda'];
	$req1="DELETE  FROM se_composer WHERE id_produit=".$_GET['id_proda']." ;";
	echo $req1;
	//$bdd->exq($rep);
	
	$req2="DELETE FROM produit WHERE id_produit=".$_GET['id_proda']." ;";
	echo $req2;
//	$bdd->supp($rep);
//	echo '<meta http-equiv="Refresh" content="0;url=../admin.php">';
//supprimer de commande la ou 
?>