<?php
require_once('fpdf/fpdf.php');

// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Archipel SPRL \n 1380 Lasne \n info@gravissime.biz";

// adresse du client
$client = $_POST['nom'] "\n" $_POST['email']"\n" $_POST['tel']"/n" $_POST['adresse'] "/r" $_POST['commune'] ;

// pied de page
$piedPage1 = "Archipel SPRL - 1380 Lasne - info@gravissime.biz - 0494 44 41 42";
$piedPage2 = "TVA : BE 0460 510 864";

// initialise l'objet facturePDF
// gabarit : 	template['header']
//		template['client']
//		template['footer']
//
// le constructeur attend 3 paramètres :
//	- l'adresse de l'entreprise qui émet la facture
//	- l'adresse du client
//	- le pied de page
//
$pdf = new facturePDF($adresse, $client, $piedPage1."\n".$piedPage2);

// défini le logo avec setLogo()
// il suffit de passer l'adresse du logo en paramètre
// par défaut le logo est affiché dans le coin haut gauche.
// si vous voulez changer la position il faut utiliser les variables suivantes :
//	- $logoPosX : coordonnée sur X (abscisse)
//	- $logoPosY : coordonnée sur X (ordonnées)
//	- $logoWidth : largeur de l'image (en mm);
//
$pdf->setLogo('logo.png');

// entête des produits
// gabarit : template['productHead']
//
// l'entête des produits est une array() qui contient la liste des colonnes des produits.
// productHeaderAddRow() attend 3 paramètres :
//	- le titre de la colonne
//	- la largeur de la colonne
//	- l'alignement du texte
// la largeur et l'alignement seront utilisés pour chaque cellule appartenant à cette colonne
// vous pouvez ajouter autant de colonne que vous souhaitez.
// Les dimensions sont exprimé en millimètres.
//
$pdf->productHeaderAddRow('Produit', 75, 'L');
$pdf->productHeaderAddRow('Quantite', 25, 'L');

// entête des totaux
// gabarit : template['totalHead']
//
// idem que l'entête des produits, mais est utilisé pour le tableau qui contiendra les totaux.
// totalHeaderAddRow() attend 2 paramètres :
//	- la largeur de la colonne
//	- l'alignement du texte
//
$pdf->totalHeaderAddRow(100, 'C');

// élément personnalisé
// gabarit : identifiant passé en paramètre
//
// ajoute des éléments personnalisé avec elementAdd()
// on passe 3 paramètre :
//	- le texte à afficher
//	- un identifiant qui sera utilisé dans le gabarit d'affichage
//	- la zone à laquelle sera rattaché cet élément ('header', 'content', 'footer')
//
$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #2 Créer une facture
// gabarit :	template['infoFacture']
//		template['infoDate']
//		template['infoPage']
//
// initFacture() attend 3 paramètres :
//	- numéro de facture
//	- date
//	- texte affiché avant le numéro de page
//
$pdf->initFacture("Facture 1", date, "Page ");

// produit
// gabarit : template['product']
//
// ajoute des lignes de produits avec la fonction productAdd()
// productAdd attend un array en paramètre. Cet array contient autant de valeurs que vous avez ajouté de colonnes avec productHeaderAddRow()
//
$pdf->productAdd(array($_POST['libelle'], $_POST['quantite']));

// ligne des totaux
// gabarit : template['total']
//
// même principe que pour les lignes de produits.
// vous pouvez ajouter autant de ligne que vous souhaitez.
$pdf->totalAdd(array('Total :' $_POST['total']));


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #3 Importe le gabarit
//
// pour la démo j'ai enregistré le gabarit dans un fichier externe
//
require('gabarit'.intval($_GET['id']).'.php');


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #4 Finalisation
//
// construit le PDF
//
$pdf->buildPDF();

// télécharge le fichier
//
// Output attend 2 paramètres. Le nom du fichier et le mode. 'I' permet d'afficher le fichier, 'D' permet de le télécharger.
// plus d'info à http://www.fpdf.org/fr/doc/output.htm
//
$pdf->Output('facture.pdf', 'I');
?>