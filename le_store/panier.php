<!DOCTYPE html>


<html >
<head>
  <title>Votre panier</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
      <link rel="stylesheet" type="text/css" href="css1/style2.css">

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
    <?php
    session_start();
    $bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
     $cpt=0;
?>
     <table>
               <tr>
                <td class="tab_pan">
                Produit :
                </td>  
                
               <td> &nbsp &nbsp </td>

                <td class="tab_pan">
                Nom produit :
                </td> 
                <td>&nbsp &nbsp </td>
                 <td class="tab_pan">
                Prix unitaire :
                </td> 
                 <td>&nbsp &nbsp </td>
                <td class="tab_pan">
                quantité :
                </td> 
                 <td>&nbsp &nbsp </td> 
                <td class="tab_pan">
                Prix :
                </td> 
                 <td>&nbsp &nbsp </td> 
             </tr> 
           </table>
<?php

        if(isset($_SESSION['panier'])){
          	/*echo "<table >";
            echo"<tr>";
            echo"<th>numero identifiant</th>";
            echo"<th>nom article</th>";
            echo"<th>prix</th>";
            echo"<th>numéro d'exemplaire</th>";
            echo"<th>Prix total</th>";
           
            echo"</tr>";
            */
            foreach ($_SESSION['panier'] AS $ham){
            $art=$ham[0];
            //echo $art;
            //echo $ham[3];
            //echo $ham[2];

            $qt=$ham[3];

            $rep = $bdd->query('select * from produit where id_produit="'.$art.'"');
            $val=$rep-> fetch();
           

   /*       	echo "<tr>";
          	echo "<td class='tab_pan'><img src=".$val['url_photo']." height='130' width='130'>"; "</td>";
            echo "</tr>"; 
            echo "<tr>" ;         
          	echo "<td class='tab_pan'>  ".$val['Nom_produit']."</td>";
            echo "</tr>";
            echo "<tr>";
          	echo "<td>".$val['Prix']."</td>"; 
          	echo "</tr>";
            echo "<tr>";
            echo "<td>".$qt."</td>"; 
            echo "</tr>";
            echo "<tr>";
          	echo "<td>".$qt*$val['Prix']."</td>";
          	echo "</tr>";
           
          	}
          echo "</table>";
  */  ?>
            <table>
              <tr>
                <td class="tab_pan">
                <?php echo "<img src=".$val['url_photo']. " height='100' width='100' >";?>
                </td>  
                
               <td> &nbsp &nbsp </td>

                <td class="tab_pan">
                <?php echo  $val['Nom_produit'] ;?>
                </td> 
                <td>&nbsp &nbsp </td>
                 <td class="tab_pan">
                <?php echo $val['Prix'].'€ ' ;?>
                </td> 
                 <td>&nbsp &nbsp </td>
                <td class="tab_pan">
                <?php echo $qt ;?>
                </td> 
                 <td>&nbsp &nbsp </td> 
                <td class="tab_pan">
                <?php echo $qt*$val['Prix'].' €' ;?>
                </td> 
                 <td>&nbsp &nbsp </td> 
             </tr>    

             
            </table> 
            <?php  $cpt=$cpt+$qt*$val['Prix']; } ?>
<div align="center"> <?php echo "Montant à regler " .$cpt. "  €"; ?> </div>

    <table>
        <tr>
          <td>
            <form action="index.php" method="GET">

            <input type="submit" value="Continuer mes achats"> </form>
          </td>
        
          <td>
            <form action="livraison.php" method="GET">
        <input type="hidden"  name="id_cpt" value="<?php echo $cpt?>" >

            <input type="submit" value="Passer la commande"> </form>
          </td>
        </tr>    
                <?php
                  } else {
                	       echo "vous n'aviez pas encore passer de commande veillez choisir les produits que vous désirez en cliquant"; ?> <a href="index.php">
                          ici
                          </a> 
                <?php
                         }
                ?> 
</div>
  
   </body>
   </html>
