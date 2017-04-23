<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"	href="style.css"	type="text/css"	
media="screen"	/>	 
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" /> 
 <title>contactez_nous</title>

<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
if(($_GET['nc']=="")||($_GET['mailc']=="")||($_GET['msg']=="")){

        echo '<meta http-equiv="Refresh"content="0;url=index.php#CONTACTEZ">';
}
else{
	//enregistrer($_GET['n'],$_GET['p'],$_GET['age'],$_GET['mail'],$_GET['adr'],$_GET['num'],$_GET['mot1'],$bdd);
    $sql="insert into message_client (Nom_client,message) values ('".$_GET['nc']."','".$_GET['msg']."')";
    $bdd->exec($sql);
  	//echo $sql;
    echo '<meta http-equiv="Refresh" content="0;url=index.php">';
}

?>
</head>
<body>

	
</body>
</html>