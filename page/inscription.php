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
                        <li class="breadcrumb-item active">Inscription</li>
                      </ol>
                </nav>
                  <form action="inscription_verif.php" method="post" class="needs-validation" novalidate>
                        <fieldset class="col-12">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                               </div>
                        </div>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                    <div class="col-md-8 col-lg-9 container">
                                            <input name="email" type="text" placeholder="user@domaine.com" class="form-control" required>
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
                                        <input name="login" type="text" class="form-control" required>
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
                                        <small class="form-text"> Seuls les numéros écrits de cette manière sont acceptés : <br> 0../.. .. .. ou 0./... .. .. ou 04../.. .. ..</small>
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
                                    <input name="adresse" type="text" class="form-control col-9" id="colFormLabel" required>
                                    <input name="numero" type="text" class="form-control col-3" id="colFormLabel" required min="1">
                                   <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-md-8 col-lg-9">
                              <select  name="ville" class="custom-select" id="colFormLabel" required>
                                 <option value=""></option>
                                        <?php 
                                        include ('header.php');
                                        $reponse = $bdd->query('SELECT * FROM ville'); 
                                                while ( $donnees = $reponse->fetch()) {
                                                    ?>
                                                    <option name="ville" value='<?= $donnees["villeid"];?>'>
                                                    <?= $donnees['cp'].' '.$donnees["commune"];?> </option> <?php
                                                }
                                        ?>
                              </select>
                              
                                   <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                    </span>
                               </div>
                        </div>
                        </fieldset>
                        <legend class="alert alert-info"> Ces informations sont utiles pour pouvoir commander et se faire livrer. Toutes informations erronées ne seront pas prises en compte. Merci de votre compréhension. Gravissime ne récupère pas ces informations à titre personnel. </legend>
                        <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">J'accepte l'utilisation de mes informations. </label>
                        <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                      Champs requis.
                                    </span>
                        </div>
                        <div class="form-group container mt-3">
                               <div class="row">
                                    <div class="col-3 mx-auto">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                                    </div>
                                </div>
                            </div>
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
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>  
</body>
</html>