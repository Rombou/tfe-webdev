<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Inscription</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../image/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
            <img src="../image/logo.png" width="100%" class="header">
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
                <li class="breadcrumb-item active">Login / Mot de Passe oublié</li>
            </ol>
        </nav>
    <div class="container pb-2">
<?php
    try 
        {
//         $bdd = new PDO('mysql:host=localhost;
//        dbname=rbourgeois_grav;
//        charset=utf8', 'rbourgeois_grav', 'W3FM0sScc');
            $bdd = new PDO('mysql:host=localhost;
                            dbname=gravissime;
                            charset=utf8', 'root', 'root');   
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
//Récuperer email depuis variable $_POST
$email = $_POST["email"];
//Verification existance de l'email sur la base de données
$query = db->query("SELECT email FROM utilisateur WHERE mail =".$email);
$exist = count($query) == 1;
if($exists){
    $nom     = htmlentities($_POST['nom']); 
                      

                      $destinataire = $email; // Adresse email de l'utilisateur
                      $sujet = 'Changement de mot de passe';
                      $contenu = '<html><head><title>Changement de mot de passe</title></head><body>';
                      $contenu .= ?> <a href="#">Cliquez ici pour avoir un nouveau mot de passe</a> <?php 
                      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)

                      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
                      $headers = 'MIME-Version: 1.0'."\r\n";
                      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

                      // Envoyer l'email
                      mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
                      echo 'Un message vous a été envoyé'; // Afficher un message pour indiquer que le message a été envoyé
                      //  Fin du code pour traiter l'envoi de l'email
                    ?>
                    <p class="mt-2"><a href="../../index.php" class="btn btn-light">Retour</a></p>
                    <?php
}else{ 
header ('location:connexion_entegistrement.php')
} 
?>
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