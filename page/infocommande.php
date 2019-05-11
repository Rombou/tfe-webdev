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
    <style type="text/css">
        a:hover {
            color: #222;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-xs-12">
           <header class="col-xs-12 mt-5 pull-right">
        <img src="../assets/image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
        </div>
    </header>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-12 content pb-2">
            <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                          <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Commande</li>
                    
                      </ol>
                </nav>
                <div class="container col-10">
 <?php
    include 'header.php';
     include 'commande.php';
?>
            </div>
      </div>
    </div>
        <div class="container">
        <footer>
            <?php
              include 'footer.php';  
            ?>
        </footer>
        </div>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script>   
</body>
</html>