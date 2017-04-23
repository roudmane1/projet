<!DOCTYPE html>


<html>
<head>
  <title>Electronics store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();
?>
</head>
<body>
	<nav class="navbar navbar-fixed-top" data-spy="affix" data-offset-top="197">
  <div class="container">
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
<?php if(isset($_SESSION['admin'])){ ?>      
<form method="post" action="">
<input type="text" name="Motcle"/>
<input type="submit" name="chercher" value="chercher"/>
</form>
     
    <div class="collapse navbar-collapse" id="myNavbar" > 
      <ul class="nav navbar-nav navbar-right">
        <li><a class="js-scrollTo" href="#produit">Produit</a></li>
        <li><a class="js-scrollTo" href="admin/ajouter_prod">Ajouter produit</a></li>
        <li><a class="js-scrollTo" href="admin/client.php">Espace client</a></li>
        <li><a class="js-scrollTo" href="admin/commande.php">Espace commande</a></li>
        <li><a class="js-scrollTo" href="admin/messagerie.php">Espace messsagerie</a></li>
        <li><a class="js-scrollTo" href="deconnexion.php">DECONNEXION</a></li>
   

      </ul>
    </div>

  </div>
</nav>

<div class="container-fluid space" id="Produit">
    <div class="row">
        <div class="container">
          <h1>
            PRODUIT
          </h1>
          <div class="space"></div>
              <p class="parag">
  
              </p>
              <?php
//la commande permettant de selction les tablettes parmi nos produit dans notre base de donnée 
   $sqla="select * from produit  ";
   $repa = $bdd->query($sqla);
   //$line = $rep ->fetch();

$seqa=array();
   while($line = $repa ->fetch()){
    //print_r($line);
    array_push($seqa, $line); 
   }
  // print_r($seq);


  /*   echo"<table>";
  while ($line = $rep ->fetch()) { 

  echo "<tr>";
  echo "<td>".$line['Nom_produit']."</td>";
  echo "<td>".$line['Prix']."</td>"; 
  echo "<td><img src=".$line['url_photo']." height='130' width='130'></td>";
  echo "</tr>";
}
echo"</table>";
 <div class="col-lg-2 col-md-2 col-sm-2 dim">
             
          <?php echo "<img src=".$line['url_photo']." height='130' width='130'>";    ?>         
          
            </div>
                <h1> <?php echo $line['Nom_produit']; ?></h1>
               <p class="parag">
                  <table>
                    <tr>
                        <td>
                          <?php echo $line['Prix'] .' €'; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                          <form action="connexion.php" method="GET" autocomplete="off">
                             <input type="submit" value="Ajouter au panier">
                           </form>  
                         </td>
                     </tr>
                    </table>
                    <?php } ?>       
              </p>
            </div>
*/
     ?>
    <div class="space"></div>   
        </div>
      </div>
                <?php $i=0;  while ($i<count($seqa)) { ?>

      <div class="space"></div>
         <div class="row">
        <div class="container">
           <div class="col-lg-2 col-md-2 c ol-sm-2 dim">
           <form  action="modifier_prod.php" method="GET" autocomplete="off"> 

           <form  action="admin/supprimer_prod.php" method="GET" autocomplete="off"> 

          
            <?php echo "<img src=".$seqa[$i]['url_photo']." height='130' width='130'>";    ?>
            <input type="hidden"  name="id_proda" value="<?php echo $seqa[$i]['id_produit'];?>" >

 
             </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seqa[$i]['Nom_produit']; ?></h1>
               <p class="parag">
              <p>Prix : <?php echo $seqa[$i]['Prix'] .' €'; ?></p>
             </br>
            
            <input  type="submit" value="Modifer produit">

            </form>
        <input  type="submit" value="supprimer produit">
      </form>

              </p>
            </div>
           <div class="col-lg-2 col-md-2 col-sm-2 dim">
        <form  action="admin/supprimer_prod.php" method="GET" autocomplete="off">

           <form  action="admin/modifier_prod.php" method="GET" autocomplete="off">

            <?php echo "<img src=".$seqa[$i+1]['url_photo']." height='130' width='130'>";    ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seqa[$i+1]['Nom_produit']; ?></h1>
               <p class="parag">
                 <p>Prix :<?php echo $seqa[$i+1]['Prix'] .' €'; ?></p>
            </br> 
             
            </br>
            <input  type="submit" value="Modifier produit">
            <input type="hidden" value="<?php echo $seqa[$i+1]['id_produit'];?>" name="id_proda">

             </form>
          <input  type="submit" value="supprimer produit">
        </form>
                </p>
            </div>
            </div>
            </div>
            <?php $i=$i+2; } ?>


 <?php }else { ?>

<div align="center">
	<h2>Se connecter</h2>
<br/><br/>
<form action="admin/connecter.php" method="GET" autocomplete="off">
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



  </table>
</form>
</div>
<?php } ?>

</body>
</html>