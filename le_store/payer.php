 		<html lang="en">
<head>
  <title>livraisant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
</head>      
<?php
		$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
		session_start();
		if($_SESSION['liv'][0]==1){
 		$liv='suivi';
 		}else $liv='recemmande';
 		//echo $liv;   
 		$date=date('Y-m-d'); 
 		//echo $date; 
 		$id_livr= $_SESSION['liv'][0][0];
 		//print_r($_SESSION['liv'][0][0]);
 		//echo $id_livr;
        $sql_liv="insert into commande(Date_commande,id_livraison,id_client) values ('".$date."','".$_SESSION['liv'][0][0]."','".$_SESSION['client'][3]."')";
        
       	//echo $sql_liv;
         $bdd->exec($sql_liv);
        // echo '<meta http-equiv="Refresh" content="0;url=index.php">';
         //redirection dans 10 secode ou clique here 
?>     
<body>
<h3 align="center"> Le payement a été effectué avec succes <br/> merci pour votre confiance à bientot </h3>
<p align="center"> vous allez etre redirectioner dans 5 sec ou en cliquant<a href=index.php> ici  </a></p>
<?php unset($_SESSION['panier']); ?>
<?php echo '<meta http-equiv="Refresh" content="5;url=index.php">'; ?>

</body>      
</html>