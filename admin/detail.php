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
                        <li class="breadcrumb-item">Utilisateur</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </nav>
       <?php
       if(isset($_SESSION['login'])){
           include 'header.php';
            $id=$_POST['id'];
            $reponse = $bdd->prepare('SELECT nom_ut, prenom FROM utilisateur  WHERE id= :id' );
            $reponse->execute(array(
                'id' => $id));
            $resultat = $reponse->fetch();  
            $nom = $resultat['nom_ut'];
            $prenom = $resultat['prenom'];
              ?>
            <form action="delete.php" class="container" method="post">
                <div class="form-group row table-secondary py-1">
                    <label for="colFormLabel" class="col-11 col-form-label"><?=$nom;?> <?=$prenom;?></label>
                    <div class="col-1">
                        <input type="hidden" value="<?=$id;?>" name="id">
                        <input type="submit" value="X" class="btn btn-light">
                    </div>
                </div>
            </form>
            
                    <?php
           $reponse = $bdd->prepare('SELECT * FROM commande WHERE ut_id= :id ORDER BY id DESC' );
                            $reponse->execute(array(
                                'id' => $id));
                            while ($donnees = $reponse->fetch())
                                {
                                    ?>
                                <div class="py-2">
                                    <div class="table-secondary col-12 text-center py-1"> <?=$donnees['date'];?></div>
                                    <div class="bg-light col-12 border-bottom py-1"><h4>Produit :</h4>
                                    <?=nl2br($donnees['produit']);?></div>
                                    <div class="table-secondary col-12 py-1"><h4>Total HTVA (21%) :</h4>
                                    <?=$donnees['totalHTVA'];?> €
                                    </div>
                                    <div class="col-12 bg-light py-1"><h4>Total TVAC</h4>
                                    <?=$donnees['totalTVAC'];?> €
                                    </div>
                                </div>
                                    <?php
                                }
                                $reponse->closeCursor();
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