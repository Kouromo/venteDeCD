<?php
    // Démarre la session
    session_start();
?>

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
            <a href = "accueil.php">
                <img class="logo"
                src="logo.png"
                alt="CDSpeed">
                </a>

            <section class="bag-log">
                <a href="panier.php"><i class="fa-solid fa-bag-shopping"></i></a>

                <a href = "login.html" >
                    <button class="favorite styled" type="button">
                        Connexion
                    </button>
                </a>
            </section>
        </header>

        <main>
            <!-- Contenu de la page -->
            <?php
                // Charge le fichier XML dans un objet SimpleXML
                $xml = simplexml_load_file('../BD/bd.xml');

                // Initialise le compteur à 0
                $counter = 0;

                // Parcours chaque enregistrement de CD dans le fichier XML
                foreach ($xml->cd as $cd)
                {
                    // Si le compteur atteint 6, arrête la boucle
                    if ($counter == 6) {
                        break;
                    }
                    echo '<a href="details.php?id=' . $cd->id . '"><img class="image" src="../BD/Images/' . $cd->image . '" alt="Texte alternatif"></a>';
                    // Affiche le titre du CD entre des balises h2
                    echo '<h2 class="titre">' . $cd->titre . '</h2>';
                    // Affiche l'artiste du CD entre des balises p
                    echo '<p class="auteur">' . $cd->auteur . '</p>';
                    // Affiche le prix du CD entre des balises p
                    echo '<p class="prix">' . $cd->prix . '</p>';
                    // Incrémente le compteur
                    $counter++;
                }

                $counter = 0;
                foreach ($xml->cd as $cd) {
                    if ($counter < 6) {
                        $counter++;
                        continue;
                    }
                    // code à exécuter sur chaque élément à partir de la 7ème itération
                    // Si le compteur atteint 6, arrête la boucle
                    if ($counter == 12) {
                        break;
                    }
                    echo '<a href="details.php?id=' . $cd->id . '"><img class="image2" src="../BD/Images/' . $cd->image . '" alt="Texte alternatif"></a>';
                    // Affiche le titre du CD entre des balises h2
                    echo '<h2 class="titre2">' . $cd->titre . '</h2>';
                    // Affiche l'artiste du CD entre des balises p
                    echo '<p class="auteur2">' . $cd->auteur . '</p>';
                    // Affiche le prix du CD entre des balises p
                    echo '<p class="prix2">' . $cd->prix . '</p>';
                    // Incrémente le compteur
                    $counter++;
                }
            ?>
        </main>
    </body>
</html>
