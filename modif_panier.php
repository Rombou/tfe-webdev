<?php
include 'panier_fonction.php';
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
                        <li class="breadcrumb-item active">Panier</li>
                      </ol>
                </nav>
    <div class="container">
    <h4>Votre pannier</h4>
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		if ($nbArticles <= 0) { 
            header('Location: panier.php');
        }
		else
		{
            ?>
            <form method="post" action="panier.php" class="row">
                    <div class="container" >
                       <div class="table-secondary row col-12 pt-2">
                          <h4 class="d-block d-sm-none col-sm-4">Produit</h4>
                           <h4 class=" d-none d-sm-block col-sm-4">Libellé</h4>
                           <h4 class="d-none d-sm-block col-sm-4">Quantité</h4>
                           <h4 class="d-none d-sm-block col-sm-3">Prix unitaire</h4>
                        </div>
            <?php
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                        <div class='bg-light row col-12 border-bottom py-1 row'>
                            <div class="col-sm-4"><span class="d-sm-none d-block mt-1"><h4>Libellé :</h4></span>
                            <?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></div>
                            <div class="col-sm-4"><span class="d-sm-none d-block mt-1"><h4>Quantité :</h4> </span>
                            <input type="number" class="form-control col-sm-8" min="1" max="99" value="<?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?>" name="q[]">
                            </div>
                            <div class="col-sm-3"><span class="d-sm-none d-block mt-1"><h4>Prix unitaire :</h4></span>
                           <?=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);?></div>
                            <div class="mx-auto col-sm-1 text-center">
                            <a class='btn btn-light' href="<?=htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]));?>"><i class='fas fa-times'></i></a></div>
                        </div>
				<?php
			         }
			     ?>
                <div class="table-secondary col-12 row text-center py-2">
                    <div class="mx-auto">
                     <a class='btn btn-light text-center' href='../produit.php' title="Ajout produit"><i class="fas fa-plus"></i></a>
                        </div>
			    </div>
                 <div class="container text-center">
			         <input type="submit" class="btn btn-light mt-2 col-3" value="Modifier"/>
			        <input type="hidden" name="action" value="refresh"/>
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
</div>
<div class="container">
    <footer class="col-xs-12 row">
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