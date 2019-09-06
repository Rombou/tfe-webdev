<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Commande</title>
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
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-2 col-xs-2">
                <?php
                  include 'navigation.php';  
                ?>
            </div>
            <div class="col-lg-9 col-md-10 col-sm-10 my-2">
               <div class="container">
                    <nav aria-label="breadcrumb">
                          <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item">Gravissime</li>
                            <li class="breadcrumb-item active">Commande</li>
                          </ol>
                    </nav>
                    <div class="contenu mb-2">
                                <?php
                                $nom      = htmlentities($_POST['nom']);
                                $prenom   = htmlentities($_POST['prenom']);
                                $email    = htmlentities($_POST['email']);
                                $tel      = htmlentities($_POST['tel']);
                                $adresse  = htmlentities($_POST['adresse']);
                                $num      = htmlentities($_POST['num']);
                                $cp       = htmlentities($_POST['cp']);
                                $commune  = htmlentities($_POST['commune']);
                                $total    = htmlentities($_POST['total']);
                                $tableau  = htmlentities($_POST['commande']);
                                $tva      = htmlentities($_POST['tva']);
                                $totTvac  = htmlentities($_POST['totTvac']);
                                $commande = nl2br($tableau);
                                $id       = $_POST['id'];

                            $to = "romain.bourgeois@skynet.be";
                            $sujet = "Nouvelle commande";

                            $contenu .= '<img width="100%" src="https://gravissime.biz/page/logo.png"><div style="color: #333;">'."\n";
                            $contenu .= '<h4>Adresse du destinataire</h4>'."\n";
                            $contenu .= '<p>'.$nom .' '.$prenom.'</p>'."\n";
                            $contenu .= '<p>'.$email.'</p>'."\n";
                            $contenu .= '<p>'.$tel.'</p>'."\n";
                            $contenu .= '<p>'.$adresse.' '.$num.'<br>'.$cp.' '.$commune.'</p>'."\n";
                            $contenu .= '<h4>Commande</h4>'."\n";
                            $contenu .= '<div style="background: #ECECEC"><div style="padding : 0.5 1em; padding-bottom : 0;"><p>'.$commande.'</p></div>';
                            $contenu .= '<p style="text-align : center; background: #CFCFCF; padding : 1em;"> Sous total : '.$total.' € * </p>';
                            $contenu .= '<p style="text-align : center; background: #ECECEC; padding : 0 1em;"> TVA 21% : '.$tva.' € </p>';
                            $contenu .= '<p style="text-align : center; background: #CFCFCF; padding : 1em;"> Total TVAC : '.$totTvac.' € *</p></div>';
                            $contenu .= '<i>* Prix hors frais de transport.</i>';
                            $contenu .= '<p>Archipel SPRL - 1380 Lasne - info@gravissime.biz - 0494 44 41 42<br>TVA : BE 0460 510 864 </p>';
                            $contenu .= '</div>'; // Contenu du message de l'email (en XHTML)

                            // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
                            $headers  = 'MIME-Version: 1.0'."\n";
                            $headers .= 'Content-type: text/html; charset=utf8'."\n";
                            $headers .= 'From: Gravissime <info@gravissime.biz>'."\n";
                            $headers .= 'Reply-to :'.$email."\n";
                            $headers .= 'Cc : '.$email."\n";
                            $headers .= 'X-Priority: 2'."\r\n";
                            $headers .= 'X-MSMail-Priority: High'."\r\n";
                            $headers .= 'Importance: High'."\r\n";
                            $headers .= "Content-Transfer-Encoding: 8bit\n";

                            // Envoyer l'email
                           $success = mail($to, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
                          if (true==$success){
                              include 'header.php';
                              $requete ="INSERT INTO commande (`produit`, `totalHTVA`, `totalTVAC`,`date`, `ut_id` ) VALUES ('$tableau','$total','$totTvac',NOW(),'$id')";
                                $bdd->exec($requete);
                              ?>
                              <p class="alert alert-success"> Produit(s) commandé(s)</p>
                              <p class="alert alert-info">Vous recevrez un mail de confirmation. <br>Attention ce mail peut être susceptible de se trouver dans vos spams.</p>
                              <?php
                          }
                          else {
                              ?> 
                              <p class="alert alert-danger"> Une erreure s'est produite, veuillez <a href="commande.php">réessayer</a> !</p>
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
  <footer>
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