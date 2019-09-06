<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Mes commandes</title>
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
                <p>Votre solution pour la livraison de graviers, sables, bêton, sables stabilisés,...</p>
            </div>
    </header>
</div>
<div class="container">
   <div class="content">
       <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                <?php
                  include 'navigation.php';  
                ?>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-10 my-2">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="../../index.php">Gravissime</a></li>
                            <li class="breadcrumb-item">Mes commandes</li>
                        </ol>
                    </nav>
                        <?php
                           include 'header.php';
                            $id = $_POST['id'];
                            $reponse = $bdd->prepare('SELECT * FROM commande WHERE ut_id= :id ORDER BY id DESC' );
                            $reponse->execute(array(
                                'id' => $id));
                            while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                <div class="py-2">
                                    <div class="table-secondary col-12 text-center py-1"> <?=$donnees['date'];?></div>
                                    <div class="bg-light col-12 border-bottom py-1"><h4>Produit :</h4>
                                    <?=nl2br($donnees['produit']);?></div>
                                    <div class="table-secondary col-12 py-1"><h4>Total HTVA (21%) :</h4>
                                    <?=$donnees['totalHTVA'];?> €
                                    </div>
                                    <div class="col-12 bg-light py-1"><h4>Total TVAC</h4>
                                    <?=$donnees['totalTVAC'];?> €
                                    </div>
                                </div>
                                    <?php
                                }
                                $reponse->closeCursor();
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
<script src="../assets/js/form.js"> </script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>