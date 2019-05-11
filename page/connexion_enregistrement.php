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
            <div class="col-lg-9 col-md-10 col-sm-9 mt-2">
            <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Inscription</li>
                      </ol>
                </nav>
            <p>Vous devez vous inscrire avant de pouvoir commander</p>
             <form action="enregistrement.php" method="post" id="inscription" class="container mb-3" name="inscription">
                    <fieldset class="mb-3">
                        <legend class="text-center">Personne de contact</legend>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Nom :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="name" type="text" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Prénom :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="first_name"  type="text" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Email :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="email" aria-describedby="emailHelp" type="email" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-3">
                        <legend class="text-center">Adresse de livraison</legend>
                            <div class="form-group container">
                                <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Téléphone :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="telephone" type="tel" class="form-control" id="colFormLabel" required>
                                    </span>
                                </div>
                            </div>  
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Adresse :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="adresse" type="text" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Numéro :</label>
                                <div class="col-lg-3 col-md-6 ml-2">
                                    <input name="numero" type="num" class="form-control" id="colFormLabel" required>
                               </div>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Commune :</label>
                                <div class="col-lg-7 col-md-5 ml-2">
                              <select  name="ville" class="form-control" id="colFormLabel" required>
                                  <?php 
                                        include ('header.php');
                                        $reponse = $bdd->query('SELECT * FROM ville'); 
                                                while ( $donnees = $reponse->fetch()) {
                                                    ?>
                                                    <option name="ville" value='<?= $donnees["villeid"];?>'><?= $donnees['cp'].' '.$donnees["commune"];?> </option> <?php
                                                }
                                        ?>
                              </select>
                               </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mb-3">
                        <legend class="text-center">Login</legend>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Login :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Mot de passe :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                        <div class="form-group container">
                           <div class="row">
                                <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Confirmation :</label>
                                <span class="col-lg-7 col-md-6 ml-2">
                                    <input name="confirmpassword" type="password" class="form-control" id="colFormLabel" required>
                               </span>
                            </div>
                        </div>
                    </fieldset>  
                    <center>
                        <input type="submit" value="Enregistrer" class="btn btn-light">
                    </center>
                </form>
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
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/scripts/mootools.js"></script>
<script type="text/javascript" src="assets/scripts/multibox.js"></script>
<script type="text/javascript" src="assets/scripts/overlay.js"></script>   
</body>
</html>