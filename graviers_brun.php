<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Graviers bruns - rouges - rose</title>
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
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item"><a href="../produit.php">Produits</a></li>
                        <li class="breadcrumb-item"><a href="gravier.php">Graviers et galets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Graviers bruns - rouges - rose</li>
                      </ol>
                </nav>
                <div class="col-lg-6 col-md-8 mx-auto mt-2 mb-4">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block w-100" src="../assets/image/produits/shiste_rouge_av.jpg">
                          <legend class="text-center pt-1 pb-4 bg-light">Shiste rouge 0/6</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/shiste_rouge.jpg">
                          <legend class="text-center pt-1 pb-4 bg-light">Shiste rouge 5/15</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/pinky.jpg" >
                          <legend class="text-center pt-1 pb-4 bg-light">Pinky</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/cachemire.jpg" >
                          <legend class="text-center pt-1 pb-4 bg-light">Cachemire</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/romance.jpg" >
                          <legend class="text-center pt-1 pb-4 bg-light">Romance</legend>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="container">
                    <div class="table-secondary row col-12 py-2">
                         <h4 class="d-block d-md-none">Produit</h4>
                          <h4 class="d-none d-md-block col-md-6">Nom</h4>
                           <h4 class=" d-none d-md-block col-md-3">Prix htva (21%)</h4>
                           <h4 class="d-none d-md-block col-md-2">Quantité</h4>
                        </div>
                            <?php
                              include 'header.php';
                                $reponse = $bdd->query('SELECT proid,nom,prix FROM produits WHERE cat_id=3');
                                while ($donnees = $reponse->fetch())
                                {
                                    ?>
                            <form action="ajout_panier.php?action=ajout&amp;l&amp;q&amp;p" method="post">
                                <div class='bg-light col-12 border-bottom py-1 row'>
                                    <div class="col-md-6"><span class="d-md-none d-sm-block mt-1"><h4>Nom :</h4></span>
                                    <input type='text' class="form-control-plaintext" name='nom' value="<?=$donnees['nom']?>"></div>
                                    <div class="col-md-3"><span class="d-md-none d-sm-block mt-1"><h4>Prix htva (21%) :</h4> </span>
                                    <input type="text" name='prix' class="form-control-plaintext" value="<?=$donnees['prix'];?>">
                                    </div><div class="col-md-2"><span class="d-md-none d-sm-block mt-1"><h4>Quantité</h4> </span>
                                    <input class="form-control"type="number" min="1" max="99" value="1" name="nombre" required>
                                    </div>
                                    <div class="text-center col-md-1 mx-auto container">
                                   <input class="btn btn-light" value="+" type='submit' title="Ajouter au panier">
                                    </div>
                                </div>
                                    <?php
                                }
                                $reponse->closeCursor();
                            ?>
                       </form>
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