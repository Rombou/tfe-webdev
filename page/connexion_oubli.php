<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Login / Mot de Passe oublié</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
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
                <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Login / Mot de Passe oublié</li>
                      </ol>
                </nav>
                <div class="col-xl-6 col-lg-8 col-md-11 col-sm-10 mx-auto mt-2 mb-3">
                    <form action="forget.php" method="post" id="inscription" class="container" name="login_perdu">
                        <fieldset>
                            <legend class="text-center">Mot de passe oublié ?</legend>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-xs-4 col-form-label">Email :</label>
                                    <span class="col-xs-6 ml-2">
                                        <input name="email" placeholder="mail@domaine.com" type="email" class="form-control" id="colFormLabel" required>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <div class="col-xs-2 mx-auto">
                                      <input type="submit" class="form-control" value="Envoyer"> 
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
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
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="../assets/scripts/mootools.js"></script>
<script type="text/javascript" src="../assets/scripts/multibox.js"></script>
<script type="text/javascript" src="../assets/scripts/overlay.js"></script>   
</body>
</html>