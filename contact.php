<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Contact</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
    <link rel="shortcut icon" href="assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/image/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="container">
    <header class="col-xs-12 mt-5 pull-right">
        <img src="assets/image/logo.png" width="100%" class="header">
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
                          <li class="breadcrumb-item"><a href="index.php">Gravissime</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                      </ol>
                </nav>
                <form action="envoimail.php" method="post" class="container" name="contact" role="form">
                    <input type="hidden" name="envoi" value="1"/>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                        <div class="col-lg-9 col-md-8">
                          <input type="text" name="nom" class="form-control" id="colFormLabel" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                        <div class="col-lg-9 col-md-8">
                          <input type="email" name="email" class="form-control" id="colFormLabel" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Téléphone :</label>
                        <div class="col-lg-9 col-md-8">
                          <input type="tel" name="tel" class="form-control" id="colFormLabel" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Message :</label>
                        <div class="col-lg-9 col-md-8">
                          <textarea name="message" class="form-control" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-2 mx-auto">
                          <input type="submit" class="form-control" value="Envoyer"> 
                        </div>
                    </div>
                </form>
                <div class="bg-light p-2">
                    <p>Dépôt à Lasne <br>
                    Bureau : avenue Demolder, 1342 Limelette</p>
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
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/scripts/mootools.js"></script>
<script type="text/javascript" src="assets/scripts/multibox.js"></script>
<script type="text/javascript" src="assets/scripts/overlay.js"></script> 
</body>
</html>