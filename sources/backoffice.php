<?php
    try {

        echo "<html>";
        echo "<head>";
        echo "<title>BACK OFFICE</title>";
        echo "</head>";
        
        echo "<body>";
        echo "<h1>Back-Office</h1>";
        echo "<hr>";
        echo "<form method='post' action='ajouterCD.php'>";
        echo "<h2>Ajouter un titre à la BD</h2>";
        echo "<label for='title'>Titre :</label><br>";
        echo "<input type='text' name='title' id='title'><br>";
        echo "<label for='artist'>Artiste :</label><br>";
        echo "<input type='text' name='artist' id='artist'><br>";
        echo "<label for='genre'>Genre :</label><br>";
        echo "<input type='text' name='genre' id='genre'><br>";
        echo "<label for='price'>Prix :</label><br>";
        echo "<input type='text' name='price' id='price'><br>";
        echo "<label for='album'>Album :</label><br>";
        echo "<input type='text' name='album' id='album'><br>";
        echo "<label for='image'>Image :</label><br>";
        echo "<input type='file' name='image' id='image'><br><br>";
        echo "<input type='submit' value='Envoyer'>";
        echo "</form>";
        echo "<hr>";

        // Formulaire de suppression de CD
        echo "<form method='post' action='supprimerCD.php'>";
        echo "<h2>Supprimer un titre de la BD</h2>";
        echo "<label for='titleDelete'>Titre à supprimer :</label><br>";
        echo "<input type='text' name='titleDelete' id='titleDelete'><br>";
        echo "<input type='submit' value='Envoyer'>";
        echo "</form>";
        
        // Fin du corps HTML
        echo "</body>";
        echo "</html>";

    } catch (Throwable $e) {
        echo 'Erreur : '.$e->getMessage().'<br />';
        die();
    }
?>