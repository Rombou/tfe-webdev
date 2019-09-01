<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Inscription</title>
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
    <div class="col-12 content pb-3">
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
                <li class="breadcrumb-item active">Inscription</li>
            </ol>
        </nav>
         <?php
    include 'header.php';
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $rep = $bdd->prepare('SELECT * FROM utilisateur WHERE password = :mdp');
    $rep->execute(array(
            'mdp'=> $mdp));
    $donnees = $rep->fetch();
    if ($donnees['password'] == $mdp) {
            ?>
            <form action="mdp_verif.php" method="post" id="inscription" class="needs-validation" name="inscription" novalidate>
                    <fieldset class="col-12 mb-3">
                        <legend class="text-center">Vérification de la disponibilité du mots de passe</legend>
                            <input name="email" value="<?=$_POST['email'];?>" type="hidden">
                            <input name="login" type="hidden" value="<?=$_POST['login'];?>">
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control border-danger" id="colFormLabel" required>
                                       <div class="text-danger mb-2">Mots de passe dèjà utilisé !</div>
                                        <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                        </span>
                               </div>
                        </div>
                    </fieldset>  
                    <div class="text-center">
                        <input type="submit" value="Enregistrer" class="col-3 btn btn-light">
                    </div>
                </form>
            <?php
            }
        else {
            ?>
       <form action="enregistrement.php" method="post" id="inscription" class="needs-validation" name="inscription" novalidate>
                    <fieldset class="col-12 mb-3">
                        <legend class="text-center">Login</legend>
                            <input name="email" value="<?=$_POST['email'];?>" type="hidden">
                            <input name="login" type="hidden" value="<?=$_POST['login'];?>">
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control border-success" id="colFormLabel" readonly value="<?=$mdp;?>">
                                    <div class="text-success">Mots de passe disponible</div>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Confirmation :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="confirmpassword" type="password" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                        </span>
                                    <small>Merci de confirmer le mots de passe</small>
                               </div>
                        </div>
                    </fieldset>  
                    <div class="text-center">
                        <input type="submit" value="Enregistrer" class="col-3 btn btn-light">
                    </div>
                </form>
                <?php
    }
    ?>  
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
<script src="assets/js/util.js"></script>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>