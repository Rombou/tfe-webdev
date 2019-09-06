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
                        <li class="breadcrumb-item"><a href="produit.php">Produit</a></li>
                        <li class="breadcrumb-item active">Sables stabilisés</li>
                    </ol>
                </nav>
                
       <?php
       if(isset($_SESSION['login'])){
              ?>
            <div class="d-none d-lg-block">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="sable_stabilise_criblage.php">
                                        <img src="../assets/image/types/sable-criblage.jpg" width="100%" class="img-responsive">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Stabilisé au sable de criblage</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="sable_stabilise_jaune.php">
                                        <img src="../assets/image/types/sable-jaune.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Stabilisé au sable jaune ou Escaut</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="sable_stabilise_riviere.php">
                                        <img src="../assets/image/types/sable-de-riviere.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Stabilisé au sable de rivière</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-none d-lg-none d-sm-block my-2 ">
                   <div class="container">
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                <a href="sable_stabilise_criblage.php">
                                    <img src="../assets/image/types/sable-criblage.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Stabilisé au sable de criblage</h5>
                                    </footer>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <a href="sable_stabilise_jaune.php">
                                    <img src="../assets/image/types/sable-jaune.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-2">Stabilisé au sable jaune ou Escaut</h5>
                                    </footer>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <a href="sable_stabilise_riviere.php">
                                    <img src="../assets/image/types/sable-de-riviere.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Stabilisé au sable de rivière</h5>
                                    </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-none d-xs-block my-2 mx-auto">
                    <div class="container">
                        <div class="col-10 mb-3 mx-auto">
                                <a href="sable_stabilise_criblage.php">
                                    <img src="../assets/image/types/sable-criblage.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-2 px-1">Stabilisé au sable de criblage</h5>
                                    </footer>
                            </div>
                            <div class="col-10 mb-3 mx-auto">
                                <a href="sable_stabilise_jaune.php">
                                    <img src="../assets/image/types/sable-jaune.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-2">Stabilisé au sable jaune ou Escaut</h5>
                                    </footer>
                            </div>
                            <div class="col-10 mb-3 mx-auto">
                                <a href="sable_stabilise_riviere.php">
                                    <img src="../assets/image/types/sable-de-riviere.jpg" width="100%" class="img-responsive">
                                </a>
                                    <footer>
                                        <h5 class="text-center py-3">Stabilisé au sable de rivière</h5>
                                    </footer>
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