<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Graviers et galets</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <style type="text/css">
        .img_hover{
		position: relative;
        height: auto;
        overflow: hidden;
	}
	.img_hover:hover .caption{
		opacity: 1;
		transform: translateY(-35px);
		-webkit-transform:translateY(-35px);
		-moz-transform:translateY(-35px);
		-ms-transform:translateY(-35px);
		-o-transform:translateY(-35px);
	}
        .img_hover:hover .caption-text{
        color: #222;
        }
	.img_hover img{
		z-index: 4;
	}
	.caption{
        opacity: 0.5;
		position: absolute;
		bottom:25px;
		-webkit-transition:all 0.3s ease-in-out;
		-moz-transition:all 0.3s ease-in-out;
		-o-transition:all 0.3s ease-in-out;
		-ms-transition:all 0.3s ease-in-out;
		transition:all 0.3s ease-in-out;
		width: 100%;
	}
	.caption-text{
        background-color: #fafc3a;
		z-index: 10;
		color: #222;
		position: absolute;
		text-align: center;
		top:0px;
		width: 100%;
        padding: 0.5em;
        height: 60px;
	}
    .caption_text {
        position: relative;
        }
    .text {
        background-color: #fafc3a;
		color: #222;
		position: absolute;
		text-align: center;
		width: 100%;
        padding: 0.5em;
        height: 60px;
        bottom: 0px;
        }
    </style>
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
        <img src="../assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sable, béton, sables stabilisés,...</p>
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
            <div class="col-lg-9 col-md-10 col-sm-10 col-xs-10 my-1">
                <div class="container">
                   <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item"><a href="../produit.php">Produits</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Graviers et galets</li>
                      </ol>
                    </nav>
                    <div class="d-none d-lg-block">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="graviers_gris.php">
                                        <img src="../assets/image/types/gravier_gris.jpg" width="100%" class="img-responsive">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Graviers gris</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="graviers_jaune.php">
                                        <img src="../assets/image/types/gravier_beige.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Graviers jaunes - beiges - dorés</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="graviers_brun.php">
                                        <img src="../assets/image/types/gravier_rouge.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Graviers bruns - rouges - roses</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="graviers_autre.php">
                                        <img src="../assets/image/types/gravier_blanc.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Graviers autres</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 my-2">
                                <div class="img_hover">
                                    <a href="graviers_galets.php">
                                        <img src="../assets/image/types/galets.jpg" width="100%" class="img-responsive" alt="">
                                    </a>
                                    <div class="caption">
                                        <div class="caption-text">
                                            <h5>Galets - graviers roulés</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 d-none d-lg-none d-md-block my-2">
                   <div class="container">
                    <div class="row">
                           <div class="col-sm-6 mb-3">
                                    <a href="graviers_gris.php">
                                        <img src="../assets/image/types/gravier_gris.jpg" width="100%" class="img-responsive">
                                    </a>
                                        <footer>
                                            <h5 class="text-center py-3 px-1">Graviers gris</h5>
                                        </footer>
                            </div>
                           <div class="col-sm-6 mb-3">
                                    <a href="graviers_jaune.php">
                                        <img src="../assets/image/types/gravier_beige.jpg" width="100%" class="img-responsive">
                                    </a>
                                        <footer>
                                            <h5 class="text-center py-3">Graviers jaunes - beiges - dorés</h5>
                                        </footer>
                            </div>
                           <div class="col-sm-6 mb-3">
                                    <a href="graviers_brun.php">
                                        <img src="../assets/image/types/gravier_rouge.jpg" width="100%" class="img-responsive">
                                    </a>
                                        <footer>
                                            <h5 class="text-center py-3 px 1">Graviers bruns - rouges - roses</h5>
                                        </footer>
                            </div>
                           <div class="col-sm-6 mb-3">
                                   <a href="graviers_autre.php">
                                        <img src="../assets/image/types/gravier_blanc.jpg" width="100%" class="img-responsive">
                                   </a>
                                        <footer>
                                            <h5 class="text-center py-3 px-1">Graviers autres</h5>
                                        </footer>
                            </div>
                           <div class="col-sm-6 mb-3">
                                    <a href="graviers_galets.php">
                                        <img src="../assets/image/types/galets.jpg" width="100%" class="img-responsive">
                                    </a>
                                    <footer>
                                        <h5 class="text-center py-3 px-1">Galets - graviers roulés</h5>
                                    </footer>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-sm-none d-xs-block my-2 mx-auto">
                    <div class="container">
                        <div class="col-10 mb-3 mx-auto">
                            <a href="graviers_gris.php">
                                <img src="../assets/image/types/gravier_gris.jpg" width="100%" class="img-responsive">
                            </a>
                            <footer>
                                <h5 class="text-center py-3">Graviers gris</h5>
                            </footer>  
                        </div>
                        <div class="col-10 mb-3 mx-auto">
                            <a href="graviers_jaune.php">
                                <img src="../assets/image/types/gravier_beige.jpg" width="100%" class="img-responsive">
                            </a>
                            <footer>
                                <h5 class="text-center py-3">Graviers jaunes - beiges - dorés</h5>
                            </footer>
                        </div>        
                        <div class="col-10 mb-3 mx-auto">
                            <a href="graviers_brun.php">
                                <img src="../assets/image/types/gravier_rouge.jpg" width="100%" class="img-responsive">
                            </a>
                            <footer>
                                <h5 class="text-center py-3">Graviers bruns - rouges - roses</h5>
                            </footer>  
                        </div>        
                        <div class="col-10 mb-3 mx-auto">
                            <a href="graviers_autre.php">
                                <img src="../assets/image/types/gravier_blanc.jpg" width="100%" class="img-responsive">
                            </a>
                            <footer>
                                <h5 class="text-center py-3">Graviers autres</h5>
                            </footer>    
                        </div>        
                        <div class="col-10 mb-3 mx-auto">
                            <a href="graviers_galets.php">
                                <img src="../assets/image/types/galets.jpg" width="100%" class="img-responsive">
                            </a>
                            <footer>
                                <h5 class="text-center py-3">Galets - graviers roulés</h5>
                            </footer>    
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
<div class="container">
    <footer class="col-xs-12">
        <?php
          include '../footer.php';  
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