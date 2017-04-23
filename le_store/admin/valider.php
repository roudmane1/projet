<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
		session_start();
		//recuperer les variables de la page

        $sql_val="insert into valider (id_commande,id_admin) values ('".$_SESSION['temp_val']."','".$_SESSION['admin'][2]."')";
        
       	echo $sql_val;
       // $bdd->exec($sql_liv);
        //echo '<meta http-equiv="Refresh" content="0;url=index.php">';
         //redirection dans 10 secode ou clique here 

?>