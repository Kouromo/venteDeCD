<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="accueil.css" />
        <script src="https://kit.fontawesome.com/7c2235d2ba.js" crossorigin="anonymous"></script>
        <title>CDSpeed</title>
    </head>
    <body>
        <header>
            <img class="logo"
                src="logo.png"
                alt="CDSpeed">

            <section class="bag-log">
                <i class="fa-solid fa-bag-shopping"></i>

                <button class="favorite styled"
                    type="button">
                    Connexion
                    </button>
            </section>
        </header>
        <h1>Ma boutique de CD</h1>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">CD</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <main>
            <!-- Contenu de la page -->
            <?php
                // Charge le fichier XML dans un objet SimpleXML
                $xml = simplexml_load_file('../BD/bd.xml');

                // Parcours chaque enregistrement de CD dans le fichier XML
                foreach ($xml->cd as $cd)
                {
                    echo '<img src="../BD/' . $cd->image . '" alt="Texte alternatif">';
                    // Affiche le titre du CD entre des balises h2
                    echo '<h2>' . $cd->titre . '</h2>';
                    // Affiche l'artiste du CD entre des balises p
                    echo '<p>' . $cd->auteur . '</p>';
                    // Affiche le prix du CD entre des balises p
                    echo '<p>' . $cd->prix . '</p>';
                }
            ?>
        </main>
    </body>
</html>
