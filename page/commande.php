<?php
session_start();
include_once("fonctions-panier.php");
$erreur = false;

$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;
      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Commande</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <style type="text/css">
        a:hover {
            color: #222;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
            <img src="../assets/image/logo.png" width="100%" class="header">
            <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
                <p>Votre solution pour la livraison de graviers, sables, bêton, sables stabilisés,...</p>
            </div>
    </header>
</div>
   <div class="container">
       <div class="text-center py-2 content">
           <div class="container">
            <form action="commandetopdf.php" action="post">
            <h4>Adresse du destinataire</h4>
               <?php
                    $nom = $_POST['nom'];
                    $prenom = $_POST['prenom'];
                    $email = $_POST['email'];
                    $tel = $_POST['tel'];
                    $adresse = $_POST['adresse'];
                    $num = $_POST['num'];
                    $cp = $_POST['cp'];
                    $commune = $_POST['commune'];
               ?>
                <p> <input type="hidden" name="nom" value="<?=$nom;?>"><input type="hidden" name="prenom" value="<?=$prenom;?>"><?=$nom;?> <?=$prenom;?></p>
                <p> <input type="hidden" name="email" value="<?=$email;?>"><?=$email;?></p>
                <p> <input type="hidden" name="tel" value="<?=$tel;?>"><?=$tel;?></p>
                <p> <input type="hidden" name="adresse" value="<?=$adresse;?>"><?=$adresse;?> <input type="hidden" name="num" value="<?=$num;?>"><?=$num;?><br>
                    <input type="hidden" name="cp" value="<?=$cp;?>"><?=$cp;?> <input type="hidden" name="commune" value="<?=$commune;?>"><?=$commune ;?></p>
    <h4>Résumer de la commande</h4>
    <table class="col-6 table-light mx-auto">
                           <tr class="table table-secondary">
                               <th class="col-4">Libellé</th>
                               <th class="col-2">Quantité</th>
                           </tr>
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                           <tr class="table text-left">
                               <td class="col-4"><input type="hidden" name="libelle" value="<?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?>"><?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></td>
                               <td class="col-2"><input type="hidden" name="quantite" value="<?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?>"> <?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?></td>
                            </tr>
                                
				<?php
			         }
	}  
	?>
	<tr class="mx-1 text-center table-secondary">
                                <td colspan='5' class="bg-light p-2"><input type="hidden" name="total" value="Total : <?=MontantGlobal();?> €"><span>Total : <?=MontantGlobal();?> €</span>
                                 </td>
                            </tr>
                        </table>
                        <input type="submit" class="btn btn-light mt-2" value="Envoyer">
           </form>
          </div>
       </div>
        </div>
<div class="container">
    <footer class="col-xs-12">
        <?php
          include 'footer.php';  
        ?>
    </footer>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/scripts/mootools.js"></script>
<script type="text/javascript" src="../assets/scripts/multibox.js"></script>
<script type="text/javascript" src="../assets/scripts/overlay.js"></script> 
</body>
</html>