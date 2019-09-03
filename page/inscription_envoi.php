<?php
    include 'header.php'; 

    $email   = $_POST["email"];
    $nom     = $_POST["nom"];
    $prenom  = $_POST["prenom"];
    $tel     = $_POST["tel"];
    $adresse = $_POST['adresse'];
    $numero = $_POST['numero'];
    $ville = $_POST['ville'];
    $login = $_POST['login'];

    $requete ="INSERT INTO utilisateur (`nom_ut`, `prenom`, `email`, `telephone`, `adresse`, `numero`, `vilid`, `login`) VALUES ('$nom','$prenom','$email','$tel', '$adresse', '$numero', '$ville', '$login')";
    $bdd->exec($requete);

    header ('location: connexion_enregistrement.php');
    ?>