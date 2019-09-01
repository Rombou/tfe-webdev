<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Nouvelle coordonnée</title>
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
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
                <li class="breadcrumb-item">Gravissime</li>
                <li class="breadcrumb-item active">Nouvelle coordonnée</li>
            </ol>
        </nav>
         <?php
            include 'header.php';
            $nom     = $_POST['nom'];
            $prenom  = $_POST['prenom'];
            $id      = $_POST['id'];
            $tel     = $_POST['tel'];
            $adresse = $_POST['adresse'];
            $num     = $_POST['num'];
            $ville   = $_POST['ville'];
        if (preg_match('#04([7-9][0-9])[ ][0-9]{2}[ ][0-9]{2}[ ][0-9]{2}#', $tel) || preg_match('#0[2-4|9][ ][0-9]{3}[ ][0-9]{2}[ ][0-9]{2}#', $tel) || preg_match('#0(1[0-5|9]|5[0-9]|6[^2|^6]|71|8[^8])[ ][0-9]{2}[ ][0-9]{2}[ ][0-9]{2}#', $tel)){
            if ($nom == $nom){
            
            $requete = "UPDATE `utilisateur` SET `telephone` = '$tel', `adresse` = '$adresse', `numero` = '$num', `vilid` = '$ville'  WHERE `utilisateur`. `utid` = $id";
            $bdd->exec($requete);
        ?>
        <p>Bonjour <?=$nom;?> <?=$prenom;?>, vos données sont mises à jour</p>
        <p class="mt-2"><a href="../index.php" class="btn btn-light">Retour</a></p> 
        <?php
            }
            else {echo 'Solution impossible';}
        }
        else {
            ?>
            <form action="userupdate.php" method="post" class="needs-validation" novalidate>
                        <input type="hidden" name="id" value="<?=$id;?>">
                        <fieldset class="mb-3">
                            <legend class="text-center">Personne de contact</legend>
                            <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Nom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="nom" type="text" class="form-control" id="colFormLabel" value="<?=$nom;?>" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Prénom :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="prenom"  type="text" class="form-control" id="colFormLabel" value="<?=$prenom;?>" readonly>
                               </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Email :</label>
                                <div class="col-md-8 col-lg-9">
                                    <input type="text" class="form-control" name="email" value="<?=$email;?>" readonly>
                               </div>
                        </div>
                        </fieldset>
                        <fieldset class="mb-3">
                            <legend class="text-center">Adresse de livraison</legend>
                            <div class="form-group row">
                                    <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Télephone/GSM :</label>
                                    <div class="col-lg-9 col-md-8">
                                        <input name="tel" type="tel" class="form-control" id="colFormLabel" required value="<?=$tel;?>">
                                        <small id="emailHelp" class="alert alert-danger"> Seuls les numéros écrits de cette manière sont acceptés : <br> 0.. .. .. .. ou 0. ... .. .. ou 04.. .. .. ..</small>
                                        <div class="text-danger">Numéro de téléphone non conforme. Merci de réessayer </div>
                                        <span class="valid-feedback">
                                            Cela semble correct !
                                        </span>
                                        <span class="invalid-feedback">
                                          Champs requis.
                                       </span>
                                    </div>
                            </div>  
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Adresse :</label>
                                <div class="col-lg-9 col-md-8 container">
                                   <div class="form-inline">
                                    <input name="adresse" type="text" class="col-9 form-control" id="colFormLabel" value="<?=$adresse;?>" readonly>
                                    <input name="num" type="num" class="col-3 form-control" id="colFormLabel" value="<?=$num;?>" readonly>
                               </div>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="colFormLabel" class="col-lg-3 col-md-4 col-form-label">Commune :</label>
                                <div class="col-lg-9 col-md-8">
                              <select  name="ville" class="browser-default custom-select" id="colFormLabel" disabled>
                                  <?php
                                    $rep = $bdd->prepare('SELECT * FROM ville WHERE villeid = :ville');
                                    $rep->execute(array(
                                        'ville' => $ville));
                                    $res = $rep->fetch();
                                ?>
                                 <option value="<?=$ville;?>"> <?=$res['cp'];?> <?=$res['commune'] ;?></option>
                              </select>
                            </div>
                        </div>
                            </fieldset>
                            <div class="form-group text-center">
                                      <input type="submit" class="btn btn-light" value="Envoyer"> 
                            </div>
                    </form> 
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
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>   
</body>
</html>