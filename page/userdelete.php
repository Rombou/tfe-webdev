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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">Gravissime</li>
                <li class="breadcrumb-item active">Désinscription</li>
            </ol>
        </nav>
         <?php
                    $nom     = htmlentities($_POST['nom']); 
                      $prenom  = htmlentities($_POST['prenom']);
                      $email   = htmlentities($_POST["email"]);

    
	                $to = 'romain.bourgeois@skynet.be';
                    $sujet = 'Demande de supression';
                    
                    $contenu = '<img width="100%" src="https://gravissime.biz/page/logo.png">';
                    $contenu .= '<p>De '.$nom.' '.$prenom.'</p>';
                    $contenu .= '<p>Cette personne désire supprimer compte.</p>';
                    $contenu .= '<p>Une vérification de commande en cours doit être faite.</p>';
                    
                    
                    $headers  = 'MIME-Version: 1.0'."\r\n";
                    $headers .= 'Reply-To: <'.$email.'>'."\r\n"; 
                    $headers .= 'From:  Gravissime <info@gravissime.biz>'."\r\n";
                    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
                    $headers .= 'X-Priority: 2'."\r\n";
                    $headers .= 'X-MSMail-Priority: High'."\r\n";
                    $headers .= 'Importance: High'."\r\n";
                    $headers .= 'Content-Transfer-Encoding: 8bit'."\r\n"; 

                    
                mail($to, $sujet, $contenu, $headers);
        ?>
        <p class="alert alert-succes">Un mail a été envoyé à Gravissime. Si vous avez des commandes en cours, votre compte ne sera pas supprimé.</p>
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