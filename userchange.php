<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Nouvelles coordonnées</title>
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
                        <li class="breadcrumb-item active">Nouvelles coordonnées</li>
                      </ol>
                </nav>
                <div class="col-sm-12 mx-auto mt-2 mb-3">
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
                    <form action="userchange.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="container">
                            <legend class="text-center">Compte utilisateur</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9 ml-2">
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
                           <div class="form-group text-center">
                                <a href="connexion_oubli.php" class="btn btn-light m-2">Login oublié ?</a>
                                <input type="submit" class="btn btn-light" value="Envoyer">
                            </div>
                        </fieldset>
                    </form>
                                <?php
                            }
                            else {
                                if ($password != $resultat['password']){
                                    ?>
                   <form action="userchange.php" method="post" class="needs-validation" novalidate>
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
                            <div class="form-group text-center">
                                <a href="connexion_oubli.php" class="btn btn-light m-2">Login oublié ?</a>
                                <input type="submit" class="btn btn-light" value="Envoyer">
                            </div>
                        </fieldset>
                    </form>
                                <?php
                                }//mdp
                                else {
                                    $id      = $resultat['id'];
                                    $nom     = $resultat['nom_ut'];
                                    $prenom  = $resultat['prenom'];
                                    $tel     = $resultat['telephone'];
                                    $adresse = $resultat['adresse'];
                                    $num     = $resultat['numero'];
                                    $ville   = $resultat['vilid'];
                                    ?>
                    <form action="userupdate.php" method="post" class="needs-validation" novalidate>
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <fieldset class="mb-3">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" value="<?=$nom;?>" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" value="<?=$prenom;?>" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" class="form-control" name="email" value="<?=$email;?>" required>
                                    <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                               </div>
                        </div>
                        </fieldset>
                        <fieldset class="mb-3">
                            <legend class="text-center">Adresse de livraison</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Télephone/GSM :</label>
                                    <div class="col-lg-9 col-md-8">
                                        <input name="tel" type="tel" class="form-control" id="colFormLabel" required value="<?=$tel;?>">
                                        <small class="form-text text-muted"> Seuls les numéros écrits de cette manière sont acceptés : <br> 0.. .. .. .. ou 0. ... .. .. ou 04.. .. .. ..</small>
                                        <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                                    </div>
                            </div>  
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Adresse :</label>
                                <div class="col-lg-9 col-md-8 container">
                                   <div class="form-inline">
                                    <input name="adresse" type="text" class="col-9 form-control" id="colFormLabel" value="<?=$adresse;?>" required>
                                    <input name="num" type="num" class="col-3 form-control" id="colFormLabel" value="<?=$num;?>" required>
                                    <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                                    </div>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-lg-9 col-md-8">
                              <select  name="ville" class="browser-default custom-select" id="colFormLabel">
                                  <?php
                                    $rep = $bdd->prepare('SELECT * FROM ville WHERE villeid = :ville');
                                    $rep->execute(array(
                                        'ville' => $ville));
                                    $res = $rep->fetch();
                                ?>
                                 <option value="<?=$ville;?>" selected> <?=$res['cp'];?> <?=$res['commune'] ;?></option>
                                  <?php 
                                        $reponse = $bdd->query('SELECT * FROM ville'); 
                                                while ( $donnees = $reponse->fetch()) {
                                                    ?>
                                                    <option name="villes" value='<?= $donnees["villeid"];?>'><?= $donnees['cp'].' '.$donnees["commune"];?> </option> <?php
                                                }
                                        ?>
                              </select>
                            </div>
                        </div>
                            </fieldset>
                            <div class="form-group text-center">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                            </div>
                    </form>
                                    <?php
                                }
                            }//login
                        }
                        else {
                            ?>
                    <form action="userchange.php" method="post" class="needs-validation" novalidate>
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
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Mot de passe :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                               </div>
                        </div>
                            <div class="form-group text-center">
                                     <a href="inscription.php" class="btn btn-light mx-2"> Pas encore insrit ?</a>
                                      <input type="submit" class="btn btn-light mx-2" value="Envoyer">
                            </div>
                        </fieldset>
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