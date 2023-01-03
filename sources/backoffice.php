<?php
    try {

        echo "<html>";
        echo "<head>";
        echo "<title>BACK OFFICE</title>";
        echo "</head>";
        
        echo "<body>";
        echo "<form method=post action=insert.php>";
        echo "<label for=title>Titre :</label><br>";
        echo "<input type=text name=title id=title><br>";
        echo "<label for=artist>Artiste :</label><br>";
        echo "<input type=text name=artist id=artist><br>";
        echo "<label for=genre>Genre :</label><br>";
        echo "<input type=text name=genre id=genre><br>";
        echo "<label for=price>Prix :</label><br>";
        echo "<input type=text name=price id=price><br>";
        echo "<label for=album>Album :</label><br>";
        echo "<input type=text name=album id=album><br>";
        echo "<label for=image>Image :</label><br>";
        echo "<input type=file name=image id=image><br><br>";
        echo "<input type=submit value=Envoyer>";
        echo "</form>";
        echo "</body>";
        echo "</html>";

    } catch (Throwable $e) {
        echo 'Erreur : '.$e->getMessage().'<br />';
        die();
    }
?>