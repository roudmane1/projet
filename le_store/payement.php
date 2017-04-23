<!DOCTYPE html>


<html lang="en">
<head>
  <title>Payemant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">

	<?php
	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	 session_start();
	$_SESSION['liv']=array();
	//echo $_GET["id_liv"] ;
	
	array_push($_SESSION['liv'],array($_GET['id_liv'])) ;//permet de recuperer le mode de livraison en lemettant dans une session 
	//print_r($_SESSION['liv']); 
	?>
</head>
<body>
	</br>
	</br>
	</br>
	<form action="payer.php" method="POST" autocomplete="off">
		<div align="center">
		<table>
			<tr>
				<td align="left">
				Titulaire de la carte :</td><td><input type="text" value="<?php echo $_SESSION['client'][0]." ".$_SESSION['client'][1];?> "/>
				</td>
			</tr>	
			<tr>
				<td align="left">
				Numéro de carte :</td><td><input  type="num" value=""/>
				</td>
			</tr>		
			<tr>
				<td align="left">
				Date d'expiration :
				</td>
				<td>
			<?php	echo '<SELECT name="d" Size="1">';
 					//Lister les mois
     				for($d=1; $d<=12;$d++){        
					 //Lister les jours pour pouvoir leur ajouter un 0 devant
               		if ($d < 10){            
              		echo "<OPTION>0$d<br></OPTION>";
                   }
               		else {
              		echo "<OPTION>$d<br></OPTION>";
                    }
                          }
					echo "</SELECT>";
 
				$date = date('Y');       //On prend l'année en cours
     			$dm=$date+4;
					echo '<SELECT name="y" Size="1">';
 
    			 for ($y=$date; $y<=$dm; $y++) {           //De l'année 2000 à l'année actuelle
        		 echo "<OPTION><br>$y<br></OPTION>"; }
					echo "</SELECT>";
				?>
				</td>
			</tr>
			<tr>
				<td align="left">
				Criptograpramme visuel :</td><td> <input type="num" value=" "/>
				</td>
				<td>
				<p id="crypto"> 3 derniers chiffres au dos de votre carte à droite de la signature<p/>
				</td>
			</tr>
		</table>
		<div align="center"><input type="radio" onclick="memorisation" name="genre" value="M">Mémoriser votre carte pour un prochain achat 
		</br>
		</br>
		Je valide et je paie
		</div>
		</br>
		<input  type="submit" value="Valider">
		<div>
	</form>