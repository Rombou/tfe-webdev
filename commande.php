<?php
session_start();
include_once("fonctions-panier.php");
?>
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
            <div class="col-lg-9 col-md-10 col-sm-9 my-2">
               <div class="container">
                   <nav aria-label="breadcrumb">
                          <ol class="breadcrumb bg-light">
                            <li class="breadcrumb-item">Gravissime</li>
                            <li class="breadcrumb-item active">Commande</li>
                          </ol>
                    </nav>
                    <div>
                        <form action="envoicommande.php" method="post">
                          <div class="contenu mb-2">
                          <h4>Adresse du destinataire</h4>
                                <input type="hidden" name="id" value="<?=$_POST['id'];?>">
                                <input type="hidden" name="nom" value="<?=$_POST['nom'];?>"><input type="hidden" name="prenom" value="<?=$_POST['prenom'];?>">
                                <input type="hidden" name="email" value="<?=$_POST['email'];?>">
                                <input type="hidden" name="tel" value="<?=$_POST['tel'];?>">
                                <input type="hidden" name="adresse" value="<?=$_POST['adresse'];?>"> <input type="hidden" name="num" value="<?=$_POST['numero'];?>">
                                <input type="hidden" name="cp" value="<?=$_POST['cp'];?>"> <input type="hidden" name="commune" value="<?=$_POST['commune'];?>">
                            <p><?=$_POST['nom'] ;?> <?=$_POST['prenom'] ;?></p>
                            <p><?=$_POST['email'] ;?> </p>
                            <p><?=$_POST['tel'] ;?> </p>
                            <p><?=$_POST['adresse'] ;?> <?=$_POST['num'] ;?> <br>
                            <?=$_POST['cp'] ;?> <?=$_POST['commune'] ;?> </p>
                          <h4>Résumé de la commande</h4>
                              <table class="col-10 table-light">
                               <tr class="table-secondary">
                                   <th class="p-2">Libellé</th>
                                   <th class="p-2">Quantité</th>
                                   <th class="p-2">Prix unitaire</th>
                                   <th class="p-2">Prix HTVA</th>
                               </tr>
        <?php
            $nbArticles=count($_SESSION['panier']['libelleProduit']);
            ?>
            <?php
            for ($i=0 ;$i < $nbArticles ; $i++)
                {
                    ?>
                              <tr class="text-left">
                                    <td class="p-2"><?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></td>
                                   <td class="p-2"><?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?></td>
                                   <td class="p-2"><?=htmlspecialchars($_SESSION['panier']['prixProduit'][$i]);?></td>
                                   <td class="p-2"><?php
                                    $prix = htmlspecialchars($_SESSION['panier']['qteProduit'][$i])*htmlspecialchars($_SESSION['panier']['prixProduit'][$i]).' €';
                                    echo $prix;
                                    ?></td>
                                </tr> 

                    <?php
                         }
        ?>
        <textarea name="commande" cols="30" rows="10" wrap="soft" class="d-none"><?php
                        if (creationPanier())
                        {
                            $nbArticles=count($_SESSION['panier']['libelleProduit']);
                            if ($nbArticles <= 0) {
                            echo "Votre panier est vide ";}
                            else
                            {
                                for ($i=0 ;$i < $nbArticles ; $i++)
                                {
                                echo htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]).' :'."\n".' - Quantité : '.htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\n".' - Prix unitaire : '.htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."\n".' - Prix htva (21%) : '.htmlspecialchars($_SESSION['panier']['qteProduit'][$i])*htmlspecialchars($_SESSION['panier']['prixProduit'][$i]).' €'."\n"."\n";
                                }
                            }
                        }
                        ?></textarea>
        <tr class="mx-1 text-center table-secondary">
                                    <td colspan='4' class="p-2"><input type="hidden" name="total" value="<?=MontantGlobal();?>">Sous total : <?=MontantGlobal();?> € *
                    </td>
                                </tr>
                                <tr class="mx-1 text-center table">
                                    <td colspan="4">
                                       TVA 21% :  <?php
                            $prix = MontantGlobal();
                            $c = 21/100;
                            $tva = round(($prix * $c),2);
                            echo $tva.' €';
                          ?>
                                   <input type="hidden" name="tva" value="<?=$tva;?>">
                                    </td>
                                </tr>
                                <tr class="table-secondary text-center mx-1 table">
                                    <td colspan='4'>Total TVAC :
                         <?php
                           $totTvac = $prix + $tva;
                            echo $totTvac.' €';
                         ?> *
                     <input type="hidden" name="totTvac" value="<?=$totTvac;?>">
                                    </td>
                                </tr>
                              </table>
                          <legend class="font-italic">* Prix hors frais de transport.</legend>
                      </div>
                            <p>
                          <center>
                           <input class="btn btn-light col-2" type="submit" value="Envoyer">
                            </center>
                        </p>
                       </form> 
                       <?php
                         $_session= array();
                                session_destroy();  
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
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js”></script> 
</body>
</html>