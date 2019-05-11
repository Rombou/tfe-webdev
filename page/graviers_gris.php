<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Gravier gris</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <style type="text/css">
        legend {
            background-color: lightgray;}
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
            <div class="col-lg-9 col-md-10 col-sm-9 mt-2">
                <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item"><a href="../produit.php">Produits</a></li>
                        <li class="breadcrumb-item"><a href="gravier.php">Graviers et galets</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Graviers gris</li>
                      </ol>
                </nav>
                <div class="col-sm-10 col-lg-8 mx-auto mt-2 mb-4">
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
                          <img class="d-block w-100" src="../assets/image/produits/calcaire_0-6.jpg">
                            <legend class="text-center pt-1 pb-4">Gravier 0/6</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/calcaire_2-6.jpg">
                          <legend class="text-center pt-1 pb-4">Gravier 2/6</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/calcaire_6-14.jpg" >
                          <legend class="text-center pt-1 pb-4">Gravier 6/14</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/calcaire_6-20.jpg" >
                          <legend class="text-center pt-1 pb-4">Gravier 6/20</legend>
                        </div>
                        <div class="carousel-item">
                          <img class="d-block w-100" src="../assets/image/produits/calcaire_20-30.jpg" >
                          <legend class="text-center pt-1 pb-4">Gravier 20/30</legend>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="d-none d-sm-block">
                    <table class="table table-hover">
                       <thead class="bg-light">
                            <tr>
                              <th width="40%">Nom</th>
                              <th width="30%">Prix htva (21%)</th>
                              <th></th>
                            </tr>
                          </thead>
                        <tbody>
                            <?php
                              include 'header.php';
                                $reponse = $bdd->query('SELECT proid,nom,prix FROM produit WHERE cat_id=1 and typ_id=1');
                                $proid=$donnees['proid'];
                                while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                    <tr>
                                        <form action="panier.php?action=ajout&amp;l&amp;q&amp;p" method="post">
                                        <td><?=$donnees['nom']?><input type='hidden' name='nom' value="<?=$donnees['nom']?>"></td>
                                        <td><?=$donnees['prix']?><input type="hidden" name='prix' value="<?=$donnees['prix'];?>"><td/>
                                        <td> 
                                                <input class="btn btn-light col-md-12 col-lg-4"type="number" min="1" max="99" value="1" name="nombre">
                                                <input class="btn btn-light col-md-12 col-lg-4" type='submit' value='+'>
                                        </td>
                                         </form>
                                    </tr>
                                    <?php
                                }
                                $reponse->closeCursor();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-xs-block d-sm-none">
                   <table class="table table-striped">
                        <tbody>
                    <?php
                              include 'header.php';
                                $reponse = $bdd->query('SELECT proid,nom,prix FROM produit WHERE cat_id=1 and typ_id=1');
                                $proid=$donnees['proid'];
                                while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                    <tr>
                                          <td>
                                          <table>
                                           <form action="panier.php?action=ajout&amp;l&amp;q&amp;p" method="post">
                                                  <p> <b>Nom :</b> <?=$donnees['nom']?><input type='hidden'  name='nom' value="<?=$donnees['nom']?>"></p>
                                                     <p>
                                                      <b>Prix htva (21%) : </b> <?=$donnees['prix']?><input type="hidden" name='prix' value="<?=$donnees['prix'];?>">
                                               </p>
                                               <div class="container">
                                                <p class="form-group row text-center">
                                                    <input class="form-control col-3" type="number" min="1" max="99" placeholder="1" name="nombre">
                                                    <input class="form-control col-3" type='submit' value='+'>
                                               </p>
                                               </div> 
                                            </form>
                                              </table>
                                              </td>
                                            </tr>
                                    <?php
                                }
                                $reponse->closeCursor();
                            ?>
                       </tbody>
                    </table>
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