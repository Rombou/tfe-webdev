<?php
session_start();
include 'header.php';
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
    <title>Gravissime - Commande </title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container bg-light">
    <header class=" mt-5 row">
        <img src="../assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase col-12 pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
        </div>
    </header>
   <div class="col-xs-12">
       <div class="container text-center py-2">
            <form action="commandetopdf.php" action="post">
    <?php
        $login=$_POST['login'];
        $req = $bdd->prepare('SELECT * FROM utilisateur INNER JOIN ville ON vilid=villeid WHERE login= :pseudo');
        $req->execute(array(
            'pseudo' => $login));
        $donnees = $req->fetch();
            ?>
            <h4>Adresse du destinataire</h4>
                <p> <input type="text" name="nom" value="<?=$donnees['nom_ut'].' '.$donnees['prenom'];?>"> <?=$donnees['nom_ut'].' '.$donnees['prenom'];?></p>
                <p> <input type="hidden" name="email" value="<?=$donnees['email'];?>"> <?=$donnees['email'];?></p>
                <p> <input type="hidden" name="tel" value="<?=$donnees['telephone'];?>"><?=$donnees['telephone'];?></p>
                <p> <input type="hidden" name="adresse" value="<?=$donnees['adresse'].' '.$donnees['numero'];?>"><?=$donnees['adresse'].' '.$donnees['numero'];?><br>
                    <input type="hidden" name="commune" value="<?=$donnees['cp'].' '.$donnees['commune'];?>"><?=$donnees['cp'].' '.$donnees['commune'];?></p>
    <h4>Commande</h4>
    <table class="table table-light col-5 mx-auto">
                           <tr class="table-secondary">
                               <th>Libellé</th>
                               <th>Quantité</th>
                           </tr>
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                           <tr class="text-left">
                               <td><input type="hidden" name="libelle" value="<?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?>"><?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></td>
                               <td><input type="hidden" name="quantite" value="<?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?>"> <?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?></td>
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
                        <input type="submit" class="btn btn-light" value="Envoyer">
           </form>
          </div>
           </div>
       </div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/scripts/mootools.js"></script>
<script type="text/javascript" src="../assets/scripts/multibox.js"></script>
<script type="text/javascript" src="../assets/scripts/overlay.js"></script> 
</body>
</html>