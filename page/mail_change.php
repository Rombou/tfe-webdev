<?php
  
                       include 'header.php';
                        $email = $_POST['email'];
                    
                        $req = $bdd->prepare('SELECT id FROM utilisateur WHERE email = :mail');
                        $req->execute(array(
                            'mail' => $email));
                        $resultat = $req->fetch();
                        $id=$resultat['id'];
                        $requete = "DELETE FROM `utilisateur` WHERE `utilisateur`.`id` = $id";
                        $bdd->exec($requete);
                        header ('location: inscription.php');
                    ?>