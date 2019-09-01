 <?php
    try 
        {
            $bdd = new PDO('mysql:host=localhost;
                            dbname=rbourgeois_grav;
                            charset=utf8', 'rbourgeois_grav', 'W3FM0sScc');
        }
        catch(Exception $e)
        {
            die('Erreur : '.$e->getMessage());
        }
?>