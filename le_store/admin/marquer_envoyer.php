<!DOCTYPE html>


<html lang="en">
<head>
</head>
<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
		session_start();
		
	if(isset($_SESSION['temp_env'])){
		$val1=$_SESSION['temp_env'][0][0];
		echo $_SESSION['admin'][2];
			
       $sql_env="insert into marquer_comme_envoye(id_admin,id_commande) values ('".$val1."','".$_SESSION['admin'][2]."')";
        
       	//echo $sql_env;
        $bdd->exec($sql_env);
        echo '<meta http-equiv="Refresh" content="0;url=commande.php">';
         //redirection dans 10 secode ou clique here 
     }
               unset($_SESSION['temp_env']);  

?>

</html>
