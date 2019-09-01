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
            <div class="col-lg-9 col-md-10 my-1">
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
$email   = htmlentities($_POST["email"]);
$nom     = htmlentities($_POST["nom"]);
$prenom  = htmlentities($_POST["prenom"]);
$tel     = htmlentities($_POST["tel"]);
$adresse = htmlentities($_POST['adresse']);
$numero = htmlentities($_POST['numero']);
$ville = htmlentities($_POST['ville']);
$login = htmlentities($_POST['login']);

    $to = $email;
    $subject = 'Inscription';
    
    $contenu  = '<img width="100%" src="https://gravissime.biz/page/logo.png">';
    $contenu .= '<p> Bonjour '.$nom.' '.$prenom.',</p>';
    $contenu .= '<p>Merci de continuer l\'inscription :</p>';
    $contenu .= '<form action="https://gravissime.biz/page/connexion_enregistrement.php" method="post"><input type="hidden" name="email" value="'.$email.'"><input type="hidden" name="login" value="'.$login.'"><input type="submit" style="padding : 0.5em; border : 1pt solid #C2C2C2; background: #ECECEC; border-radius : 1em; color #333; width: 30%;" value="Continuer"> </form>';
    $contenu .= '<p> Bien à vous,<br> Gravissime</p>';
        
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'From: Gravissime <info@gravissime.biz>'."\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
    $headers .= 'X-Priority: 2'."\r\n";
    $headers .= 'X-MSMail-Priority: High'."\r\n";
    $headers .= 'Importance: High'."\r\n";
    $headers .= 'Content-Transfer-Encoding: 8BIT'."\r\n";
        
    mail($to, $subject, $contenu, $headers);
    
    $requete ="INSERT INTO utilisateur (`nom_ut`, `prenom`, `email`, `telephone`, `adresse`, `numero`, `vilid`, `login`) VALUES ('$nom','$prenom','$email','$tel', '$adresse', '$numero', '$ville', '$login')";
    $bdd->exec($requete);
    ?>
                    <div class="alert-info alert">
                       Un mail vous a été envoyé pour confirmer votre adresse mail ainsi que pour indiquer votre mot de passe, et pour continuer votre inscription. <br>
                    </div>
                    <div class="text-right">
                    <form action="mail_confirm.php" method="post">
                    <input type="hidden" value="<?=$email;?>" name="email">
                    <input type="submit" class="btn btn-info" value="Pas reçu d'email">
                        </form>
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