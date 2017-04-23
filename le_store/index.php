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

<form method="post" action="">
<input type="text" name="Motcle"/>
<input type="submit" name="chercher" value="chercher"/>
</form>
    <?php
        
          if(isset($_SESSION['client'])){

          echo $_SESSION['client'][0]."  ".$_SESSION['client'][1];
}
?>

      <a class="navbar-brand" href="#"><img class="logo" src="image/LOGO.jpg"></a>
    <div class="collapse navbar-collapse" id="myNavbar" > 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="">ACCEUIL</a></li>
        <li><a class="js-scrollTo" href="#NOUVEAUTE">NOUVEAUTE</a></li>
        <li><a class="js-scrollTo" href="#TABLETTE">TABLETTE</a></li>
        <li><a class="js-scrollTo" href="#PC">PC</a></li>
        <li><a class="js-scrollTo" href="#TELEPHONES">TELEPHONES</a></li>
        <li><a class="js-scrollTo" href="#equipe">EQUIPE</a></li>
        <li><a class="js-scrollTo" href="panier.php">VOTRE PANIER</a></li>
        <li><a class="js-scrollTo" href="#CONTACTEZ">CONTACTEZ NOUS</a></li>
        <?php if(isset($_SESSION['client'])){ ?>
        <li><a class="js-scrollTo" href="deconnexion.php">DECONNEXION</a></li>
        <?php } ?>

      </ul>
    </div>

  </div>
</nav>





<br>
<br>
<br>
<br>
<br>

 <div id="slider" >
<figure>
<img src="fig.png" height:"100px">

<img src="image/promo2.jpg">
</figure> 

</div>
     


 <div class="container-fluid space" id="TABLETTE">
    <div class="row">
        <div class="container">
          <h1>
            TABLETTE
          </h1>
          <div class="space"></div>
              <p class="parag">
    <?php //XXX?>
              </p>
              <?php
//la commande permettant de selction les tablettes parmi nos produit dans notre base de donnée 
   $sql="select P.id_produit, P.Nom_produit, P.Prix,P.url_photo from produit AS P, sous_categorie AS SS where P.id_sscat=SS.id_sscat and SS.nom_souscat='Tablette' ";
   $rep = $bdd->query($sql);
   //$line = $rep ->fetch();

