<!DOCTYPE html>


<html lang="en">
<head>
  <title>livraisant</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
      <link rel="stylesheet" type="text/css" href="css1/style_liv.css">

	<?php
	$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
	 session_start();
   $a="select * from livraison ";
  // echo $a;
   //pour implementer la table se compose $quantite=echo $_SESSION['panier'][0][3];
   //$prix_com=$_GET['id_cpt'];
   $rep = $bdd->query($a);
   $liv=array();
   $lin_liv=array();
   while($lin_liv = $rep ->fetch()){
    //print_r($line);
    array_push($liv, $lin_liv); 
   }
	?>
</head>
<body>
 <div align="center"> 
  <h4 id="h4_liv">Choisissez le mode de livraison pour votre colis</h4>
    <form action="payement.php" method="GET" autocomplete="off">

      <table id="tab_liv">
        <tr id="tr1">
           <th id="th">
           <p id="1"> Chez vous : <?php echo $_SESSION['client'][2];?></p>
           </th>  
        </tr>
        <tr class="bord">
            <td class="liv">
            <img class="img_liv" src="liv1.jpg" > 
            </td>
            <td class="liv">
                <div id="p_liv"> <?php echo $liv[0]['mode_de_liv'] ?></div> 
            </td>
            <td class="liv"> 
              <div id="p_liv2"><?php echo $liv[0]['prix_liv'] ?>€ </div>
            </td>
            <td class="liv">
              <input class="bout_liv" type="submit" value="Choisir"><input type="hidden"   value="<?php echo  $liv[0]['id_livraison'] ;?>" name="id_liv" >
            </td>  
        </tr>  
        <tr class="bord">
            <td class="liv">
            <img class="img_liv" src="liv2.jpg" >
            </td>
            <td class="liv"><div id="p_liv"><?php echo $liv[1]['mode_de_liv'] ?></div> 
            </td>
            <td class="liv"><div id="p_liv2"><?php echo $liv[1]['prix_liv'] ?>€ </div>
            </td>
            <td class="liv"><input class="bout_liv" type="submit" value="choisir"><input type="hidden"  name='id_liv' value="<?php echo  $liv[1]['id_livraison'] ;?>" >
            </td>  
        </tr> 
      </table>  
    </form>
 </div>   
   

</body> 
</html> 