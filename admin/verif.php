<?php
  session_start();  
?>
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
   <div class="col-xs-12 content pb-4 container pt-2">
        <?php
                           include 'header.php';
                            $login=$_POST['login'];
                            $mdp=$_POST['password'];
                            $password= md5($mdp);
                            $req = $bdd->prepare('SELECT * FROM admin WHERE login= :pseudo');
                            $req->execute(array(
                                'pseudo' => $login));
                            $resultat = $req->fetch();
                            if ($login != $resultat['login'])
                                { 
                            ?>
                            <form action="verif.php" method="post" id="connexion" name="inscription" class="needs-validation" novalidate>
                                <fieldset>
                                    <legend class="text-center">Se connecter</legend>
                                    <div class="col-12">
                                       <div class="form-group row">
                                            <label class="col-lg-3 col-md-4 col-form-label" for="login">Identifiant :</label>
                                            <div class="col-lg-9 col-md-8">
                                                <input class="form-control border-danger" placeholder="Login" name="login" id="login" type="text" required>
                                                <legend class="text-danger">Mauvais indentifiant</legend>
                                                <span class="valid-feedback">
                                                    Cela semble correct !
                                                </span>
                                                <span class="invalid-feedback">
                                                  Champs requis.
                                                </span>
                                           </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-md-4 col-form-label" for="passwrd">Mot de passe :</label>
                                            <div class="col-lg-9 col-md-8">
                                                <input class="form-control border-warning" name="password" id="password" type="password" required>
                                                <small>Merci de réinsérer votre mots de passe</small>
                                                <span class="valid-feedback">
                                                    Cela semble correct !
                                                </span>
                                                <span class="invalid-feedback">
                                                  Champs requis.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                    <div class="mt-3 text-center">
                                           <input class="col-4 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                                    </div>
                            </form>
                    
                                            <?php
                                        }
                                        else
                                        {
                                            if ($password != $resultat['mdp']) {
                                                ?> 
                                        <form action="verif.php" method="post" id="connexion" name="inscription" class="needs-validation" novalidate>
                                            <fieldset>
                                                <legend class="text-center">Se connecter</legend>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-md-4 col-form-label" for="login">Identifiant :</label>
                                                        <div class="col-lg-9 col-md-8">
                                                            <input class="form-control" name="login" id="login" type="text" value="<?=$login;?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-md-4 col-form-label" for="passwrd">Mot de passe :</label>
                                                        <div class="col-lg-9 col-md-8">
                                                            <input class="form-control border-danger" name="password" id="password" type="text" required>
                                                            <legend class="text-danger">Mauvais mot de passe</legend>
                                                            <span class="valid-feedback">
                                                                Cela semble correct !
                                                            </span>
                                                            <span class="invalid-feedback">
                                                              Champs requis.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                </fieldset>
                                                <div class="mt-3 text-center">
                                                       <input class="col-4 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                                                    </div>
                                            </form>
                                                <?php
                                            }
                                            else {
                                                $_SESSION['login']=$login;
                                                ?>
                                                <nav aria-label="breadcrumb">
                                                      <ol class="breadcrumb bg-light">
                                                        <li class="breadcrumb-item">Gravissime - Admin</li>
                                                        <li class="breadcrumb-item active">Accueil</li>
                                                      </ol>
                                                </nav>
                                                <p class="alert alert-info text-center">Bienvenue sur la partie admin</p>
                                                <nav class="nav-link">
                                                    <ul class="nav navbar-nav col-lg-4 col-md-6 col-sm-8 mx-auto">
                                                        <li class=" m-2"><a href="produit.php">Produit</a></li>
                                                        <li class=" m-2"><a href="utilisateur.php">Liste utilisateur</a></li>
                                                        <li class=" m-2"><a href="modif_compte.php">Modification compte</a></li>
                                                    </ul>
                                                </nav>
                                                <?php
                                            }
                                        }
                        ?>
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