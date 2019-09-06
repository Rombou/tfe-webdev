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
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
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
                <div class="d-none d-lg-block">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="gravier.php">
                                    <img src="../assets/image/types/gravier.jpg" width="100%" class="img-responsive">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Graviers et galets</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="concasse_recycle.php">
                                    <img src="../assets/image/types/recycle-concassee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Concassés de recyclés</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="sables.php">
                                    <img src="../assets/image/types/sable.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Sables</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="brique_pilee.php">
                                    <img src="../assets/image/types/brique-pilee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Brique pilée</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="sable_stabilise.php">
                                    <img src="../assets/image/types/sables_stabilise.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Sables stabilisés</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="beton_maigre.php">
                                    <img src="../assets/image/types/beton.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Bétons maigres</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="dolomie_stabilise.php">
                                    <img src="../assets/image/types/dolomie.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Dolomie stabilisée</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                            <div class="img_hover">
                                <a href="autres.php">
                                    <img src="../assets/image/types/geotex.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <div class="caption">
                                    <div class="caption-text">
                                        <h5>Géotextiles</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-lg-none d-none d-sm-block my-2 mx-auto">
                    <div class="row">
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="gravier.php">
                                    <img src="../assets/image/types/gravier.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Graviers et galets</h5>
                                    </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="concasse_recycle.php">
                                    <img src="../assets/image/types/recycle-concassee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                        <h5 class="text-center py-3">Concassés de recyclés</h5>
                                </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="sables.php">
                                    <img src="../assets/image/types/sable.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                            <footer>
                                <h5 class="text-center py-3">Sables</h5>
                            </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="brique_pilee.php">
                                    <img src="../assets/image/types/brique-pilee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Brique pilée</h5>
                                    </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="sable_stabilise.php">
                                    <img src="../assets/image/types/sables_stabilise.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                    <h5 class="text-center py-3">Sables stabilisés</h5>
                                </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="beton_maigre.php">
                                    <img src="../assets/image/types/beton.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Bétons maigres</h5>
                                    </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="dolomie_stabilise.php">
                                    <img src="../assets/image/types/dolomie.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Dolomie stabilisée</h5>
                                    </footer>
                        </div>
                        <div class="col-sm-6 mb-3 mx-auto">
                                <a href="autres.php">
                                    <img src="../assets/image/types/geotex.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Géotextiles</h5>
                                    </footer>
                        </div>
                    </div>
                </div>
            <div class="d-sm-none d-xs-block my-2 mx-auto">
                <div class="container">
                        <div class="col-10 mb-3 mx-auto">
                                <a href="gravier.php">
                                    <img src="../assets/image/types/gravier.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Graviers et galets</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="concasse_recycle.php">
                                    <img src="../assets/image/types/recycle-concassee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                        <h5 class="text-center py-3">Concassés de recyclés</h5>
                                </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="sables.php">
                                    <img src="../assets/image/types/sable.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                            <footer>
                                <h5 class="text-center py-3">Sables</h5>
                            </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="brique_pilee.php">
                                    <img src="../assets/image/types/brique-pilee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Brique pilée</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="sable_stabilise.php">
                                    <img src="../assets/image/types/sables_stabilise.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                    <h5 class="text-center py-3">Sables stabilisés</h5>
                                </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="beton_maigre.php">
                                    <img src="assets/image/types/beton.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Bétons maigres</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="dolomie_stabilise.php">
                                    <img src="../assets/image/types/dolomie.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Dolomie stabilisée</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="autres.php">
                                    <img src="../assets/image/types/geotex.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Géotextiles</h5>
                                    </footer>
                        </div>
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