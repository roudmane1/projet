<!DOCTYPE html>


<html lang="en">
<head>
  <title>space client</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <link rel="stylesheet" type="text/css" href="../css1/style.css">
<?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();
?>
</head>
<body>
  <div class="container">
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
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
  <h2>Espace client </h2>
<br/><br/>    
              <?php 
//la commande permettant de selction les tablettes parmi nos produit dans notre base de donnée 
   $sqla="select * from client  ";
   //echo $sqla;

   $repa = $bdd->query($sqla);
   //$line = $rep ->fetch();

  $se=array();
   while($line = $repa ->fetch()){
    //print_r($line);
    array_push($se, $line); 
   }
   //print_r($se);
  ?>
</div>
</div>
    <table align="center" border="2px" color="black" >
      <tr>
        <td align="center">
          Id_client 
        </td>  
        <td align="center">
          Nom 
        </td>
        <td align="center">
          Prénom 
        </td>
        <td align="center">
          Mail
        </td>
        <td align="center">
          adresse
        </td align="center">
        <td>
          Numéro de telephone 
        </td>
      </tr>
<?php for ($i=0; $i <count($se) ; $i++) { ?>
  

      <tr>
        <td align="center">
          <?php echo $se[$i]['id_client']   ;?>
         </td>
         <td >
          <?php echo $se[$i]['Nom_client']   ;?>
         </td> 
         <td >
           <?php echo $se[$i]['Prenom_client']   ;?>
         
         </td>
         <td >
           <?php echo $se[$i]['Mail_client']   ;?>
         </td>
         <td align="left">
           <?php echo $se[$i]['Adresse']   ;?>
         </td>
         <td align="center">
           <?php echo $se[$i]['Tel_client']   ;?>
         </td>
       </tr>
      <?php }?> 
     </table>
   
  <?php }?>
  </div>
</body>
</html>