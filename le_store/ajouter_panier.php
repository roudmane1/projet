<!DOCTYPE html>


<html >
<head>
  <title>Le Store</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/responsive.css">
      <link rel="stylesheet" type="text/css" href="css1/style.css">
   </head> 
    <body>
    <?php
$bdd= new PDO('mysql:host=localhost;dbname=le_store;charset=utf8', 'root', '');
session_start();

  if(!isset($_SESSION['client'])){
    if(!isset($_SESSION['temp'])){
            $_SESSION['temp']=array();
            array_push($_SESSION['temp'],array($_GET['id_prod'],$_GET['q']));
            
             //echo $_SESSION['temp'][0][0];
             //print_r($_SESSION['temp']);
                          
             }
                         // echo $_GET['id_prod'];
                          //echo "zebi";
                        //print_r($_SESSION['temp']);
                        if(isset($_SESSION['temp'])){
                        $id=$_SESSION['temp'][0][0];
                        $q=$_SESSION['temp'][0][1];
                        //echo $id;
                      }
                     
        
            


      echo '<meta http-equiv="Refresh" content="0;url=connexion.php">';
    
   
     } else{ 
        if(isset($_SESSION['temp'])){
     
      //print_r($_SESSION['temp']);
      $id=$_SESSION['temp'][0][0];
      $q=$_SESSION['temp'][0][1];
      echo $id;
       
          }else{ 
            $_SESSION['temp']=array();
            array_push($_SESSION['temp'],array($_GET['id_prod'],$_GET['q']));
            
              //echo $_SESSION['temp'][0];
              $id=$_SESSION['temp'][0][0];
              $q=$_SESSION['temp'][0][1];
              //echo $id;
             

                  }/*else{
                      if($_SESSION['temp']=Array()){
                       $id=$_GET['id_prod'];
                       echo $id;
                       $q=$_GET['q'];
                       echo "momo";}/*else{
                                    $id=$_SESSION['temp'][0][0];
                                    $q=$_SESSION['temp'][0][1];
                       }
                      }*/
        
             
          if(!isset($_SESSION['panier'])){
            $_SESSION['panier']=array();
                                        }
         
        
    
        //echo $id;        
        
          
              //$id=$_GET['id_prod'];
              //$q=$_GET['q'];


               /*
         if(isset($_SESSION['temp'])){
            
            $id=$_GET['id_prod'];
            $q=$_GET['q'];
             
            // echo $q; 

             } else{ 
              
              
                        $id=$_SESSION['temp'][0][0];
                        $q=$_SESSION['temp'][0][1];
                      // echo $id;
                       //echo "zebizzzz";
                      }  
             */             
         //echo $id;
         //echo "hbibi";
         //echo $q;      
        $val="select P.id_produit, P.Nom_produit, P.Prix,P.url_photo from produit AS P where P.id_produit=".$id." ";
        $vect= $bdd->query($val);
        //echo $val;
        //echo $vect;
        //$line = $rep ->fetch();

        $seqt=array();
        //$hmed = $vect->fetch();
        //$hmed = mysql_fetch_array($vect);
        //$line = $rep ->fetch()
        //print_r($seqt);
       while(  $hmed = $vect->fetch()){
        array_push($seqt, $hmed);
       }
      //$cpt=count($seqt);
      //echo $cpt;
       $i=0;
       //echo $q;
       //print_r($seqt);
       //echo $seqt[0]['id_produit'];
      //echo count($seqt);
       while($i<count($seqt)){
        array_push($_SESSION['panier'], array($seqt[$i]['id_produit'],$seqt[$i]['Nom_produit'],$seqt[$i]['Prix'],$q));
         $i=$i+1;
         }

           /*
            print_r($_SESSION['panier']) ;
              foreach ($_SESSION['panier'] AS $tam)
             echo array_key_exists(3, $tam);
              echo $tam[3];
              $art=$tam[2];
              echo $seqt[0]['Prix'];
              echo $art;
              print_r($_SESSION['panier']);
           */
         //
          unset($_SESSION['temp']);  
          echo '<meta http-equiv="Refresh" content="0;url=index.php">';
          
    }
    ?>

    </body>
</html>