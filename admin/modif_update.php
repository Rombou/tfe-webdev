<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Admin</title>
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
            <p>Votre solution pour la livraison de graviers, sable, béton, sables stabilisés,...</p>
        </div>
    </header>
</div>
<div class="container">
   <div class="col-xs-12 content pb-4">
      <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-1">
                    <?php
                      include 'navigation.php';  
                    ?>
                </div>
               <div class="col-lg-9 col-md-10 col-sm-11 my-2">
                <div class="container">
                 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime - Admin</li>
                        <li class="breadcrumb-item active">Modification compte</li>
                    </ol>
                </nav>
       <?php
       if(isset($_SESSION['login'])){
           include 'header.php';
        $login= $_POST['login'];
        $req = $bdd->prepare('SELECT id FROM admin WHERE login = :login');
        $req->execute(array(
            'login'=> $login));
        $resultat = $req->fetch();
        $mdp = $_POST['password'];
        $password = md5($mdp);
        $id = $resultat['id'];
        $requete = "UPDATE `admin` SET `mdp` = '$password'  WHERE `admin`.`id` = $id";
            $bdd->exec($requete);
        
       ?>
        <p class="alert alert-success">Mots de passe changé</p>
                    <?php
       }
       else {
           header ('location: index.php');
       }
                    ?>
          </div>
          </div>
       </div>
    </div>
</div>
<div class="container">
    <div class="col-sm-12" style="background-color : #fafc3a;">
        <div class="mx-auto p-1 pb-2 text-center" >
            <a class="text-secondary" href="deconnecte.php">Se déconnecter</a>
        </div>
    </div>
</div>
<script src="../assets/js/form.js"></script>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script> 
</body>
</html>