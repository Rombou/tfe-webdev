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
            <div class="col-lg-9 col-md-10 col-sm-9 my-2">
                <div class="container">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item"><a href="../../index.php">Gravissime</a></li>
                            <li class="breadcrumb-item">Mes commandes</li>
                        </ol>
                    </nav>
                        <?php
                           include 'header.php';
                            $login=$_POST['login'];
                            $mdp=$_POST['password'];
                            $password= md5($mdp);
                            $req = $bdd->prepare('SELECT * FROM utilisateur WHERE login= :pseudo');
                            $req->execute(array(
                                'pseudo' => $login));
                            $resultat = $req->fetch();
                            if ($login != $resultat['login'])
                                { 
                            ?>
                            <form action="connect_verif.php" method="post" id="connexion" name="inscription" class="needs-validation" novalidate>
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
                                    <div class="mt-3 form-group text-center">
                                           <a class="btn btn-light col-4 mx-2" href="connexion_oubli.php">Login/mot de passe oublié ?</a>
                                            <input class="col-4 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                                    </div>
                            </form>
                    
                                            <?php
                                        }
                                        else
                                        {
                                            if ($password != $resultat['password']) {
                                                ?> 
                                        <form action="connect_verif.php" method="post" id="connexion" name="inscription" class="needs-validation" novalidate>
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
                                                <div class="mt-3 form-group text-center">
                                                       <a class="col-4 btn btn-light mx-2" href="connexion_oubli.php">Login/mot de passe oublié ?</a>
                                                        <input class="col-4 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                                                    </div>
                                            </form>
                                                <?php
                                            }
                                            else {
                                                $id = $resultat['id'];
                                                ?>
                                               <p class="alert-success alert">Connexion réussie</p>
                                               <form action="history.php" method="post">
                                                   <input type="hidden" name="id" value="<?=$id;?>">
                                                <div class="mt-3 text-center">
                                                   <input type="submit" class="btn btn-light col-3" value="Voir mes commandes">
                                                   </div>
                                               </form>
                                                <?php
                                            }
                                        }
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