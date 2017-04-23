<?php

	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	session_start();
	echo $_GET['id_proda'];
	$mod="UPDATE produit SET adresse="3, rue des tulipes", age="65" WHERE nom="Benoît"";
	echo $req;
	//$bdd->supp($rep);


?>