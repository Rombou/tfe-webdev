<?php
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
   <div class="col-xs-12 content pb-2">
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
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		if ($nbArticles <= 0) { ?>
		<div class='bg-light col-12 p-1'>Votre pannier est vide </div>
		<div class="p-1 text-center col-12 table-secondary">
			        <a class='btn btn-light text-center' href='../produit.php' title="Ajout produit"><i class="fas fa-plus"></i></a>
			    </div>
		<?php }
            else
            {
                ?>
                <div class="alert-success p-2 my-2">
                    Produit ajouté
                </div>
                <div class="container">
                        <div class="text-center">
                            <a href="../produit.php" class="btn btn-light mx-1 col-3" title="Ajouter d'autre produit">
                                <span class="d-xs-block d-sm-none"><i class="fas fa-plus"></i></span>
                                <span class="d-none d-sm-block">Ajout produit</span>
                            </a>
                            <a href="panier.php" class="btn btn-light mx-1 col-3" title="Aller au pannier">
                                <span class="d-xs-block d-sm-none"><i class="fas fa-shopping-cart"></i></span>
                                <span class="d-none d-sm-block">Panier</span>
                            </a>
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