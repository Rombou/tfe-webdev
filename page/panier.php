<?php
session_start();
include 'panier_fonction.php';
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
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
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
                        <li class="breadcrumb-item active">Commande</li>
                      </ol>
                </nav>
    <div class="container">
    <h4>Votre panier</h4>
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
            <div class="container" >
                       <div class="table-secondary row col-12 pt-2">
                          <h4 class="d-block d-md-none">Produit</h4>
                           <h4 class=" d-none d-md-block col-md-4">Libellé</h4>
                           <h4 class="d-none d-md-block col-md-3">Quantité</h4>
                           <h4 class="d-none d-md-block col-md-3">Prix unitaire</h4>
                           <h4 class="d-none d-md-block col-md-2">Prix HTVA</h4>
                        </div>
            <?php
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                        <div class='bg-light row col-12 border-bottom py-1 row'>
                            <div class="col-md-4"><span class="d-md-none d-sm-block mt-1"><h4>Libellé :</h4></span>
                            <?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></div>
                            <div class="col-md-3"><span class="d-md-none d-sm-block mt-1"><h4>Quantité :</h4> </span>
                            <?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?>
                            </div>
                            <div class="col-md-3"><span class="d-md-none d-sm-block mt-1"><h4>Prix unitaire :</h4></span>
                           <?=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);?></div>
                            <div class="col-md-2"><span class="d-md-none d-sm-block mt-1"><h4>Prix HTVA :</h4></span>
                              <?php
                                $prix = htmlspecialchars($_SESSION['panier']['qteProduit'][$i])*htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);
                                echo $prix.' €';
                                ?>
                            </div>
                        </div>
				<?php
			         }
			     ?>
                    <div class="table-secondary col-12 row text-center py-2">
                    <div class="mx-auto">
                    <a href="modif_panier.php" class="btn btn-light text-center" title="Modifier produit"><i class="fas fa-edit"></i></a>
                     <a class='btn btn-light text-center' href='../produit.php' title="Ajout produit"><i class="fas fa-plus"></i></a>
                        </div>
			    </div>
			<div class="col-12 row py-2 bg-light">
                <span class="col-md-4 col-sm-12">Sous total HTVA</span><span class="col-md-4 col-sm-12"> <?=MontantGlobal();?> € *</span>
			 </div>
			 <div class="col-12 row py-2  table-secondary">
			     <span class="col-md-4 col-sm-12">TVA 21% </span>
                 <span class="col-md-4 col-sm-12">
                      <?php
                        $prix = MontantGlobal();
                        $c = 21/100;
                        $tva = round(($prix * $c),2);
                        echo $tva.' €';
                      ?>
                 </span>
			 </div>
			 <div class="col-12 row py-2 bg-light">
			     <span class="col-md-4 col-sm-12">Total TVAC</span>
			     <span class="col-md-4 col-sm-12">
			         <?php
			           $totTvac = $prix + $tva;
                        echo $totTvac.' €';
			         ?> *
			     </span>
			 </div>
			 <legend class="font-italic">* Prix hors frais de transport.</legend>
			 <div class="col-12 row text-center mt-2">
                  <a href="connexion_user.php" class="btn btn-light mx-auto mb-2"> Commander</a>
			 </div>
                </div>
			<?php
		}
	}
	?>
        
            </div>
       </div> 
        </div>
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
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>