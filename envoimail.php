<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
    <style type="text/css">
        a:hover {
            color: #222;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-xs-12">
           <header class="col-xs-12 mt-5 pull-right">
        <img src="../image/logo.png" width="100%" class="header">
        <div class="text-center text-uppercase pb-1 pt-3" style="background-color : #fafc3a;">
            <p>Votre solution pour la livraison de graviers, sables, béton, sables stabilisés,...</p>
        </div>
    </header>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-12 content">
            <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                          <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Contact</li>
                    
                      </ol>
                </nav>
                <div class="container pb-2">
                     <?php
                      $nom     = htmlentities($_POST['nom']); 
                      $email   = htmlentities($_POST['email']);
                      $message = htmlentities($_POST['message']);
                      $tel = htmlentities($_POST['tel']);

                      // Variables concernant l'email

                      $destinataire = 'romain.bourgeois@skynet.be'; // Adresse email du webmaster (à personnaliser)
                      $sujet = 'Nouveau message du site';
                      $contenu = '<html><head><title>Nouveau message du site</title></head><body>';
                      $contenu .= '<p>Nom : '.$nom.'</p>';
                      $contenu .= '<p>Email : '.$email.'</p>';
                      $contenu .= '<p>Telephone : '.$tel.'</p>';
                      $contenu .= '<p>Message : '.$message.'</p>';
                      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

                      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
                      $headers = 'MIME-Version: 1.0'."\r\n";
                      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

                      // Envoyer l'email
                      mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
                      echo 'Message envoyé !'; // Afficher un message pour indiquer que le message a été envoyé
                      //  Fin du code pour traiter l'envoi de l'email
                        ?>
                        <p class="mt-2"><a href="../../index.php" class="btn btn-light">Retour</a></p>
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
    <script src="../js/jquery.js"></script>
    <script src="../js/popper.min.js"></script> 
    <script src="../js/bootstrap.min.js"></script>   
</body>
</html>