<?php
include ('header.php');
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
    <title>Gravissime - Panier</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
        <img src="../assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
        </div>
    </header>
    <div class="mx auto">
        <?php
          include 'banner.php';  
        ?>
    </div>
</div>
<div class="container">
   <div class="col-xs-12 content">
       <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                <?php
                  include 'navigation.php';  
                ?>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-9 mt-2">
            <div class="container">
               <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                          <li class="breadcrumb-item"><a href="../index.php">Gravissime</a></li>
                        <li class="breadcrumb-item active">Panier</li>
                      </ol>
                </nav>
    <div class="container">
    <h4>Votre pannier</h4>
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		if ($nbArticles <= 0) { ?>
		<div class='bg-light col-12 p-1'>Votre panier est vide </div>
		<div class="p-1 text-center col-12 table-secondary">
			        <a class='btn btn-light text-center' href='../produit.php' title="Ajout produit"><i class="fas fa-plus"></i></a>
			    </div>
		<?php }
		else
		{
            ?>
            <form method="post" action="panier.php" class="row">
                    <div class="container" >
                       <div class="table-secondary row col-12">
                          <h4 class="d-block d-sm-none col-12">Produit</h4>
                           <h4 class=" d-none d-sm-block col-sm-5">Libellé</h4>
                           <h4 class="d-none d-sm-block col-sm-3">Quantité</h4>
                           <h4 class="d-none d-sm-block col-sm-3">Prix Unitaire</h4>
                        </div>
            <?php
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                        <div class='bg-light row col-12 border-bottom py-2'>
                            <div class="col-sm-5"><span class="d-sm-none d-block mt-1"><h4>Libellé :</h4></span><?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></div>
                            <div class="col-sm-3"><span class="d-sm-none d-block mt-1"><h4>Quantité :</h4> </span><input class='form-control' type='number' name='q[]' value="<?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?>" min='1' max='99'></div>
                            <div class="col-sm-3"><span class="d-sm-none d-block mt-1"><h4>Prix Unitaire :</h4></span><?=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);?></div>
                            <div class="mx-auto col-sm-1 text-center"><a class='btn btn-light' href="<?=htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]));?>"><i class='fas fa-times'></i></a></div>
                        </div>
				<?php
			         }
			     ?>
                    <div class="table-secondary col-12 row text-center py-2">
                    <div class="mx-auto">
                     <input type="submit" value="&#8634;" class="btn btn-light font-weight-bold" title="Raffraichir"/>
			         <input type="hidden" name="action" value="refresh"/>
			        <a class='btn btn-light text-center' href='../produit.php' title="Ajout produit"><i class="fas fa-plus"></i></a>
                        </div>
			    </div>
			<div class="col-12 row py-2">
                <span class="mx-auto text-center">Total : <?=MontantGlobal();?> €</span>
			 </div>
			 <div class="col-12 row text-center">
                    <a class="btn btn-light mx-auto mb-2" onclick="$('#connexion').modal('show');" style="cursor: pointer">Commander</a>
			 </div>
                </div>
			  </form>
			<?php
		}
	}
	?>
        
            </div>
       </div> 
        </div>
    </div>
    </div>
<div class="container">
    <footer class="col-xs-12 row">
        <?php
          include 'footer.php';  
        ?>
    </footer>
</div>
<div class="modal fade" id="connexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" height="auto">
                <form action="connexion.php" method="post" id="connexion" name="inscription">
                    <fieldset>
                        <legend class="text-center">Se connecter</legend>
                        <p>
                            <label for="login" class="col-sm-4">Identifiant</label>
                            <input class="col-sm-6" placeholder="Login" name="login" id="login" type="text">
                        </p>
                        <p>
                            <label for="passwrd" class="col-sm-4">Mot de passe</label>
                            <input class="col-sm-6" value="" name="pass" id="pass" type="password">
                        </p>
                        <p class="mt-2">
                            <center>
                                <input class="col-4 btn btn-light" name="submit" id="submit" type="submit" value="OK">  
                                <input class="col-4 btn btn-light" name="cancel" id="cancel" type="reset" value="Annuler">
                            </center>
                        </p>
                        <p class="mt-2 col-12">
                            <a color="#222" href="connexion_oubli.php">Login/mot de passe oublié ?</a>
                            <br>
                            <a color="#222" href="connexion_enregistrement.php">S'enregistrer</a>
                        </p>
                    </fieldset>
                </form>
            </div>
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