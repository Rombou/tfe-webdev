<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Login/mot de passe oublié</title>
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
       <div class="col-12 py-2 content">
       <div class="row">
           <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                <?php
                  include 'navigation.php';  
                ?>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-9 my-2 mb-4">
              <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">Gravissime</li>
                <li class="breadcrumb-item active">Login/mot de passe oublié</li>
            </ol>
        </nav>
    <div class="container pb-2">
   <?php
    include 'header.php';
    $email = $_POST['email'];
    $mdp = $_POST['password'];
    $login = $_POST['login'];
    $password = md5($mdp);
    $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email = :mail');
    $req->execute(array(
        'mail'=> $email));
    $resultat = $req->fetch();
    if ($resultat['password']== $password){
       ?>
            <form action="userswitch.php" method="post" class="needs-validation" novalidate>
                      <fieldset class="col-12">
                      <legend class="text-center">Enregistrement données</legend>
                       <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-lg-9 col-md-8">
                                    <input name="mail" type="text" class="form-control" aria-describedby="emailHelp" id="colFormLabel" readonly value="<?=$email;?>">
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
                                    <input name="password" type="password" class="form-control border-danger" id="colFormLabel" required>
                                    <legend class="text-danger">Mots de passe dèjà utilisé !</legend>
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
                              <input type="submit" value="Enregistrer" class="mx-auto btn btn-light col-3">
                        </div>
                    </form>
            <?php 
    }
    else {
        $id = $resultat['id'];
       $requete = "UPDATE `utilisateur` SET `password` = '$password'  WHERE `utilisateur`.`id` = $id";
            $bdd->exec($requete);
        ?>
        <p class="alert alert-success">Mot de Passe changé.</p>
        <?php
}
?>
</div>
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