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
    <div class="col-12 content">
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
    $confirm = $_POST['confirmpassword'];
    $password = md5($mdp);
    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :mail');
    $req->execute(array(
        'mail'=> $email));
    $resultat = $req->fetch();    
        if ($email != $resultat['email']) {
            ?> 
            <form action="enregistrement.php" method="post" id="inscription" class="needs-validation" name="inscription" novalidate>
                    <fieldset class="col-12 mb-3">
                        <legend class="text-center">Login</legend>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="email" aria-describedby="emailHelp" class="form-control border-danger" id="colFormLabel" required>
                                    <div class="text-danger">Mauvais email !</div>
                                        <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                        </span>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="login" type="text" value="<?=$_POST['login'];?>" class="form-control" id="colFormLabel" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Confirmation :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="confirmpassword" type="password" class="form-control" id="colFormLabel" readonly value="<?=$confirm;?>">
                               </div>
                        </div>
                    </fieldset>  
                    <div class="text-center">
                        <input type="submit" value="Enregistrer" class="col-3 btn btn-light">
                    </div>
                </form>
                        <?php
        }
        else if ($resultat['login'] != $login){
            ?>
            <form action="enregistrement.php" method="post" id="inscription" class="needs-validation" name="inscription" novalidate>
                    <fieldset class="col-12 mb-3">
                        <legend class="text-center">Login</legend>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="email" value="<?=$_POST['email'];?>" aria-describedby="emailHelp" class="form-control" id="colFormLabel" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Confirmation login :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="login" type="text" class="form-control border-danger" id="colFormLabel" required>
                                    <div class="text-danger">Mauvaise login !</div>
                                        <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                        </span>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Confirmation :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="confirmpassword" type="password" class="form-control" id="colFormLabel" readonly value="<?=$confirm;?>">
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
            $id = $resultat['utid'];
            $nom = $resultat['nom–ut'];
            $prenom = $resultat['prenom'];
            
            if ($mdp != $confirm) {
                ?>
                <form action="enregistrement.php" method="post" id="inscription" class="needs-validation" name="inscription" novalidate>
                    <fieldset class="col-12 mb-3">
                        <legend class="text-center">Login</legend>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="email" value="<?=$_POST['email'];?>" aria-describedby="emailHelp" class="form-control" id="colFormLabel" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="login" type="text" value="<?=$_POST['login'];?>" class="form-control" id="colFormLabel" readonly>
                                </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" value="<?=$mdp;?>" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Confirmation :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="confirmpassword" type="password" class="form-control border-danger" id="colFormLabel" required>
                                       <div class="text-danger">Confirmation incorect.</div>
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
            $requete = "UPDATE `utilisateur` SET `password` = '$password'  WHERE `utilisateur`.`utid` = $id";
            $bdd->exec($requete);
                        ?>
                        <p>Bienvenue <?=$nom;?> <?=$prenom;?>.</p>
                        <p class="mt-2"><a href="../index.php" class="btn btn-light">Retour</a></p>
                       <?php
            }
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
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>