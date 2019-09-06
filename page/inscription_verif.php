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
    <div class="col-12 py-2 content">
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
                <li class="breadcrumb-item active">Inscription</li>
            </ol>
        </nav>
    <div class="container pb-2">
<?php
    include 'header.php';
//Récuperer email depuis variable $_POST
$email   = $_POST["email"];
$nom     = $_POST["nom"];
$prenom  = $_POST["prenom"];
$tel     = $_POST["prefixe"].' '.$_POST['champ1'].' '.$_POST['champ2'].' '.$_POST['champ3'];
$adresse = $_POST['adresse'];
$numero = $_POST['numero'];
$ville = $_POST['ville'];
$login = $_POST['login'];
//Verification existance des données sur la base de données
$reponse = $bdd->query('SELECT * FROM utilisateur INNER JOIN ville ON vilid=villeid');
$resultat = $reponse->fetch();
    if ($email != $resultat['email']) {
        if (preg_match('#04[7-9][0-9][ ][0-9]{2}[ ][0-9]{2}[ ][0-9]{2}#', $tel) || preg_match('#0[2-4|9][ ][0-9]{3}[ ][0-9]{2}[ ][0-9]{2}#', $tel) || preg_match('#0(1[0-5|9]|5[0-9]|6[^2|^6]|71|8[^8])[ ][0-9]{2}[ ][0-9]{2}[ ][0-9]{2}#', $tel)) {
            if ($login != $resultat['login'])
            {
    ?>
               <form action="inscription_envoi.php" method="post" class="container" data-toggle="validator">
                      <input name="nom" type="hidden" value="<?=$nom;?>">
                        <input name="prenom"  type="hidden" value="<?=$prenom;?>">
                        <input name="email" type="hidden" value="<?=$email;?>">
                        <input name="login" type="hidden" value="<?=$login;?>">
                        <input name="tel" type="hidden" value="<?=$tel;?>">
                        <input name="adresse" type="hidden" value="<?=$adresse;?>">
                        <input name="numero" type="hidden" value="<?=$numero;?>">
                        <input name="ville" type="hidden" value="<?=$ville;?>">
                        <div class="form-group container">
                               <div class="row">
                                    <div class="col-xs-2 mx-auto">
                                     <p class="alert-success alert">Toutes les informations sont correctes. Voulez-vous continuer ?</p> 
                                    </div>
                                </div>
                            </div>
                        <div class="container col-12 text-center mt-3">
                        <input type="submit" class="mx-auto btn btn-light col-3" value="Oui">
                   </div>
                    </form>    
                    
                    <?php
    }
    else {
        ?>
                    <form action="inscription_verif.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="col-12">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" readonly value="<?=$nom;?>">
                               </div>
                        </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" readonly value="<?=$prenom;?>">
                               </div>
                        </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" placeholder="user" class="form-control" readonly value="<?=$_POST["email"];?>">
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="login" type="text" class="form-control border-danger" required>
                                        <legend class="text-danger">Login dèjà utilisé.</legend>
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
                                    <div class="col-md-8 col-lg-9">
                                        <div class="input-group">
                                            <input name="prefixe" type="tel" class="form-control" id="colFormLabel" readonly value="<?=$_POST["prefixe"];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text">/</div>
                                            </div>
                                            <input name="champ1" type="tel" class="form-control" readonly value="<?=$_POST['champ1'];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ2" type="tel" class="form-control" readonly value="<?=$_POST['champ2'];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ3" type="tel" class="form-control" readonly value="<?=$_POST['champ3'];?>">
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Adresse :</label>
                                <div class="col-md-8 col-lg-9 form-inline">
                                    <input name="adresse" type="text" class="form-control col-9" id="colFormLabel" readonly value="<?=$adresse;?>">
                                    <input name="numero" type="num" class="form-control col-3" id="colFormLabel" readonly value="<?=$numero;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-md-8 col-lg-9">
                              <select  name="ville" class="custom-select" id="colFormLabel" disabled>
                                                   <?php
                                $rep = $bdd->prepare('SELECT * FROM ville WHERE villeid = :ville');
                                    $rep->execute(array(
                                        'ville' => $ville));
                                    $res = $rep->fetch();
                                ?>
                                 <option value="<?=$villeid;?>" selected> <?=$res['cp'];?> <?=$res['commune'] ;?></option>
                              </select>
                               </div>
                        </div>
                        </fieldset>
                        <div class="form-group container mt-3">
                               <div class="row">
                                    <div class="col-3 mx-auto">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                                    </div>
                                </div>
                            </div>
                    </form>
                    <?php
        }
    }
    else {
       ?>
        <form action="inscription_verif.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="col-12">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" readonly value="<?=$nom;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" readonly value="<?=$prenom?>">
                               </div>
                        </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9 container">
                                            <input name="email" type="text" placeholder="user" class="form-control" readonly value="<?=$_POST["email"];?>">
                                    </div>
                            </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="login" type="text" class="form-control" readonly value="<?=$login;?>">
                                </div>
                            </div>
                        </fieldset>
                    <fieldset class="mb-3">
                        <legend class="text-center">Adresse de livraison</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Télephone/GSM :</label>
                                    <div class="col-md-8 col-lg-9 container">
                                       <div class="input-group">
                                            <input name="prefixe" type="tel" class="form-control" required minlength="2" maxlength="4" value="0" min="0">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text">/</div>
                                            </div>
                                            <input name="champ1" type="tel" class="form-control" required minlength="2" maxlength="3" min="0">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ2" type="tel" class="form-control" required minlength="2" maxlength="2" min="0">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ3" type="tel" class="form-control" required minlength="2" maxlength="2">
                                        </div>
                                        <div class="text-danger">Mauvais numéro de téléphone. Merci de rééssayer.</div>
                                        <small class="form-text alert alert-info"> Seuls les numéros écrits de cette manière sont acceptés : <br> 0../.. .. .. ou 0./... .. .. ou 04../.. .. ..</small>
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
                                <div class="col-md-8 col-lg-9 form-inline">
                                    <input name="adresse" type="text" class="form-control col-9" id="colFormLabel" readonly value="<?=$adresse;?>">
                                    <input name="numero" type="num" class="form-control col-3" id="colFormLabel" readonly value="<?=$numero;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-md-8 col-lg-9">
                              <select  name="ville" class="custom-select" id="colFormLabel" disabled>
                                                   <?php
                                $rep = $bdd->prepare('SELECT * FROM ville WHERE villeid = :ville');
                                    $rep->execute(array(
                                        'ville' => $ville));
                                    $res = $rep->fetch();
                                ?>
                                 <option value="<?=$villeid;?>" selected> <?=$res['cp'];?> <?=$res['commune'] ;?></option>
                              </select>
                               </div>
                        </div>
                        </fieldset>
                        <div class="form-group container text-center mt-3">
                                    <div class="col-3 mx-auto">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                                    </div>
                            </div>
                    </form>
       <?php 
    }
}
        
