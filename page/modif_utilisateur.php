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
            <div class="col-lg-9 col-md-10 my-1">
               <div class="container">
                <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Nouvelle coordonnée</li>
                      </ol>
                </nav>
                <div class="col-sm-12 mx-auto mt-2 mb-3">
                    <form action="userchange.php" method="post" class="needs-validation" novalidate>
                        <fieldset>
                            <legend class="text-center">Changement de coordonnée</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" placeholder="mail@domaine.com" aria-describedby="emailHelp" type="email" class="form-control" id="colFormLabel" required>
                                        <span class="valid-feedback">
                                        Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis pour une adresse mail.
                                        </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis pour une adresse mail.
                                        </span>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis pour une adresse mail.
                                        </span>
                               </div>
                        </div>
                        </fieldset>
                            <div class="form-group text-center mt-3">
                                    <div class="col-xs-2 mx-auto">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                                    </div>
                            </div>
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
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>    
</body>
</html>