<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gravissime - Inscription</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
    <link rel="shortcut icon" href="../assets/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/image/favicon.ico" type="image/x-icon">
</head>
<body>
 <?php
  include 'header.php';
    $reponse = $bdd->query('SELECT * FROM utilisateur INNER JOIN ville ON vilid=villeid');
        while ($donnees = $reponse->fetch())
        {
            echo $donnees['nom_ut'].' '.$donnees['prenom'];
            echo $donnees['email'];
            echo $donnees['telephone'];
            echo $donnees['adresse'].' '.$donnees['numero'];
            echo $donnees['cp'].' '.$donnees['commune'];
        }
?>
 <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/popper.min.js"></script> 
    <script src="../assets/js/bootstrap.min.js"></script>   
</body>
</html>