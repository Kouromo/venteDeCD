<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="accueil.css" />
        <title>Panier</title>
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
        <main>
            <?php
                session_start();
                // Vérifie si la variable de session "panier" existe
                if (isset($_SESSION['panier'])) {
                    // Si elle existe, charge le fichier XML dans un objet SimpleXML
                    $xml = simplexml_load_file('../BD/bd.xml');
                    // Affiche le titre de la page
                    echo '<h2>Contenu de votre panier</h2>';
                    // Affiche le contenu du panier dans un tableau
                    echo '<table>';
                    echo '<tr>';
                    echo '<th>Titre</th>';
                    echo '<th>Auteur</th>';
                    echo '<th>Prix</th>';
                    echo '</tr>';
                    // Pour chaque article du panier
                    foreach ($_SESSION['panier'] as $article) {
                        // Récupère l'identifiant de l'article dans la variable $id
                        $id = $article['id'];

                        // Utilise l'identifiant de l'article pour récupérer les informations de l'article dans le fichier XML
                        $titre = $xml->cd[$id-1]->titre;
                        $auteur = $xml->cd[$id-1]->auteur;
                        $prix = $xml->cd[$id-1]->prix;

                        // Affiche les informations de l'article dans un tableau
                        echo '<tr>';
                        echo '<td>' . $titre . '</td>';
                        echo '<td>' . $auteur . '</td>';
                        echo '<td>' . $prix . '</td>';
                        echo '</tr>';
                    }

                    echo '</table>';
                }
                else {
                    // Si la variable de session "panier" n'existe pas, on affiche un message
                    echo "Votre panier est vide.";
                }
            ?>
        </main>
    </body>
</html>