<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Accueil</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
        <img src="assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
        </div>
    </header>
    <div class="mx auto">
        <?php
          include 'page/banner.php';  
        ?>
    </div>
</div>
<div class="container">
  <div class="content">
       <div class="col-xs-12">
           <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-2">
                    <?php
                      include 'navigation.php';  
                    ?>
                </div>
               <div class="col-lg-9 col-md-10 col-sm-10 my-2">
                <div class="container">
                <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Accueil</li>
                      </ol>
                </nav>
                   <h3 class="text-center">Faites appel à nos services pour</h3>
                   <div id="accordion">
  <div>
    <div id="headingOne">
      <h5 class="mb-2">
        <a class="nav navbar col-5" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Du gravier <span class="pl-2 pull-right"><i class="fas fa-chevron-down text-dark" aria-hidden="true"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseOne" class="collapse ml-5 my-2" aria-labelledby="headingOne" data-parent="#accordion">
       <p>
            Décoratif (gris, beige, blanc, rouge,...) <br>
            D'autres calibres pour vos fondations,  drainage,..
        </p>
    </div>
  </div>
  <div>
    <div id="headingTwo">
      <h5 class="mb-2">
        <a class="nav navbar col-5" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            Du sable <span class="pull-right"><i class="fas fa-chevron-down text-dark" aria-hidden="true"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse ml-5 my-2" aria-labelledby="headingTwo" data-parent="#accordion">
       <p>
            Maçon ou béton pour votre construction <br>
            Blanc ou autre pour votre piste équestre, bac à sable,...
        </p>
    </div>
  </div>
  <div>
    <div id="headingThree">
      <h5 class="mb-0">
        <a class="nav navbar col-5" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Des produits à base de ciment <span class="pull-right"><i class="fas fa-chevron-down text-dark" aria-hidden="true"></i></span>
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse ml-5 my-2" aria-labelledby="headingThree" data-parent="#accordion">
        <p>
          Du sable stabilisé (chape, remblai, klinkers,...) <br>
          Du béton maigre ou de la dolomie stabilisée
        </p>
    </div>
  </div>
</div>
                      <div class="d-none d-lg-block">
                        <div class="row">
                            <div class="col-lg-5 col-sm-12 mt-2 mb-4">
                                  <img src="assets/image/camion.jpg" alt="">
                            </div>
                            <div class="col-lg-6 mr-6">
                                <b>Prix très compétitifs</b> <hr>
                                <b>Livraison rapide </b><a href="condition_general.php"><i class="fa fa-angle-double-right" title="En savoir plus"></i></a><hr>
                                Grâce au <b>panier</b>, vous pourrez calculer le montant de vos achats, hors frais de transport. <hr>
                                <b>Le contact client </b> : que vous commandiez 1 tonne ou 100 tonnes, vous serez toujours accueillis avec le sourire.
                            </div>
                        </div>
                       </div>
                        <div class="d-lg-none d-md-block">
                        <div class="col-md-12 mt-2 mb-4">
                               <img src="assets/image/camion.jpg">
                        </div>
                            <div class="col-sm-12">
                                <b>Prix très compétitifs</b> <hr>
                                <b>Livraison rapide </b><a href="condition_general.php" ><i class="fa fa-angle-double-right" title="En savoir plus"></i></a><hr>
                                Grâce au <b>panier</b>, vous pourrez calculer le montant de vos achats, hors frais de transport. <hr>
                                <b>Le contact client</b>, que vous commandiez 1 tonne ou 100 tonnes, vous serez toujours accueillis avec le sourire
                            </div>
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
          include 'page/footer.php';  
        ?>
    </footer>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/acordeon.js"></script>
</body>
</html>