else {
    ?>
                   <p class="alert alert-danger">Vous êtes dèjà inscrit ou trompé d'email.</p>
                <form action="inscription_verif.php" method="post" class="needs-validation" novalidate>
                   <fieldset class="col-12">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" readonly value="<?=$nom;?>">
                               </div>
                        </div>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" readonly value="<?=$prenom;?>">
                               </div>
                        </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9">
                                            <input name="email" type="text" placeholder="user" class="form-control" readonly value="<?=$_POST["email"];?>">
                                       <legend class="text-danger">Email dèjà utilisé.</legend>
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
                                        <input name="login" type="text" class="form-control" readonly value="<?=$login;?>">
                                </div>
                            </div>
                        </fieldset>
                    <fieldset class="mb-3">
                        <legend class="text-center">Adresse de livraison</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Télephone/GSM :</label>
                                    <div class="col-md-8 col-lg-9">
                                        <div class="input-group">
                                            <input name="prefixe" type="tel" class="form-control" id="colFormLabel" title="Format téléphonique" readonly value="<?=$_POST["prefixe"];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text">/</div>
                                            </div>
                                            <input name="champ1" type="tel" class="form-control" readonly value="<?=$_POST['champ1'];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ2" type="tel" class="form-control" readonly value="<?=$_POST['champ2'];?>">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ3" type="tel" class="form-control" readonly value="<?=$_POST['champ3'];?>">
                                        </div>
                                    </div>
                                </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Adresse :</label>
                                <div class="col-md-8 col-lg-9 form-inline">
                                    <input name="adresse" type="text" class="form-control col-9" id="colFormLabel" readonly value="<?=$adresse;?>">
                                    <input name="numero" type="num" class="form-control col-3" id="colFormLabel" readonly value="<?=$numero;?>">
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-md-8 col-lg-9">
                              <select  name="ville" class="custom-select" id="colFormLabel" disabled>
                                                   <?php
                                $rep = $bdd->prepare('SELECT * FROM ville WHERE villeid = :ville');
                                    $rep->execute(array(
                                        'ville' => $ville));
                                    $res = $rep->fetch();
                                ?>
                                 <option value="<?=$villeid;?>" selected> <?=$res['cp'];?> <?=$res['commune'] ;?></option>
                              </select>
                               </div>
                        </div>
                        </fieldset>
                        <div class="form-group mt-3 text-center">
                              <a href="connexion_oubli.php" class="btn btn-light mx-1">Login/mot de passe oublié ?</a>
                                <input class="col-3 btn btn-light mx-2" name="submit" id="submit" type="submit" value="Se connecter">
                        </div>
        </form>
                    <?php
    }
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