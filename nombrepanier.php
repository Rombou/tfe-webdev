<?php
    include_once("fonctions-panier.php");
    $nbArticles=count($_SESSION['panier']['libelleProduit']);
          echo $nbArticles;
?>