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
        <form action="verif.php" method="post" id="connexion" name="inscription" class="container needs-validation" novalidate>
                    <fieldset class="col-12 container">
                        <legend class="text-center">Se connecter</legend>
                           <div class="form-group row">
                                <label for="login" class="col-lg-3 col-md-4 col-form-label">Identifiant :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input class="form-control" placeholder="Login" name="login" id="login" type="text" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input class="form-control" name="password" id="password" type="password" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                   </span>
                                </div>
                            </div>
                    </fieldset>
                    <div class="mt-3 text-center">
                              <input class="col-3 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                        </div>
                </form>
          </div>
</div>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>