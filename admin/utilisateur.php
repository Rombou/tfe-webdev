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
                        <li class="breadcrumb-item active">Utilisateur</li>
                    </ol>
                </nav>
       <?php
       if(isset($_SESSION['login'])){
           include 'header.php';
            $reponse = $bdd->query('SELECT id, nom_ut, prenom FROM utilisateur');
              ?>
            <div class="container">
                <div class="table-secondary row col-12 py-2">
                         <h4 class="d-block d-md-none">Utilisateur</h4>
                          <h4 class="d-none d-md-block col-md-5">Nom</h4>
                           <h4 class=" d-none d-md-block col-md-5">Prénom</h4>
                        </div>
            <?php
            while ($donnees = $reponse->fetch())
            {
        
       ?>
            <div class='bg-light col-12 border-bottom py-1 row'>
                                   <div class="col-md-5"><span class="d-md-none d-sm-block mt-1"><h4>Nom :</h4></span>
                                    <?=$donnees['nom_ut'];?></div>
                                    <div class="col-md-5"><span class="d-md-none d-sm-block mt-1"><h4>Prénom :</h4> </span>
                                    <?=$donnees['prenom'];?>
                                    </div>
                                    <div class="text-center col-1 mx-auto row">
                                    <form action="detail.php" method="post">
                                        <input type="hidden" value="<?=$donnees['id'];?>" name="id">
                                        <input class="btn btn-light" type="submit" value="&hellip;" title="Voir détail">
                                    </form>
                                  </div>
                                </div>
                                    <?php
                                }
                                $reponse->closeCursor();
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