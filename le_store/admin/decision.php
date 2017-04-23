<!DOCTYPE html>


<html lang="en">
<head>
</head>
<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();

	/*if(($_GET['envoyer']=" ")&($_GET['valider']=" ")){
		echo "zebi";
		//echo '<meta http-equiv="Refresh" content="0;url=commande.php">';
	}else{
		 */

		if ($_GET['envoyer']="E"){
		 	$_SESSION['temp_env']=array();
		 	array_push($_SESSION['temp_env'],$_GET['id_com']);
		 	//print_r($_SESSION['temp_env']);
		 	//echo $_SESSION['temp_env'][0][0];
		echo "test";
		//echo '<meta http-equiv="Refresh" content="0;url=marquer_envoyer.php">';
			}
		 if ($_GET['valider']="V") {
		$_SESSION['temp_val']=array();
				 	array_push($_SESSION['temp_val'],$_GET['id_com']);
				 	//print_r($_SESSION['temp_env']);
				 	//echo $_SESSION['temp_env'][0][0];
				//echo '<meta http-equiv="Refresh" content="0;url=valider.php">';
		}else{
				echo "toto dl 9Lawi";
				//echo '<meta http-equiv="Refresh" content="0;url=commande.php">';
			}
			
?>
</html>