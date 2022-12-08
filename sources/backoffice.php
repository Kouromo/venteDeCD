<?php
    try {

        echo "<html>";
        echo "<head>";
        echo "<title>BACK OFFICE</title>";
        echo "</head>";

        echo "<body>";
        
        echo "</body>";

    } catch (Throwable $e) {
        echo 'Erreur : '.$e->getMessage().'<br />';
        die();
    }
?>