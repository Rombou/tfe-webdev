<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Nouvelle coordonnée</title>
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
                <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
            </div>
    </header>
</div>
<div class="container">
    <div class="col-12 py-2 content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">Gravissime</li>
                <li class="breadcrumb-item active">Nouvelle coordonnée</li>
            </ol>
        </nav>
         <?php
            include 'header.php';
            $id      = $_POST['id'];
            
            $requete = "DELETE FROM `utilisateur` WHERE `utilisateur`.`id` = $id";
            $bdd->exec($requete);
        ?>
        <p class="alert alert-info">Vous êtes désincrit.</p>
        <p class="alert alert-warning"><i>Si vous désirez passer une commande, vous devrez vous réinscire.</i></p>
        <p class="mt-3"><a href="../index.php" class="btn btn-light">Retour</a></p> 
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