$seq=array();
   while($line = $rep ->fetch()){
    //print_r($line);
    array_push($seq, $line); 
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
                <?php $i=0;  while ($i<count($seq)) { ?>

      <div class="space"></div>
         <div class="row">
        <div class="container">
           <div class="col-lg-2 col-md-2 c ol-sm-2 dim">
           <form  action="ajouter_panier.php" method="GET" autocomplete="off"> 

            <?php echo "<img src=".$seq[$i]['url_photo']." height='130' width='130'>";    ?>
            <input type="hidden"  name="id_prod" value="<?php echo $seq[$i]['id_produit'] ;?>" >

 
             </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seq[$i]['Nom_produit']; ?></h1>
               <p class="parag"></p>
              <p>Prix: <?php echo $seq[$i]['Prix'] .' €'; ?></p>
             </br>
             <p> Quantité :<input type="number" name="q" /> </p>
            </br>
            <input  type="submit" value="Ajouter au panier">
            </form>
              </p>
            </div>
           <div class="col-lg-2 col-md-2 col-sm-2 dim">
           <form  action="ajouter_panier.php" method="GET" autocomplete="off">

            <?php echo "<img src=".$seq[$i+1]['url_photo']." height='130' width='130'>";    ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seq[$i+1]['Nom_produit']; ?></h1>
               <p class="parag"></p>
              <p>Prix: <?php echo $seq[$i+1]['Prix'] .' €'; ?></p>
            </br> 
             <p> Quantité :<input type="number" name="q" /> </p>
            </br>
            <input  type="submit" value="Ajouter au panier">
            <input type="hidden" value="<?php echo $seq[$i+1]['id_produit'] ;?>" name="id_prod">

             </form>
                </p>
            </div>
            </div>
            </div>
            <?php $i=$i+2; } ?>
              <div class="space"></div> 
        <div class="row section">
          <div class="bg2">
          <div class="container">
                  
                    <p class="parag">
                   </p> 
               
             </div>
     </div>
        </div>
 <div class="container-fluid space" id="PC">
    <div class="row">
        <div class="container">
          <h1>
            PC
          </h1>
          <div class="space"></div>
              <p class="parag">
   <?php //XXX?>
              </p>
              <?php
//la commande permettant de selction les pc parmi nos produit dans notre base de donnée 
   $sqlt="select P.id_produit, P.Nom_produit, P.Prix,P.url_photo from produit AS P, sous_categorie AS SS where P.id_sscat=SS.id_sscat and SS.nom_souscat='Computer Peripherals' ";
   $rept = $bdd->query($sqlt);
   //echo $sqlt;
   //$line = $rep ->fetch();

   $seqt=array();
   while($line = $rept->fetch()){
    //print_r($line);
    array_push($seqt, $line); 
   }?>
    <div class="space"></div>   
        </div>
      </div>
                <?php $i=0;  while ($i<count($seqt)) { ?>

      <div class="space"></div>
         <div class="row">
        <div class="container">
           <div class="col-lg-2 col-md-2 c ol-sm-2 dim">
             <form  action="ajouter_panier.php" method="GET" autocomplete="off">

            <?php echo "<img src=".$seqt[$i]['url_photo']." height='130' width='130'>";    ?>
            <input type="hidden" value="<?php echo $seqt[$i]['id_produit'] ;?>" name="id_prod">
                 
             </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seqt[$i]['Nom_produit']; ?></h1>
               <p class="parag"></p>
              <p>Prix:<?php echo $seqt[$i]['Prix'] .' €'; ?></p>
             </br>

             <p> Quantité :<input type="number" name="q" /> </p>
            </br>
             <input  type="submit" value="Ajouter au panier">
              </form>
              </p>
            </div>
           <div class="col-lg-2 col-md-2 col-sm-2 dim">
            <form  action="ajouter_panier.php" method="GET" autocomplete="off">

            <?php echo "<img src=".$seqt[$i+1]['url_photo']." height='130' width='130'>";    ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seqt[$i+1]['Nom_produit']; ?></h1>
               <p class="parag"></p>
              <p>Prix:<?php echo $seqt[$i+1]['Prix'] .' €'; ?></p>
            </br>
             <p> Quantité :<input type="number" name="q" /> </p>
            </br>
             
            <input  type="submit" value="Ajouter au panier">
            <input type="hidden" value="<?php echo $seqt[$i+1]['id_produit'] ;?>" name="id-prod" >    

            </form>
             </p>
            </div>
          </div>
            </div>
            <?php $i=$i+2; } ?>
   <div class="space"></div> 
        <div class="row section">
          <div class="bg2">
          <div class="container">
                  
                    <p class="parag">
             </p> 
               
             </div>
     </div>
        </div>
 <div class="container-fluid space" id="TELEPHONES">
    <div class="row">
        <div class="container">
          <h1>
            TELEPHONES 
          </h1>
          <div class="space"></div>
              <p class="parag">
  <?php //XXX?>
              </p>
    <?php
//la commande permettant de selction les pc parmi nos produit dans notre base de donnée 
   $tel="select P.id_produit,P.Nom_produit, P.Prix,P.url_photo from produit AS P, sous_categorie AS SS where P.id_sscat=SS.id_sscat and SS.nom_souscat='Telephones and Communication' ";
   $reptel=$bdd->query($tel);
   //echo $tel;

   $seqtel=array();
   while($line = $reptel->fetch()){
    //print_r($line); 
    array_push($seqtel, $line); 
   }?>
    <div class="space"></div>   
        </div>
      </div>
                <?php $i=0;  while ($i<count($seqtel)) { ?>

      <div class="space"></div>
         <div class="row">
        <div class="container">
          <form  action="ajouter_panier.php" method="GET" autocomplete="off">
            <div class="col-lg-2 col-md-2 c ol-sm-2 dim">
            <?php echo "<img src=".$seqtel[$i]['url_photo']." height='130' width='130'>";    ?>
            <input type="hidden" value="<?php echo $seqtel[$i]['id_produit'] ;?>" name="id_prod">
            <?php //j'ai changé la valeur de value ?>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
            <h1><?php echo $seqtel[$i]['Nom_produit']; ?></h1>
            <p class="parag"></p>
              <p>Prix:<?php echo $seqtel[$i]['Prix'] .' €'; ?></p>
            </br>
            <p> Quantité :<input type="number" name="q" /> </p>
            </br>
             <input  type="submit" value="Ajouter au panier">
            </form>
            </p>
            </div>
           <div class="col-lg-2 col-md-2 col-sm-2 dim">
            <form  action="ajouter_panier.php" method="GET" autocomplete="off">
            <?php echo "<img src=".$seqtel[$i+1]['url_photo']." height='130' width='130'>";    ?>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-10">
                <h1><?php echo $seqtel[$i+1]['Nom_produit']; ?></h1>
               <p class="parag"></p>
              <p>Prix:  <?php echo $seqtel[$i+1]['Prix'] . ' €'; ?></p>
               </br>
               <p> Quantité :<input type="number" name="q" /> </p>
              </br>
             
               <input  type="submit" value="Ajouter au panier">
               <input type="hidden" value="<?php echo $seqtel[$i+1]['id_produit'] ;?>" name"id_produit">

            </form>
             </p>
            </div>
          </div>
            </div>
            <?php $i=$i+2; } ?> 
             <div class="space"></div> 
        <div class="row section">
          <div class="bg2">
          <div class="container">
                  
                    <p class="parag">
              </p> 
               
             </div>
     </div>
        </div>
 <div class="container-fluid" id="equipe">
 <div class="space2"></div>
    <div class="row">
        <div class="container">
          <h1>
            l'EQUIPE
          </h1>
             <div class="space"></div>
              <p class="parag">
<?php //XXX?>
            </p>
        </div>
      </div>
      
         
          </div>
            <div class="col-md-1 col-lg-1 col-sm-1 dim ">
              <img src="image/mounir.png">
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2 ajustement">
            <h4>
              ROUDMANE Idriss 
            </h4>
             <p class="parag">
			       Bases de données, developpement & Programmation      </p>
          </div>

          <div class="col-md-1 col-lg-1 col-sm-1 dim">
            <img src="image/mounir.png">
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2 ajustement">
            <h4>
              HAMMAD Oussama 
            </h4>
             <p class="parag">
			       Bases de données              </p>
          </div>
            <div class="col-md-1 col-lg-1 col-sm-1 dim ">
              <img src="image/mounir.png">
          </div>
          <div class="col-md-2 col-lg-2 col-sm-2 ajustement">
            <h4>
              JENDARA Yassine
            </h4>
             <p class="parag">
              developpement & Programmation
              </p>
          </div>
       
           
     
        </div>
      </div>
  </div>
  
    
 
</div>
  <div class="space"></div>
<div class="container-fluid" >
    <div class="row section">

     <div class="bg4">
     </div>
   </div>
<div class="space"></div> 
        <div class="row section">
          <div class="bg2">
          <div class="container">
                  
                    <p class="parag">
             </p> 
               
             </div>
     </div>
        </div>
    <div class="space2"></div>
    <div class="row">
        <div class="container" id="CONTACTEZ">
          <h1>
         CONTACTEZ NOUS
          </h1>
            <div class="space"></div>
              <p class="parag">
               <?php //XXX?>
              </p>
            <div class="space"></div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-md-6 col-lg-6 col-sm-5">
<div class="glyphicon glyphicon-earphone sp col-md-12 col-lg-12 col-sm-12"><span class="text"> 0499234567</span></div>

<div class="glyphicon glyphicon-home sp col-md-12 col-lg-12 col-sm-12"><span class="text"> Montpellier</span></div>
<div class="glyphicon glyphicon-envelope sp col-md-12 col-lg-12 col-sm-12"><span class="text"> contact@lestore.fr</span></div>
<div class="glyphicon glyphicon-globe sp col-md-12 col-lg-12 col-sm-12"><span class="text"> le_store/index.php</span></div>
           <div class="sp col-md-12 col-lg-12 col-sm-12">
            <SPAN class="fa fa-facebook-square"></SPAN><span class="text">fb/le stor/</span><br/>
            <SPAN class="fa fa-twitter-square"></SPAN><span class="text"> </span>
          </div>
          </div>
          
          <div class="col-md-6 col-lg-6 col-sm-7">
            <div class="col-md-4 col-lg-4 col-sm-4">
                <div class="text sp"> Nom Complet </div>
                <div class="text sp"> Telephone</div>
                <div class="text sp"> Email </div>
                <div class="text sp"> Message </div>

            </div>
            <div class="col-md-8 col-lg-8 col-sm-8">
              <form action="contactez_nous.php" method="GET" autocomplete="off">
                <input class="sp for" type="text" placeholder="votre nom complet" name="nc" value="<?php if(isset($_GET['nc']))
echo $_GET['nc']; ?>"/>
                <input class="sp for" type="num" placeholder="votre numéro de téléphone" name="telc" value="<?php if(isset($_GET['telc']))
echo $_GET['telc']; ?>"/>
                <input class="sp for" type="text" placeholder="votre mail" name="mailc" value="<?php if(isset($_GET['mailc']))
echo $_GET['mailc']; ?>"/>
                <textarea class="sp for"  placeholder="votre message" name="msg" value="<?php if(isset($_GET['msg']))
echo $_GET['msg']; ?>"/></textarea>
                <input type="submit" value="Envoyer">
              </form> 
            </div>
           
        </div>
        </div>
    </div>
  </div>
  <div class="space"></div>
<div class="container-fluid" >
    <div class="row">
      <div class="footer">
      <div class="container">
         
      </div>
    </div>
    </div>
  </div>




</body>
</html>

