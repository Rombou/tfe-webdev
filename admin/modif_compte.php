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
                        <li class="breadcrumb-item active">Modification compte</li>
                    </ol>
                </nav>
       <?php
       if(isset($_SESSION['login'])){
        $login   = $_SESSION['login'];  
       ?>
        <form action="modif_update.php" method="post" class="needs-validation container" novalidate>
                      <fieldset class="col-lg-8 col-md-10 mx-auto">
                      <legend class="text-center">Nouveau mot de passe</legend>
                       <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-4 col-md-6 col-form-label">Login :</label>
                                <div class="col-lg-8 col-md-6">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" readonly value="<?=$login;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-4 col-md-6 col-form-label">Nouveau mot de passe :</label>
                                <div class="col-lg-8 col-md-6">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                        Champs requis.
                                    </span>
                               </div>
                        </div>
                        </fieldset>
                        <div class="form-group container mt-3">
                             <div class="row">
                              <input type="submit" value="Enregistrer" class="mx-auto btn btn-light col-3">
                            </div>
                        </div>
                    </form>
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