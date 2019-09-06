<?php
    $_session= array();
    session_destroy();  
    header ('location: index.php');
?>