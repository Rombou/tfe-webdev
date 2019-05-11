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
</div>
<div class="container">
    <div class="col-12 py-2 content">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">Gravissime</li>
                <li class="breadcrumb-item active">Inscription</li>
            </ol>
        </nav>
         <?php
    include 'header.php';
    $nom = $_POST['name'];
    $prenom = $_POST['first_name'];
    $tel = $_POST['telephone'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $mdp = $_POST['password'];
    $confirm = $_POST['confirmpassword'];
    $adresse = $_POST['adresse'];
    $numero = $_POST['numero'];
    $ville = $_POST['ville'];
    $reponse = $bdd->query('SELECT email, login FROM utilisateur');
    $donnees = $reponse->fetch();
    if ($donnees['email'] == $email) {
        header ('location:connexion_oubli.php');
    }
    else if ($mdp != $confirm) {
            ?>
            <form action="enregistrement.php" method="post" id="inscription" class="container mb-3" name="inscription">
                        <fieldset class="mb-3">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Nom :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="name" type="text" class="form-control" id="colFormLabel" value="<?= $nom; ?>" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Prénom :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="first_name"  type="text" class="form-control" id="colFormLabel" value="<?= $prenom;?>" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Email :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="email" aria-describedby="emailHelp" value="<?=$email;?>" type="email" class="form-control" id="colFormLabel" readonly>
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
                                            <input name="telephone" type="tel" class="form-control" value="<?=$tel;?>" id="colFormLabel" readonly>
                                        </span>
                                    </div>
                                </div>  
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Adresse :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="adresse" type="text" class="form-control" value="<?=$adresse;?>" id="colFormLabel" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Numéro :</label>
                                    <div class="col-lg-3 col-md-6 ml-2">
                                        <input name="numero" type="num" class="form-control" value="<?=$numero;?>" id="colFormLabel" readonly>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Commune :</label>
                                    <div class="col-lg-7 col-md-5 ml-2">
                                        <select name="ville" class="form-control" id="colFormLabel" disabled>
                                           <?php 
                                            $reponse = $bdd->query('SELECT * FROM ville WHERE villeid='.$ville); 
                                                    while ( $donnees = $reponse->fetch()) {
                                                        ?>
                                                        <option value='<?= $donnees["villeid"];?>'><?= $donnees['cp'].' '.$donnees["nom"];?> </option>
                                                         <?php
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
                                        <input name="login" type="text" class="form-control" value="<?=$login;?>" id="colFormLabel" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Mot de passe :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="password" type="password" class="form-control border-danger" id="colFormLabel" required>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Confirmation :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="confirmpassword" type="password" class="form-control border-danger" id="colFormLabel" required>
                                        <legend class="text-danger">* Confirmation incorect</legend>
                                   </span>
                                </div>
                            </div>
                        </fieldset>  
                        <center>
                            <input type="submit" value="Enregistrer" class="btn btn-light">
                        </center>
                    </form>
            <?php
        }
    else if ($login == $donnees['login']) {
            ?>
            <form action="enregistrement.php" method="post" id="inscription" class="container mb-3" name="inscription">
                        <fieldset class="mb-3">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Nom :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="name" type="text" class="form-control" value="<?=$nom;?>" id="colFormLabel" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Prénom :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="first_name"  type="text" class="form-control" value="<?=$prenom;?>" id="colFormLabel" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Email :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="email" aria-describedby="emailHelp" type="email" class="form-control" id="colFormLabel" readonly value="<?=$email;?>">
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
                                            <input name="telephone" type="tel" class="form-control" id="colFormLabel" readonly value="<?=$tel;?>">
                                        </span>
                                    </div>
                                </div>  
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Adresse :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="adresse" type="text" class="form-control" id="colFormLabel" value="<?=$adresse;?>" readonly>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Numéro :</label>
                                    <div class="col-lg-3 col-md-6 ml-2">
                                        <input name="numero" type="num" class="form-control" id="colFormLabel" value="<?=$numero;?>" readonly>
                                   </div>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Commune :</label>
                                    <div class="col-lg-7 col-md-5 ml-2">
                                        <select name="ville" class="form-control" id="colFormLabel" disabled>
                                           <?php 
                                            $reponse = $bdd->query('SELECT * FROM ville WHERE villeid='.$ville); 
                                                    while ( $donnees = $reponse->fetch()) {
                                                        ?>
                                                        <option value='<?= $donnees["villeid"];?>'><?= $donnees['cp'].' '.$donnees["nom"];?> </option> <?php
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
                                        <input name="login" type="text" class="form-control border-danger" id="colFormLabel" required>
                                        <legend class="text-danger">* Login existant</legend>
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Mot de passe :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="password" type="password" class="form-control" id="colFormLabel" readonly value="<?=$mdp;?>">
                                   </span>
                                </div>
                            </div>
                            <div class="form-group container">
                               <div class="row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-5 col-form-label">Confirmation :</label>
                                    <span class="col-lg-7 col-md-6 ml-2">
                                        <input name="confirmpassword" type="password" class="form-control" id="colFormLabel" readonly value="<?=$confirm;?>">
                                   </span>
                                </div>
                            </div>
                        </fieldset>  
                        <center>
                            <input type="submit" value="Enregistrer" class="btn btn-light">
                        </center>
                    </form>
            <?php
        }
    else {
        $requete = "INSERT INTO utilisateur ( `nom_ut`, `prenom`, `email`, `telephone`, `adresse`, `numero`, `vilid`, `login`, `password`) VALUES ('$nom','$prenom','$email','$tel', '$adresse', '$numero', '$ville', '$login', '$mdp')";
        $bdd->exec($requete);
        echo "Bienvenue $nom $prenom, vous êtes inscrit.";
                    ?>
                    <p class="mt-2"><a href="../index.php" class="btn btn-light">Retour</a></p>
                   <?php
                }
        ?>    
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