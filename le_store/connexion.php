<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css"> 
<meta http-equiv="Content-Type"
content="text/html; charset=UTF-8" /> 
 <title>connexion</title>
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
        <li><a class="js-scrollTo" href="index.phppanier.php">VOTRE PANIER</a></li>
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
	<h2>Se connecter<h2>
<br/><br/>
<form action="connecter.php" method="GET" autocomplete="off">
  <table>
    <tr>
    	<td align="right">Adresse email :</td><td><input type="mail" placeholder="votre mail" name="mail" value="<?php
      if(isset($_GET['mail'])){
      echo $_GET['mail']; }?>"/>
      </p></td>
    </tr>
  <tr>
    <td>
    
       <p>  Mot de passe : </td><td> <input type="password" placeholder="votre mot de passe " name="mdp" value="<?php
      if(isset($_GET['mot1'])){
      echo $_GET['mot1'];} ?>"/>
  </p>
    </td></tr>
  <tr><td></td><td>

  <p>
  <input type="submit" value="Se connecter">
  </p>
  </td></tr>

  <tr><td></td><td>
  <tr><td></td><td>

  <p>

   <a align="center" href="nouveau.php" target="_blank">
   nouveau client 
  </a>

  </p>
  </td></tr>

  </table>
</form>
</div>
 </body>
 
 </html>