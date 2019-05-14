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
    <style type="text/css">
        a:hover {
            color: #222;
        }
    </style>
</head>
<body>
 <script type="text/javascript">
    var pdfdoc = new jsPDF();
    var specialElementHandlers = {
            "#ignoreContent": function(element, renderer) {
        return true;
        }
    };
    $(document).ready(function(){
        $('#gpdf').click(function(){
        pdfdoc.fromHTML($("#PDFcontent").html(), 10, 10, {‘width’: 110, ‘elementHandlers’: specialElementHandlers

    });
pdfdoc.save("commande.pdf");
    });});
</script>
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
       <div class="text-center py-2 content">
           <div class="container">
           <nav aria-label="breadcrumb">
                      <ol class="breadcrumb bg-light">
                        <li class="breadcrumb-item">Gravissime</li>
                        <li class="breadcrumb-item active">Commande</li>
                      </ol>
                </nav>
            <div id=”PDFcontent“>
                  <div class="header mb-2">
                      <img src="logo.png" alt="">
                  </div>
                  <div class="contenu mb-2">
                      <h4>Adresse du destinataire</h4>
                        <p><?=$_POST['nom'] ;?> <?=$_POST['prenom'] ;?></p>
                        <p><?=$_POST['email'] ;?> </p>
                        <p><?=$_POST['tel'] ;?> </p>
                        <p><?=$_POST['adresse'] ;?> <?=$_POST['num'] ;?> <br>
                        <?=$_POST['cp'] ;?> <?=$_POST['commune'] ;?> </p>
                      <h4>Résumer de la commande</h4>
                          <table class="col-6 table-light mx-auto">
                           <tr class="table table-secondary">
                               <th class="col-4">Libellé</th>
                               <th class="col-2">Quantité</th>
                           </tr>
    <?php
	if (creationPanier())
	{
		$nbArticles=count($_SESSION['panier']['libelleProduit']);
		
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				?>
                          <tr class="table text-left">
                                <td class="col-4"><?=htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]);?></td>
                               <td class="col-4"><?=htmlspecialchars($_SESSION['panier']['qteProduit'][$i]);?></td>
                            </tr> 
                                
				<?php
			         }
	}  
	?>
	<tr class="mx-1 text-center table-secondary">
                                <td colspan='2' class="bg-light p-2">Total : <?=MontantGlobal();?> €
                </td>
                            </tr>
                          </table>
                  </div>
                <div class="footer">
                       <p>Archipel SPRL - 1380 Lasne - info@gravissime.biz - 0494 44 41 42<br>
                           TVA : BE 0460 510 864 </p>
                   </div>
                </div>  
                <button id=”gpdf” class="btn btn-light">Envoyer</button>
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
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/popper.min.js"></script> 
<script src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/scripts/mootools.js"></script>
<script type="text/javascript" src="../assets/scripts/multibox.js"></script>
<script type="text/javascript" src="../assets/scripts/overlay.js"></script>
<script src=”https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js”></script> 
</body>
</html>