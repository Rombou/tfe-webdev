<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Béton maigre</title>
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
                        <li class="breadcrumb-item active" aria-current="page">Béton maigre</li>
                      </ol>
                </nav>
                <div class="d-none d-sm-block">
                    <table class="table table-light table-hover">
                       <thead class="table-secondary">
                              <th>Nom</th>
                              <th>Prix htva (21%)</th>
                              <th colspan="2">Quantité</th>
                          </thead>
                        <tbody>
                            <?php
                              include 'header.php';
                                $reponse = $bdd->query('SELECT proid,nom,prix FROM produits WHERE cat_id=9');
                                $proid=$donnees['proid'];
                                while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                    <tr>
                                        <form action="ajout_panier.php?action=ajout&amp;l&amp;q&amp;p" method="post">
                                        <td><?=$donnees['nom']?><input type='hidden' name='nom' value="<?=$donnees['nom']?>"></td>
                                            <td><?=$donnees['prix']?><input type="hidden" name='prix' value="<?=$donnees['prix'];?>"></td>
                                        <td><input class="form-control"type="number" min="1" max="99" value="1" name="nombre" required></td>
                                                <td> 
                                                    <input class="btn btn-light" value="+" type='submit' title="Ajouter au panier">
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
                    <table class="table table-light table-striped">
                        <tbody>
                            <?php
                              include 'header.php';
                                $reponse = $bdd->query('SELECT proid,nom,prix FROM produit WHERE cat_id=6');
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
                                                        <input class="form-control col-3" type="number" min="1" max="99" placeholder="1" name="nombre" required>
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