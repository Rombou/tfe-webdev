<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Désinscription</title>
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
            <div class="col-lg-9 col-md-10 col-sm-10 my-1">
               <div class="container">
                <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Désinscription</li>
                      </ol>
                </nav>
                <div class="col-12 mx-auto mt-2 mb-3">
                    <?php
                        include 'header.php';
                        $email = $_POST['email'];
                        $login = $_POST['login'];
                        $mdp   = $_POST['password'];
                        $password = md5($mdp);
                    
                        $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :mail');
                        $req->execute(array(
                            'mail' => $email));
                        $resultat = $req->fetch();
                        if ($email == $resultat['email']){
                            if ($login != $resultat['login']) {
                                ?>
                    <form action="deleteme.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="container">
                            <legend class="text-center">Compte utilisateur</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" placeholder="mail@domaine.com" aria-describedby="emailHelp" type="email" class="form-control" id="colFormLabel" readonly value="<?=email;?>">
                                   </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="login" type="text" class="form-control border-danger" id="colFormLabel" required>
                                        <legend class="text-danger">Mauvais login</legend>
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
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                               </div>
                        </div>
                        </fieldset>
                           <div class="mt-3 form-group text-center">
                                <a href="connexion_oubli.php" class="btn btn-light m-2">Login oublié ?</a>
                                <input type="submit" class="btn btn-light" value="Envoyer">
                            </div>
                    </form>
                                <?php
                            }
                            else {
                                if ($password != $resultat['password']){
                                    ?>
                    <form action="deleteme.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="container">
                            <legend class="text-center">Compte utilisateur</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" placeholder="mail@domaine.com" aria-describedby="emailHelp" type="email" class="form-control" id="colFormLabel" readonly value="<?=$email;?>">
                                   </div>
                            </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" readonly value="<?=$login;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control border-danger" id="colFormLabel" required>
                                    <legend class="text-danger">Mauvais mot de passe</legend>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                   </span>
                               </div>
                        </div>
                        </fieldset>
                            <div class="form-group text-center mt-3">
                                <a href="connexion_oubli.php" class="btn btn-light m-2">Login oublié ?</a>
                                <input type="submit" class="btn btn-light" value="Envoyer">
                            </div>
                    </form>
                                <?php
                                }//mdp
                                else {
                                    $nom     = $resultat['nom_ut'];
                                    $prenom  = $resultat['prenom'];
                                    $email   = $resultat['email'];
                                    ?>
                        <form action="userdelete.php" method="post" class="container">
                            <fieldset class="container">
                                <legend class="text-center">Compte utilisateur</legend>
                                <input type="hidden" name="nom" value="<?=$nom;?>">
                                <input type="hidden" name="prenom" value="<?=$prenom;?>">
                                <input type="hidden" name="email" value="<?=email;?>">
                                <p> Bonjour, <?=$nom;?> <?=$prenom;?>, êtes-vous sûr de vouloir supprimer votre compte ?</p>
                            </fieldset>
                                <div class="form-group text-center mt-3">
                                         <a href="../index.php" class="btn btn-light col-3 mx-2">Non</a>
                                          <input type="submit" class="btn btn-light col-3 mx-2" value="Oui">
                                </div>
                        </form>
                                    <?php
                                }
                            }//login
                        }
                        else {
                            ?>
                    <form action="deleteme.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="container">
                            <legend class="text-center">Compte utilisateur</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" placeholder="mail@domaine.com" aria-describedby="emailHelp" type="email" class="form-control border-danger" id="colFormLabel" required>
                                        <legend class="text-danger">Mauvaise adressse mail</legend>
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
                                <div class="col-md-8 col-lg-9">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" readonly value="<?=$login;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-9 col-form-label">Mot de passe :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                               </div>
                        </div>
                        </fieldset>
                            <div class="form-group text-center mt-3">
                                     <a href="inscription.php" class="btn btn-light mx-2"> Pas encore insrit ?</a>
                                      <input type="submit" class="btn btn-light mx-2" value="Envoyer">
                            </div>
                    </form>
                                    
                                <?php
                        }//email
                    ?>
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