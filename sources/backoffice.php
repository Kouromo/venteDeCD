<?php
    try {

        echo "<html>";
        echo "<head>";

        echo '<meta charset="UTF-8" />';

        echo '<link rel="stylesheet" href="backoffice.css" />';

        echo '<script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>';
        echo '<title>Back-office</title>';
        echo '</head>';

        echo "<body>";
        echo "<header>";
        echo '<a href = "index.php">';
        echo '<img class="logo" src="logo.png" alt="CDSpeed">';
        echo '</a>';
        echo '<section class="bag-log">';
        echo '<a href="panier.php"><i class="fa-solid fa-bag-shopping"></i></a>';
        echo '<a href = "login.html" >';
        echo '<button class="favorite styled" type="button">Connexion</button>';
        echo '</a>';
        echo "</header>";


        echo "<form id='ajout' method='post' action='ajouterCD.php' enctype='multipart/form-data'>";
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

        foreach ($_FILES as $_FILES) {
            move_uploaded_file($_FILES , getcwd()/img/name);
        }

        // Formulaire de suppression de CD
        echo "<form id='suppr' method='post' action='supprimerCD.php'>";
        echo "<h2>Supprimer un titre de la BD</h2>";
        echo "<label for='titleDelete'>Titre à supprimer :</label><br>";
        echo "<select name='titleDelete' id='titleDelete'>";

        // Charger le fichier XML
        $xml = simplexml_load_file('../BD/bd.xml');

        // Parcourir les CD dans le fichier XML
        foreach ($xml->cd as $cd) {
            $title = $cd->titre;
            echo "<option value='$title'>$title</option>";
        }

        echo "</select><br>";
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