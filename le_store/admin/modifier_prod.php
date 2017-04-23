
	<!DOCTYPE html>
<html>
<head>
  <title>Le Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css/responsive.css">
      <link rel="stylesheet" type="text/css" href="../css1/style.css">
  
</head>
<body>
  <p>zeboubbbba </p>
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
     
    <div class="collapse navbar-collapse" id="myNavbar" > 
      <ul class="nav navbar-nav navbar-right">
        <li><a class="js-scrollTo" href="../admin.php#produit">Produit</a></li>
        <li><a class="js-scrollTo" href="admin/ajouter_prod">Ajouter produit</a></li>
        <li><a class="js-scrollTo" href="admin/client.php">Espace client</a></li>
        <li><a class="js-scrollTo" href="admin/commande.php">Espace commande</a></li>
        <li><a class="js-scrollTo" href="../admin.php#admin">Espace administrateur</a></li>
        <li><a class="js-scrollTo" href="deconnexion.php">DECONNEXION</a></li>
   

      </ul>
    </div>

      </div>
  </nav>
  <?php
	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	session_start();


	$prod=$_GET['id_proda'];
	echo $prod;
	$a="SELECT * FROM produit WHERE id_produit=$prod; ";
	echo $a;
	$rp=$bdd->query($a);
  $ibr = $rp ->fetch()
  
 ?> 
	
	 <div class="col-lg-2 col-md-2 col-sm-2 dim">
 		<form  action="modifier.php" method="GET" autocomplete="off">

            <?php echo "<img src=".$ibr['url_photo']." height='130' width='130'>";    ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
              <input type="text" name="n" value="<?php echo $ibr['Nom_produit']; ?>">
               <p class="parag">
             <input type="text" name"q" value"<?php echo $ibr['Quantite']. '€'; ?>" >
             <input type="text"  name="p"  value="<?php echo $ibr['Prix'] .' €'; ?>" >
            
            </br> 
             
            </br>
            <input  type="submit" value="Modifier produit">
        </form>

     </div>
</body>
</html>    