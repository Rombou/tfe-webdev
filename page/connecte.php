<?php 
    session_start();
    if (isset($_SESSION['id']) AND isset($_SESSION['login']))
        {   echo 'Bonjour ' . $_SESSION['login'];
                }
                else {
                    echo 'pas bonjour';}
                ?>