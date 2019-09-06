<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Login/mot de asse oublié</title>
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
            <div class="col-lg-9 col-md-10 col-sm-10 my-2 mb-4">
              <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Login/mot de passe oublié</li>
                    </ol>
                </nav>
            <?php
                include 'header.php';
            //Récuperer email depuis variable $_POST
            $email = $_POST["email"];
            //Verification existance de l'email sur la base de données
            $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email= :mail');
            $req->execute(array(
                'mail' => $email));
            $resultat = $req->fetch();
            if($email == $resultat['email']){
                $nom     = $resultat['nom_ut']; 
                $prenom  = $resultat['prenom'];
                $login   = $resultat['login'];
?>
                                <p>Bonjour <?=$nom;?> <?=$prenom;?>. </p>
                                 <form action="userswitch.php" method="post" class="needs-validation" novalidate>
                      <fieldset class="col-12">
                      <legend class="text-center">Enregistrement données</legend>
                       <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="email" type="text" class="form-control" aria-describedby="emailHelp" id="colFormLabel" readonly value="<?=$email;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Login :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="login" type="text" class="form-control" id="colFormLabel" readonly value="<?=$login;?>">
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nouveau mot de passe :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="password" type="password" class="form-control" id="colFormLabel" required>
                                    <span class="valid-feedback">
                                        Cela semble correct !
                                    </span>
                                    <span class="invalid-feedback">
                                        Champs requis.
                                    </span>
                               </div>
                        </div>
                        </fieldset>
                        <div class="form-group container mt-3">
                             <div class="row">
                              <input type="submit" value="Enregistrer" class="mx-auto btn btn-light col-3">
                            </div>
                        </div>
                    </form>
                                <?php
            }
            else{ 
                ?>
                <p class="alert alert-danger">Vous n'êtes pas encore inscrit. Vous devez vous insrcrire avant de pouvoir commander</p>
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
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Tel :</label>
                                    <div class="col-md-8 col-lg-9 container">
                                       <div class="input-group">
                                            <input name="prefixe" type="tel" class="form-control" required minlength="2" maxlength="4" value="0">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text">/</div>
                                            </div>
                                            <input name="champ1" type="tel" class="form-control" required minlength="2" maxlength="3">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ2" type="tel" class="form-control" required minlength="2" maxlength="2">
                                            <div class="input-group-prepend">
                                                 <div class="input-group-text"> </div>
                                            </div>
                                            <input name="champ3" type="tel" class="form-control" required minlength="2" maxlength="2">
                                            <small class="form-text"> Seuls les numéros écrits de cette manière sont acceptés : <br> 0../.. .. .. ou 0./... .. .. ou 04../.. .. ..</small>
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
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Adresse :</label>
                                <div class="col-md-8 col-lg-9 form-inline">
                                    <input name="adresse" type="text" class="form-control col-9" id="colFormLabel" required>
                                    <input name="numero" type="num" class="form-control col-3" id="colFormLabel" required>
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
                              <select  name="ville" class="custom-select" id="colFormLabel">
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
                        <input type="checkbox" class="form-check-input ml-2" id="exampleCheck1" required>
                        <label class="ml-2 form-check" for="exampleCheck1">J'accepte l'utilisation de mes informations. </label>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/popper.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script>   
</body>
</html>