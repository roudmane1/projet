<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet"	href="lestore.css"	type="text/css"	
media="screen"	/>	 
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" /> 
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
 <title>nouveau_client</title>
<div class="">
</div>	
</head>
<body>
  <nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="197">
  <div class="container">
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<form method="post" action="">
<input type="text" name="Motcle"/>
<input type="submit" name="chercher" value="chercher"/>
</form>
      <a class="navbar-brand" href="#"><img class="logo" src="image/LOGO.jpg"></a>
    <div class="collapse navbar-collapse" id="myNavbar" > 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">ACCEUIL</a></li>
        <li><a class="js-scrollTo" href="index.php#NOUVEAUTE">NOUVEAUTE</a></li>
        <li><a class="js-scrollTo" href="index.php#TABLETTE">TABLETTE</a></li>
        <li><a class="js-scrollTo" href="index.php#PC">PC</a></li>
        <li><a class="js-scrollTo" href="index.php#TELEPHONES">TELEPHONES</a></li>
        <li><a class="js-scrollTo" href="index.php#equipe">EQUIPE</a></li>
        <li><a class="js-scrollTo" href="panier.php">VOTRE PANIER</a></li>
        <li><a class="js-scrollTo" href="index.php#CONTACTEZ">CONTACTEZ NOUS</a></li>

      </ul>
    </div>

  </div>
</nav>





<br>
<br>
<br>
<br>
<br>
<div align="center">
	<h2>Créez votre compte</h2>
	<br/><br/>
		<form action="enregistrer.php" method="GET" autocomplete="off">
<table>
	<tr>
	<td align="right"><p>Nom : </td> <td><input type="text" placeholder="votre nom" name="n" value="<?php if(isset($_GET['n']))
echo $_GET['n']; ?>"/>
</p>
</td>
</tr>
<tr>
	<td align="right"><p>Prenom : </td><td> <input type="text"placeholder="votre prénom" name="p" value="<?php
if(isset($_GET['p'])) echo $_GET['p']; ?>"/>
</p>
</td></tr>
<tr>
	<td align="right"><p>Date de naissance :</td><td> 

<?php
echo "<SELECT name='i' Size='1'>";
 //Lister les jours
     for($i=1; $i<=31;$i++){        
 //Lister les jours pour pouvoir leur ajouter un 0 devant
               if ($i < 10){            
              echo "<OPTION>0$i<br></OPTION>";
                   }
               else {
              echo "<OPTION>$i<br></OPTION>";
                    }
                          }
echo "</SELECT>";
 
echo '<SELECT name="d" Size="1">';
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
 
$date = 2000;       //On prend l'année en cours
     
echo '<SELECT name="y" Size="1">';
 
     for ($y=1970; $y<=$date; $y++) {           //De l'année 2000 à l'année actuelle
         echo "<OPTION><br>$y<br></OPTION>"; }
echo "</SELECT>";
?>
	<?php //pour calculer l'age il suffit d'utiliser date('Y') qui donne l'année en cours 
if(isset($_GET['age'])) echo $_GET['age']; ?>
</p>
</td>
</tr>


<tr>
	<td align="right"><p>Adresse email : </td><td> <input type="mail" placeholder="votre mail" name="mail" value="<?php             
if(isset($_GET['mail']))
echo $_GET['mail']; ?>"/>
</p>
</td>
</tr>

<tr>
	<td align="right"><p>Adresse : </td><td> <input type="num" placeholder="votre adresse" name="adr" value="<?php
if(isset($_GET['adr'])) echo $_GET['adr'];?>"/>
</p>
</td></tr>
<tr>
	<td align="right"><p>Numero de telephone :</td><td>  <input type="num" placeholder="votre numéro de tel" name="num" value="<?php
if(isset($_GET['num'])) echo $_GET['num']; ?>"/>
</p>
</td>
</tr>

<tr>
	<td align="right"><p>Mot de passe : </td><td> <input type="password" placeholder="saisir le mot de passe "name="mot1" value=""/>
</p>
</td></tr>
<tr>
<td align="right"><p>Confirmer le Mot de passe : </td><td> <input type="password" placeholder="confirmation du mdp" name="mot2" value=""/>
</p>
</td></tr>

<tr><td></td><td>
<input type="submit" value="Création du compte"></td></tr>
</table>
</form>
</div>
</body>
</html>



















