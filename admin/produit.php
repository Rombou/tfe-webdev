<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Admin</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
        <img src="../assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sable, béton, sables stabilisés,...</p>
        </div>
    </header>
</div>
<div class="container">
   <div class="col-xs-12 content pb-4">
      <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-1">
                    <?php
                      include 'navigation.php';  
                    ?>
                </div>
               <div class="col-lg-9 col-md-10 col-sm-11 my-2">
                <div class="container">
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime - Admin</li>
                        <li class="breadcrumb-item active">Produit</li>
                    </ol>
                </nav>
                
       <?php
       if(isset($_SESSION['login'])){
              ?>
            
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
                                <a href="page/gravier.php">
                                    <img src="../assets/image/types/gravier.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Graviers et galets</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/concasse_recycle.php">
                                    <img src="../assets/image/types/recycle-concassee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                        <h5 class="text-center py-3">Concassés de recyclés</h5>
                                </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/sables.php">
                                    <img src="../assets/image/types/sable.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                            <footer>
                                <h5 class="text-center py-3">Sables</h5>
                            </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/brique_pilee.php">
                                    <img src="../assets/image/types/brique-pilee.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Brique pilée</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/sable_stabilise.php">
                                    <img src="../assets/image/types/sables_stabilise.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                <footer>
                                    <h5 class="text-center py-3">Sables stabilisés</h5>
                                </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/beton_maigre.php">
                                    <img src="../assets/image/types/beton.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Bétons maigres</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/dolomie_stabilise.php">
                                    <img src="../assets/image/types/dolomie.jpg" width="100%" class="img-responsive" alt="">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Dolomie stabilisée</h5>
                                    </footer>
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                                <a href="page/autres.php">
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
       else {
           header ('location: index.php');
       }
                    ?>
          </div>
          </div>
       </div>
    </div>
</div>
<div class="container">
    <div class="col-sm-12" style="background-color : #fafc3a;">
        <div class="mx-auto p-1 pb-2 text-center" >
            <a class="text-secondary" href="deconnecte.php">Se déconnecter</a>
        </div>
    </div>
</div>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>