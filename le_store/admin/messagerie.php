<!DOCTYPE html>


<html lang="en">
<head>
  <title>Le Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
<?php 
 	$s="select * from message_client ";
   echo $s;
   //pour implementer la table se compose $quantite=echo $_SESSION['panier'][0][3];
   //$prix_com=$_GET['id_cpt'];
   $repa = $bdd->query($s);

?>
</head>
<body>
<?php
	$c=array();
   while($line = $repa ->fetch()){
    //print_r($line);
    array_push($c, $line); 
   }
   //print_r($se);
  ?>
</div>
</div>
    <table align="center" border="2px" color="black" >
      <tr>
        <td align="center">
        Id_messagerie
        </td>  
        <td align="center">
        Nom client 
        </td>
        <td align="center">
        Message
        </td>
       
      </tr>
<?php for ($i=0; $i <count($c) ; $i++) { ?>
  
<form action="decision.php" method="GET" autocomplete="off">
      <tr>
        <td align="center">
          <?php echo $c[$i]['id_mess']   ;?>
          <input type="hidden"  name="id_com" value="<?php echo $co[$i]['id_commande']   ;?>" >
         </td>
         <td align="center">
          <?php echo $c[$i]['Nom_client']   ;?>
         </td> 
         <td align="center">
           <?php echo $c[$i]['message']   ;?>
          <input type="hidden"  name="id_clt" value="<?php echo $co[$i]['id_client']   ;?>" >

         </td>
       
       </tr>
    </form>  
      <?php }?> 
     </table>
</body>

</html>