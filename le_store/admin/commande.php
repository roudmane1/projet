<!DOCTYPE html>


<html lang="en">
<head>
  <title>Espace commande </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">

      <link rel="stylesheet" type="text/css" href="../css1/style.css">
<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();
?>
</head>
<body>
  <div class="container">
    
<?php  if(isset($_SESSION['admin'])){ ?>      
<form method="post" action="">
<input type="text" name="Motcle"/>
<input type="submit" name="chercher" value="chercher"/>
</form>
     
    <div class="collapse navbar-collapse" id="myNavbar" > 
      <ul class="nav navbar-nav navbar-right">
        <li><a class="js-scrollTo" href="../admin.php#produit">Produit</a></li>
        <li><a class="js-scrollTo" href="ajouter_prod">Ajouter produit</a></li>
        <li><a class="js-scrollTo" href="client.php">Espace client</a></li>
        <li><a class="js-scrollTo" href="commande.php">Espace commande</a></li>
        <li><a class="js-scrollTo" href="../admin.php">Espace administrateur</a></li>
        <li><a class="js-scrollTo" href="../deconnexion.php">DECONNEXION</a></li>
   

      </ul>
    </div>

  </div>
</nav>

<body>
<div align="center">
  <br/><br/><br/>
  <h2>Espace commande </h2>
<br/><br/>    
              <?php 
//la commande permettant de selction les tablettes parmi nos produit dans notre base de donnée 
   $sqla="select * from commande  ";
  // echo $sqla;

   $repa = $bdd->query($sqla);
   //$line = $rep ->fetch();

  $co=array();
   while($line = $repa ->fetch()){
    //print_r($line);
    array_push($co, $line); 
   }
   //print_r($se);
  ?>
</div>
</div>
    <table align="center" border="2px" color="black" >
      <tr>
        <td align="center">
          Id_commande
        </td>  
        <td align="center">
          Date commande
        </td>
        <td align="center">
          Id_client
        </td>
        <td align="center">
          Id_livraison
        </td>
        <td>
          Valider
        </td>
        <td>
          Envoyer
        </td>
        <td>
          Décision
        </td>
        
      </tr>
<?php for ($i=0; $i <count($co) ; $i++) { ?>
  
<form action="decision.php" method="GET" autocomplete="off">
      <tr>
        <td align="center">
          <?php echo $co[$i]['id_commande']   ;?>
          <input type="hidden"  name="id_com" value="<?php echo $co[$i]['id_commande']   ;?>" >
         </td>
         <td align="center">
          <?php echo $co[$i]['Date_commande']   ;?>
         </td> 
         <td align="center">
           <?php echo $co[$i]['id_client']   ;?>
          <input type="hidden"  name="id_clt" value="<?php echo $co[$i]['id_client']   ;?>" >

         </td>
         <td align="center">
           <?php echo $co[$i]['id_livraison']   ;?>
         </td>
        <td>
          <input type="radio"  name="valider" value="V">
         </td>
         <td>
          <input type="radio"  name="envoyer" value="E">
        </td>
        <td>
          <input type="submit" value="">

        </td>
       </tr>
    </form>  
      <?php }?> 
     </table>

   
  <?php }?>
  </div>
</body>
</html>